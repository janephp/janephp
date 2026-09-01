<?php

namespace Jane\Component\JsonSchema\Generator\Normalizer;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use PhpParser\Modifiers;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use PhpParser\Node\UnionType;

trait NormalizerGenerator
{
    /**
     * The naming service.
     */
    abstract protected function getNaming(): Naming;

    /**
     * Presence check replacing the former isInitialized(): get_object_vars() skips
     * uninitialized typed properties but includes ones explicitly set to null, so the
     * "never set" and "explicitly null" cases stay distinguishable.
     */
    private function isPropertyInitialized(Expr\Variable $objectVariable, Property $property): Expr
    {
        return new Expr\FuncCall(new Name('array_key_exists'), [
            new Arg(new Scalar\String_($property->getPhpName())),
            new Arg(new Expr\FuncCall(new Name('get_object_vars'), [new Arg($objectVariable)])),
        ]);
    }

    protected function createNormalizerClass($name, $methods, $useCacheableSupportsMethod = false): Stmt\Class_
    {
        $traits = [
            new Stmt\TraitUse([new Name('DenormalizerAwareTrait')]),
            new Stmt\TraitUse([new Name('NormalizerAwareTrait')]),
            new Stmt\TraitUse([new Name('CheckArray')]),
            new Stmt\TraitUse([new Name('ValidatorTrait')]),
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
            $this->getNaming()->getClassName($name),
            [
                'stmts' => array_merge($traits, $methods),
                'implements' => $implements,
            ]
        );
    }

    /**
     * Create a method to check if denormalization is supported.
     *
     * @param string $modelFqdn Fully Qualified name of the model class denormalized
     */
    protected function createSupportsNormalizationMethod(string $modelFqdn): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('supportsNormalization', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Identifier('bool'),
            'params' => [
                new Param(new Expr\Variable('data'), type: new Identifier('mixed')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null')), new Identifier('?string')),
                new Param(new Expr\Variable('context'), new Expr\Array_(), new Identifier('array')),
            ],
            'stmts' => [new Stmt\Return_(new Expr\Instanceof_(
                new Expr\Variable('data'),
                new Name('\\' . $modelFqdn)),
            )],
        ]);
    }

    /**
     * Create the normalization method.
     */
    protected function createNormalizeMethod(string $modelFqdn, Context $context, ClassGuess $classGuess, bool $skipNullValues = true, bool $skipRequiredFields = false, bool $includeNullValue = true): Stmt\ClassMethod
    {
        $context->refreshScope();
        $dataVariable = new Expr\Variable('dataArray');
        $objectVariable = new Expr\Variable('data');
        $statements = $this->normalizeMethodStatements($dataVariable, $classGuess, $context);

        $statements = array_merge($statements, $this->createPropertyNormalizationStatements($classGuess, $context, $objectVariable, $dataVariable, $skipNullValues, $skipRequiredFields, $includeNullValue));
        $statements = array_merge($statements, $this->createPatternPropertiesNormalizationStatements($classGuess, $context, $dataVariable, $objectVariable));

        if ($this->validation) {
            $statements[] = $this->createValidationStatement($context, $classGuess, $dataVariable);
        }

        $statements[] = new Stmt\Return_($dataVariable);

        return new Stmt\ClassMethod('normalize', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new UnionType([new Identifier('array'), new Identifier('string'), new Identifier('int'), new Identifier('float'), new Identifier('bool'), new Name('\ArrayObject'), new Identifier('null')]),
            'params' => [
                new Param($objectVariable, type: new Identifier('mixed')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null')), new Identifier('?string')),
                new Param(new Expr\Variable('context'), new Expr\Array_(), new Identifier('array')),
            ],
            'stmts' => $statements,
        ], [
            'comments' => [],
        ]);
    }

    /**
     * Normalize each declared property through its backing property, honouring
     * the skip-null / skip-required / include-null output policy.
     *
     * @return Stmt[]
     */
    private function createPropertyNormalizationStatements(ClassGuess $classGuess, Context $context, Expr\Variable $objectVariable, Expr\Variable $dataVariable, bool $skipNullValues, bool $skipRequiredFields, bool $includeNullValue): array
    {
        $statements = [];

        /** @var Property $property */
        foreach ($classGuess->getProperties() as $property) {
            if ($property->isReadOnly()) {
                continue;
            }

            $propertyVar = new Expr\BinaryOp\Coalesce(
                new Expr\PropertyFetch($objectVariable, $property->getPhpName()),
                new Expr\ConstFetch(new Name('null'))
            );

            list($normalizationStatements, $outputVar) = $property->getType()->createNormalizationStatement($context, $propertyVar);

            $normalizationStatements[] = new Stmt\Expression(new Expr\Assign(new Expr\ArrayDimFetch($dataVariable, new Scalar\String_($property->getName())), $outputVar));

            if (!$skipRequiredFields && $property->isRequired()) {
                $statements = array_merge($statements, $normalizationStatements);

                continue;
            }

            if (!$includeNullValue) {
                $statements[] = $this->createIncludeNullDisabledStatement($objectVariable, $property, $propertyVar, $normalizationStatements);

                continue;
            }

            $statements = array_merge($statements, $this->createRegularPropertyStatement($objectVariable, $property, $propertyVar, $normalizationStatements, $context, $skipNullValues, $dataVariable));
        }

        return $statements;
    }

    private function createIncludeNullDisabledStatement(Expr\Variable $objectVariable, Property $property, Expr $propertyVar, array $normalizationStatements): Stmt\If_
    {
        if (!$property->isRequired()) {
            return new Stmt\If_(
                $this->isPropertyInitialized($objectVariable, $property),
                ['stmts' => $normalizationStatements]
            );
        }

        return new Stmt\If_(
            new Expr\BinaryOp\NotIdentical(new Expr\ConstFetch(new Name('null')), $propertyVar),
            ['stmts' => $normalizationStatements]
        );
    }

    private function createRegularPropertyStatement(Expr\Variable $objectVariable, Property $property, Expr $propertyVar, array $normalizationStatements, Context $context, bool $skipNullValues, Expr\Variable $dataVariable): array
    {
        if (!$property->isRequired()) {
            $statement = new Stmt\If_(
                new Expr\BinaryOp\BooleanAnd(
                    $this->isPropertyInitialized($objectVariable, $property),
                    new Expr\BinaryOp\NotIdentical(new Expr\ConstFetch(new Name('null')), $propertyVar)
                ),
                ['stmts' => $normalizationStatements]
            );
        } else {
            $statement = new Stmt\If_(
                new Expr\BinaryOp\NotIdentical(new Expr\ConstFetch(new Name('null')), $propertyVar),
                ['stmts' => $normalizationStatements]
            );
        }

        $statements = [$statement];

        if ((!$context->isStrict() || $property->isNullable()
                || ($property->getType() instanceof MultipleType && \count(array_intersect([Type::TYPE_NULL], $property->getType()->getTypes())) === 1)
                || ($property->getType()->getName() === Type::TYPE_NULL)) && !$skipNullValues) {
            $statements[] = new Stmt\Else_(
                [new Stmt\Expression(new Expr\Assign(new Expr\ArrayDimFetch($dataVariable, new Scalar\String_($property->getName())), new Expr\ConstFetch(new Name('null'))))]
            );
        }

        return $statements;
    }

    /**
     * Fold additional / pattern matched properties into the normalized array,
     * iterating the model's extension entries once when any pattern applies.
     *
     * @return Stmt[]
     */
    private function createPatternPropertiesNormalizationStatements(ClassGuess $classGuess, Context $context, Expr\Variable $dataVariable, Expr\Variable $objectVariable): array
    {
        $patternCondition = [];
        $loopKeyVar = new Expr\Variable($context->getUniqueVariableName('key'));
        $loopValueVar = new Expr\Variable($context->getUniqueVariableName('value'));

        foreach ($classGuess->getExtensionsType() as $pattern => $type) {
            list($normalizationStatements, $outputVar) = $type->createNormalizationStatement($context, $loopValueVar);

            $patternCondition[] = new Stmt\If_(
                new Expr\FuncCall(new Name('preg_match'), [
                    new Arg(new Expr\ConstFetch(new Name("'/" . str_replace('/', '\/', $pattern) . "/'"))),
                    new Arg(new Expr\Cast\String_($loopKeyVar)),
                ]),
                [
                    'stmts' => array_merge($normalizationStatements, [
                        new Stmt\Expression(new Expr\Assign(new Expr\ArrayDimFetch($dataVariable, $loopKeyVar), $outputVar)),
                    ]),
                ]
            );
        }

        if (\count($patternCondition) > 0) {
            // Extension-container models iterate over their additional properties only: defined
            // properties are already normalized above through their public properties.
            return [new Stmt\Foreach_(new Expr\MethodCall($objectVariable, 'additionalPropertyEntries'), $loopValueVar, [
                'keyVar' => $loopKeyVar,
                'stmts' => $patternCondition,
            ])];
        }

        return [];
    }

    /**
     * Create a method to say that hasCacheableSupportsMethod is supported.
     */
    protected function createHasCacheableSupportsMethod(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('hasCacheableSupportsMethod', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Identifier('bool'),
            'stmts' => [
                new Stmt\Return_(new Expr\ConstFetch(new Name('true'))),
            ],
        ]);
    }

    protected function normalizeMethodStatements(Expr\Variable $dataVariable, ClassGuess $classGuess, Context $context): array
    {
        return [
            new Stmt\Expression(new Expr\Assign($dataVariable, new Expr\Array_())),
        ];
    }
}
