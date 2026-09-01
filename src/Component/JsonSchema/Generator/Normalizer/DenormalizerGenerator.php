<?php

namespace Jane\Component\JsonSchema\Generator\Normalizer;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use PhpParser\Modifiers;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait DenormalizerGenerator
{
    /**
     * The naming service.
     */
    abstract protected function getNaming(): Naming;

    /**
     * Create a method to check if denormalization is supported.
     *
     * @param string $modelFqdn Fully Qualified name of the model class denormalized
     */
    protected function createSupportsDenormalizationMethod(string $modelFqdn): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('supportsDenormalization', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Identifier('bool'),
            'params' => [
                new Param(new Expr\Variable('data'), type: new Identifier('mixed')),
                new Param(new Expr\Variable('type'), type: new Identifier('string')),
                new Param(
                    new Expr\Variable('format'),
                    new Expr\ConstFetch(new Name('null')),
                    new Identifier('?string')
                ),
                new Param(new Expr\Variable('context'), new Expr\Array_(), new Identifier('array')),
            ],
            'stmts' => [new Stmt\Return_(new Expr\BinaryOp\Identical(
                new Expr\Variable('type'),
                new Expr\ClassConstFetch(new Name\FullyQualified($modelFqdn), new Identifier('class'))
            ))],
        ]);
    }

    protected function createDenormalizeMethod(string $modelFqdn, Context $context, ClassGuess $classGuess): Stmt\ClassMethod
    {
        $context->refreshScope();
        $objectVariable = new Expr\Variable('object');
        $dataVariable = new Expr\Variable('data');
        $statements = [];

        $statements[] = new Stmt\Expression(new Expr\Assign(
            $objectVariable,
            new Expr\New_(new Name\FullyQualified($modelFqdn)),
        ));

        $statements[] = new Stmt\If_(new Expr\BinaryOp\BooleanOr(new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('null')), $dataVariable), new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('false')), new Expr\FuncCall(new Name('\is_array'), [new Arg($dataVariable)]))), [
            'stmts' => [new Stmt\Return_($objectVariable)],
        ]);

        if ($this->useReference) {
            array_push($statements, ...$this->createReferenceReturnStatements($dataVariable));
        }

        $denormalizeMethodStatements = $this->denormalizeMethodStatements($classGuess, $context);
        if (\count($denormalizeMethodStatements) > 0) {
            array_push($statements, ...$denormalizeMethodStatements);
        }

        foreach ([
            Type::TYPE_FLOAT => static fn (Expr $element): Stmt\Expression => new Stmt\Expression(new Expr\Assign($element, new Expr\Cast\Double($element, ['kind' => Expr\Cast\Double::KIND_FLOAT]))),
            Type::TYPE_BOOLEAN => static fn (Expr $element): Stmt\Expression => new Stmt\Expression(new Expr\Assign($element, new Expr\Cast\Bool_($element))),
        ] as $typeName => $cast) {
            $statements = array_merge($statements, $this->createScalarCastStatements($classGuess, $dataVariable, $typeName, $cast));
        }

        if ($this->validation) {
            $statements[] = $this->createValidationStatement($context, $classGuess, $dataVariable);
        }

        $statements = array_merge($statements, $this->createPropertyDenormalizationStatements($classGuess, $context, $objectVariable, $dataVariable));
        $statements = array_merge($statements, $this->createPatternPropertiesDenormalizationStatements($classGuess, $context, $objectVariable, $dataVariable));
        $statements[] = new Stmt\Return_($objectVariable);

        return new Stmt\ClassMethod('denormalize', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Identifier('mixed'),
            'params' => [
                new Param($dataVariable, type: new Identifier('mixed')),
                new Param(new Expr\Variable('type'), type: new Identifier('string')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null')), new Identifier('?string')),
                new Param(new Expr\Variable('context'), new Expr\Array_(), new Identifier('array')),
            ],
            'stmts' => $statements,
        ], [
            'comments' => [],
        ]);
    }

    /**
     * Return early with a lazily-resolved Reference only when $ref is not
     * accompanied by structural schema keywords (allowed since JSON Schema
     * 2020-12); same for $recursiveRef.
     *
     * @return Stmt[]
     */
    private function createReferenceReturnStatements(Expr\Variable $dataVariable): array
    {
        $refIssetCondition = new Expr\Isset_([new Expr\ArrayDimFetch($dataVariable, new Scalar\String_('$ref'))]);
        $noTypeCondition = new Expr\BooleanNot(new Expr\Isset_([new Expr\ArrayDimFetch($dataVariable, new Scalar\String_('type'))]));
        $noPropertiesCondition = new Expr\BooleanNot(new Expr\Isset_([new Expr\ArrayDimFetch($dataVariable, new Scalar\String_('properties'))]));
        $noAllOfCondition = new Expr\BooleanNot(new Expr\Isset_([new Expr\ArrayDimFetch($dataVariable, new Scalar\String_('allOf'))]));

        return [
            new Stmt\If_(
                new Expr\BinaryOp\BooleanAnd(
                    new Expr\BinaryOp\BooleanAnd(
                        new Expr\BinaryOp\BooleanAnd($refIssetCondition, $noTypeCondition),
                        $noPropertiesCondition
                    ),
                    $noAllOfCondition
                ),
                [
                    'stmts' => [
                        new Stmt\Return_(new Expr\New_(new Name('Reference'), [
                            new Arg(new Expr\ArrayDimFetch($dataVariable, new Scalar\String_('$ref'))),
                            new Arg(new Expr\ArrayDimFetch(new Expr\Variable('context'), new Scalar\String_('document-origin'))),
                        ])),
                    ],
                ]
            ),
            new Stmt\If_(
                new Expr\Isset_([new Expr\ArrayDimFetch($dataVariable, new Scalar\String_('$recursiveRef'))]),
                [
                    'stmts' => [
                        new Stmt\Return_(new Expr\New_(new Name('Reference'), [
                            new Arg(new Expr\ArrayDimFetch($dataVariable, new Scalar\String_('$recursiveRef'))),
                            new Arg(new Expr\ArrayDimFetch(new Expr\Variable('context'), new Scalar\String_('document-origin'))),
                        ])),
                    ],
                ]
            ),
        ];
    }

    /**
     * Coerce integer payloads of float / boolean typed properties before
     * denormalization, mirroring the lenient behavior of JSON decoding.
     *
     * @param callable(Expr): Expr $cast
     *
     * @return Stmt[]
     */
    /**
     * @param callable(Expr): Stmt\Expression $cast
     *
     * @return Stmt[]
     */
    private function createScalarCastStatements(ClassGuess $classGuess, Expr\Variable $dataVariable, string $typeName, callable $cast): array
    {
        $statements = [];

        foreach ($classGuess->getProperties() as $property) {
            if ($typeName !== $property->getType()->getName()) {
                continue;
            }
            $baseCondition = new Expr\FuncCall(new Name('\array_key_exists'), [
                new Arg(new Scalar\String_($property->getName())),
                new Arg($dataVariable),
            ]);
            $arrayElement = new Expr\ArrayDimFetch($dataVariable, new Scalar\String_($property->getName()));
            $intCondition = new Expr\FuncCall(new Name('\is_int'), [$arrayElement]);
            $condition = new Expr\BinaryOp\BooleanAnd($baseCondition, $intCondition);
            $statements[] = new Stmt\If_($condition, ['stmts' => [$cast($arrayElement)]]);
        }

        return $statements;
    }

    private function createValidationStatement(Context $context, ClassGuess $classGuess, Expr\Variable $dataVariable): Stmt\If_
    {
        $schema = $context->getCurrentSchema();
        $contextVariable = new Expr\Variable('context');
        $constraintFqdn = $this->naming->getValidatorNamespace($schema->getNamespace(), $classGuess->getSubNamespace()) . '\\' . $this->naming->getConstraintName($classGuess->getName());

        return new Stmt\If_(new Expr\BooleanNot(new Expr\BinaryOp\Coalesce(new Expr\ArrayDimFetch($contextVariable, new Scalar\String_('skip_validation')), new Expr\ConstFetch(new Name('false')))), ['stmts' => [
            new Stmt\Expression(new Expr\MethodCall(new Expr\Variable('this'), 'validate', [
                new Arg($dataVariable), new Arg(new Expr\New_(new Name('\\' . $constraintFqdn))),
            ])),
        ]]);
    }

    /**
     * Denormalize each declared property and set it on the object.
     *
     * @return Stmt[]
     */
    private function createPropertyDenormalizationStatements(ClassGuess $classGuess, Context $context, Expr\Variable $objectVariable, Expr\Variable $dataVariable): array
    {
        $statements = [];
        $unset = \count($classGuess->getExtensionsType()) > 0;

        foreach ($classGuess->getProperties() as $property) {
            $propertyVar = new Expr\ArrayDimFetch($dataVariable, new Scalar\String_($property->getName()));
            list($denormalizationStatements, $outputVar) = $property->getType()->createDenormalizationStatement($context, $propertyVar);

            $baseCondition = new Expr\FuncCall(new Name('\array_key_exists'), [
                new Arg(new Scalar\String_($property->getName())),
                new Arg($dataVariable),
            ]);
            $fullCondition = $baseCondition;

            $mutatorStmt = array_merge($denormalizationStatements, [
                new Stmt\Expression(new Expr\Assign(
                    new Expr\PropertyFetch($objectVariable, $property->getPhpName()),
                    $outputVar,
                )),
            ], $unset ? [new Stmt\Unset_([$propertyVar])] : []);

            if (!$context->isStrict() || $property->isNullable()) {
                $fullCondition = new Expr\BinaryOp\BooleanAnd(
                    $baseCondition,
                    new Expr\BinaryOp\NotIdentical(
                        $propertyVar,
                        new Expr\ConstFetch(new Name('null'))
                    )
                );
            }

            $statements[] = new Stmt\If_($fullCondition, [
                'stmts' => $mutatorStmt,
            ]);

            if (!$context->isStrict() || $property->isNullable()) {
                $invertCondition = new Expr\BinaryOp\BooleanAnd(
                    $baseCondition,
                    new Expr\BinaryOp\Identical(
                        $propertyVar,
                        new Expr\ConstFetch(new Name('null'))
                    )
                );

                $statements[] = new Stmt\ElseIf_($invertCondition, [
                    new Stmt\Expression(new Expr\Assign(
                        new Expr\PropertyFetch($objectVariable, $property->getPhpName()),
                        new Expr\ConstFetch(new Name('null')),
                    )),
                    ...($unset ? [new Stmt\Unset_([$propertyVar])] : []),
                ]);
            }
        }

        return $statements;
    }

    /**
     * Fold additional / pattern matched properties into the object, iterating
     * the raw payload once when any pattern applies.
     *
     * @return Stmt[]
     */
    private function createPatternPropertiesDenormalizationStatements(ClassGuess $classGuess, Context $context, Expr\Variable $objectVariable, Expr\Variable $dataVariable): array
    {
        $patternCondition = [];
        $loopKeyVar = new Expr\Variable($context->getUniqueVariableName('key'));
        $loopValueVar = new Expr\Variable($context->getUniqueVariableName('value'));

        foreach ($classGuess->getExtensionsType() as $pattern => $type) {
            list($denormalizationStatements, $outputVar) = $type->createDenormalizationStatement($context, $loopValueVar);

            $patternCondition[] = new Stmt\If_(
                new Expr\FuncCall(new Name('preg_match'), [
                    new Arg(new Expr\ConstFetch(new Name("'/" . str_replace('/', '\/', $pattern) . "/'"))),
                    new Arg(new Expr\Cast\String_($loopKeyVar)),
                ]),
                [
                    'stmts' => array_merge($denormalizationStatements, [
                        new Stmt\Expression(new Expr\Assign(new Expr\ArrayDimFetch($objectVariable, $loopKeyVar), $outputVar)),
                    ]),
                ]
            );
        }

        if (\count($patternCondition) > 0) {
            return [new Stmt\Foreach_($dataVariable, $loopValueVar, [
                'keyVar' => $loopKeyVar,
                'stmts' => $patternCondition,
            ])];
        }

        return [];
    }

    protected function denormalizeMethodStatements(ClassGuess $classGuess, Context $context): array
    {
        return [];
    }
}
