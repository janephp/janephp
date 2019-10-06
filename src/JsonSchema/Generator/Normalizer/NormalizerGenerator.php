<?php

namespace Jane\JsonSchema\Generator\Normalizer;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\JsonSchema\Guesser\Guess\Property;
use PhpParser\Node\Arg;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;

trait NormalizerGenerator
{
    /**
     * The naming service.
     *
     * @return Naming
     */
    abstract protected function getNaming();

    protected function createNormalizerClass($name, $methods, $useCacheableSupportsMethod = false)
    {
        $traits = [
            new Stmt\TraitUse([new Name('DenormalizerAwareTrait')]),
            new Stmt\TraitUse([new Name('NormalizerAwareTrait')]),
        ];

        $implements = [
            new Name('DenormalizerInterface'),
            new Name('NormalizerInterface'),
            new Name('DenormalizerAwareInterface'),
            new Name('NormalizerAwareInterface'),
        ];

        if ($useCacheableSupportsMethod) {
            $implements[] = new Name('CacheableSupportsMethodInterface');
        }

        return new Stmt\Class_(
            new Name($this->getNaming()->getClassName($name)),
            [
                'stmts' => array_merge($traits, $methods),
                'implements' => $implements,
            ]
        );
    }

    /**
     * Create method to check if denormalization is supported.
     *
     * @param string $modelFqdn Fully Qualified name of the model class denormalized
     * @param bool   $useProxy
     *
     * @return Stmt\ClassMethod
     */
    protected function createSupportsNormalizationMethod(string $modelFqdn, string $proxyFqdn, bool $useProxy)
    {
        $statements = [];

        if ($useProxy) {
            $statements[] = new Stmt\Return_(new Expr\Instanceof_(new Expr\Variable('data'), new Name('\\' . $proxyFqdn)));
        } else {
            $statements[] = new Stmt\Return_(new Expr\Instanceof_(new Expr\Variable('data'), new Name('\\' . $modelFqdn)));
        }

        return new Stmt\ClassMethod('supportsNormalization', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable('data')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null'))),
            ],
            'stmts' => $statements,
        ]);
    }

    /**
     * Create the normalization method.
     *
     * @param string     $modelFqdn
     * @param Context    $context
     * @param ClassGuess $classGuess
     * @param bool       $useProxy
     *
     * @return Stmt\ClassMethod
     */
    protected function createNormalizeMethod($modelFqdn, Context $context, ClassGuess $classGuess, bool $useProxy)
    {
        $context->refreshScope();
        $dataVariable = new Expr\Variable('data');
        $statements = $this->normalizeMethodStatements($dataVariable, $classGuess, $context);

        if ($useProxy) {
            $propertiesVariable = new Expr\Variable('properties');
            $statements[] = new Stmt\Expression(new Expr\Assign(
                $propertiesVariable,
                new Expr\MethodCall(new Expr\Variable('object'), '__properties')
            ));
        }

        /** @var Property $property */
        foreach ($classGuess->getProperties() as $property) {
            if ($useProxy) {
                $propertyVar = new Expr\ArrayDimFetch(new Expr\Variable('properties'), new Scalar\String_($property->getName()));
            } else {
                $propertyVar = new Expr\MethodCall(new Expr\Variable('object'), $this->getNaming()->getPrefixedMethodName('get', $property->getPhpName()));
            }

            list($normalizationStatements, $outputVar) = $property->getType()->createNormalizationStatement($context, $propertyVar);

            $normalizationStatements[] = new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch($dataVariable, sprintf("{'%s'}", $property->getName())), $outputVar));

            if ($property->isNullable()) {
                $statements = array_merge($statements, $normalizationStatements);

                continue;
            }

            $statements[] = new Stmt\If_(
                new Expr\BinaryOp\NotIdentical(new Expr\ConstFetch(new Name('null')), $propertyVar),
                [
                    'stmts' => $normalizationStatements,
                ]
            );
        }

        $patternCondition = [];
        $loopKeyVar = new Expr\Variable($context->getUniqueVariableName('key'));
        $loopValueVar = new Expr\Variable($context->getUniqueVariableName('value'));

        foreach ($classGuess->getExtensionsType() as $pattern => $type) {
            list($denormalizationStatements, $outputVar) = $type->createNormalizationStatement($context, $loopValueVar);

            $patternCondition[] = new Stmt\If_(
                new Expr\FuncCall(new Name('preg_match'), [
                    new Arg(new Expr\ConstFetch(new Name("'/" . str_replace('/', '\/', $pattern) . "/'"))),
                    new Arg($loopKeyVar),
                ]),
                [
                    'stmts' => array_merge($denormalizationStatements, [
                        new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch($dataVariable, $loopKeyVar), $outputVar)),
                    ]),
                ]
            );
        }

        if (\count($patternCondition) > 0) {
            $statements[] = new Stmt\Foreach_(new Expr\Variable('object'), $loopValueVar, [
                'keyVar' => $loopKeyVar,
                'stmts' => $patternCondition,
            ]);
        }

        $statements[] = new Stmt\Return_($dataVariable);

        return new Stmt\ClassMethod('normalize', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable('object')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null'))),
                new Param(new Expr\Variable('context'), new Expr\Array_(), 'array'),
            ],
            'stmts' => $statements,
        ]);
    }

    /**
     * Create method to say that hasCacheableSupportsMethod is supported.
     *
     * @return Stmt\ClassMethod
     */
    protected function createHasCacheableSupportsMethod()
    {
        return new Stmt\ClassMethod('hasCacheableSupportsMethod', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'returnType' => 'bool',
            'stmts' => [
                new Stmt\Return_(new Expr\ConstFetch(new Name('true'))),
            ],
        ]);
    }

    protected function normalizeMethodStatements(Expr\Variable $dataVariable, ClassGuess $classGuess, Context $context): array
    {
        return [
            new Stmt\Expression(new Expr\Assign($dataVariable, new Expr\New_(new Name('\\stdClass')))),
        ];
    }
}
