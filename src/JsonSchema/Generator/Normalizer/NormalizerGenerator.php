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

trait NormalizerGenerator
{
    /**
     * The naming service.
     *
     * @return Naming
     */
    abstract protected function getNaming();

    protected function createNormalizerClass($name, $methods)
    {
        $traits = [
            new Stmt\TraitUse([new Name('DenormalizerAwareTrait')]),
            new Stmt\TraitUse([new Name('NormalizerAwareTrait')]),
        ];

        return new Stmt\Class_(
            new Name($this->getNaming()->getClassName($name)),
            [
                'stmts' => array_merge($traits, $methods),
                'implements' => [
                    new Name('DenormalizerInterface'),
                    new Name('NormalizerInterface'),
                    new Name('DenormalizerAwareInterface'),
                    new Name('NormalizerAwareInterface'),
                ],
            ]
        );
    }

    /**
     * Create method to check if denormalization is supported.
     *
     * @param string $modelFqdn Fully Qualified name of the model class denormalized
     *
     * @return Stmt\ClassMethod
     */
    protected function createSupportsNormalizationMethod($modelFqdn)
    {
        return new Stmt\ClassMethod('supportsNormalization', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param('data'),
                new Param('format', new Expr\ConstFetch(new Name('null'))),
            ],
            'stmts' => [
                new Stmt\Return_(new Expr\Instanceof_(new Expr\Variable('data'), new Name('\\' . $modelFqdn))),
            ],
        ]);
    }

    /**
     * Create the normalization method.
     *
     * @param string     $modelFqdn
     * @param Context    $context
     * @param ClassGuess $classGuess
     *
     * @return Stmt\ClassMethod
     */
    protected function createNormalizeMethod($modelFqdn, Context $context, ClassGuess $classGuess)
    {
        $context->refreshScope();
        $dataVariable = new Expr\Variable('data');
        $statements = [
            new Expr\Assign($dataVariable, new Expr\New_(new Name('\\stdClass'))),
        ];

        /** @var Property $property */
        foreach ($classGuess->getProperties() as $property) {
            $propertyVar = new Expr\MethodCall(new Expr\Variable('object'), $this->getNaming()->getPrefixedMethodName('get', $property->getName()));
            list($normalizationStatements, $outputVar) = $property->getType()->createNormalizationStatement($context, $propertyVar);

            $normalizationStatements[] = new Expr\Assign(new Expr\PropertyFetch($dataVariable, sprintf("{'%s'}", $property->getName())), $outputVar);

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
                        new Expr\Assign(new Expr\PropertyFetch($dataVariable, $loopKeyVar), $outputVar),
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
                new Param('object'),
                new Param('format', new Expr\ConstFetch(new Name('null'))),
                new Param('context', new Expr\Array_(), 'array'),
            ],
            'stmts' => $statements,
        ]);
    }
}
