<?php

namespace Jane\Component\JsonSchema\Generator\Normalizer;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use PhpParser\Comment\Doc;
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
     *
     * @return Naming
     */
    abstract protected function getNaming();

    /**
     * Create method to check if denormalization is supported.
     *
     * @param string $modelFqdn Fully Qualified name of the model class denormalized
     * @param bool   $symfony7  Use Symfony 7 prototype or not
     *
     * @return Stmt\ClassMethod
     */
    protected function createSupportsDenormalizationMethod(string $modelFqdn, bool $symfony7)
    {
        return new Stmt\ClassMethod('supportsDenormalization', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'returnType' => new Identifier('bool'),
            'params' => [
                $symfony7
                    ? new Param(new Expr\Variable('data'), type: new Identifier('mixed'))
                    : new Param(new Expr\Variable('data')),
                $symfony7
                    ? new Param(new Expr\Variable('type'), type: new Identifier('string'))
                    : new Param(new Expr\Variable('type')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null')), new Identifier('string')),
                new Param(new Expr\Variable('context'), new Expr\Array_(), new Identifier('array')),
            ],
            'stmts' => [new Stmt\Return_(new Expr\BinaryOp\Identical(
                new Expr\Variable('type'),
                new Expr\ClassConstFetch(new Name\FullyQualified($modelFqdn), new Identifier('class'))
            ))],
        ]);
    }

    protected function createDenormalizeMethod(string $modelFqdn, Context $context, ClassGuess $classGuess, bool $symfony7): Stmt\ClassMethod
    {
        $context->refreshScope();
        $objectVariable = new Expr\Variable('object');
        $dataVariable = new Expr\Variable('data');
        $statements = [];

        if ($this->useReference) {
            $statements[] = new Stmt\If_(
                new Expr\Isset_([new Expr\ArrayDimFetch($dataVariable, new Scalar\String_('$ref'))]),
                [
                    'stmts' => [
                        new Stmt\Return_(new Expr\New_(new Name('Reference'), [
                            new Arg(new Expr\ArrayDimFetch($dataVariable, new Scalar\String_('$ref'))),
                            new Arg(new Expr\ArrayDimFetch(new Expr\Variable('context'), new Scalar\String_('document-origin'))),
                        ])),
                    ],
                ]
            );
            $statements[] = new Stmt\If_(
                new Expr\Isset_([new Expr\ArrayDimFetch($dataVariable, new Scalar\String_('$recursiveRef'))]),
                [
                    'stmts' => [
                        new Stmt\Return_(new Expr\New_(new Name('Reference'), [
                            new Arg(new Expr\ArrayDimFetch($dataVariable, new Scalar\String_('$recursiveRef'))),
                            new Arg(new Expr\ArrayDimFetch(new Expr\Variable('context'), new Scalar\String_('document-origin'))),
                        ])),
                    ],
                ]
            );
        }

        $statements[] = new Stmt\Expression(new Expr\Assign(
            $objectVariable,
            new Expr\New_(new Name\FullyQualified($modelFqdn)),
        ));

        foreach ($classGuess->getProperties() as $property) {
            if (Type::TYPE_FLOAT !== $property->getType()->getName()) {
                continue;
            }
            $baseCondition = new Expr\FuncCall(new Name('\array_key_exists'), [
                new Arg(new Scalar\String_($property->getName())),
                new Arg($dataVariable),
            ]);
            $arrayElement = new Expr\ArrayDimFetch($dataVariable, new Scalar\String_($property->getName()));
            $intCondition = new Expr\FuncCall(new Name('\is_int'), [$arrayElement]);
            $condition = new Expr\BinaryOp\BooleanAnd($baseCondition, $intCondition);
            $castFloat = new Stmt\Expression(new Expr\Assign($arrayElement, new Expr\Cast\Double($arrayElement)));
            $statements[] = new Stmt\If_($condition, ['stmts' => [$castFloat]]);
        }
        foreach ($classGuess->getProperties() as $property) {
            if (Type::TYPE_BOOLEAN !== $property->getType()->getName()) {
                continue;
            }
            $baseCondition = new Expr\FuncCall(new Name('\array_key_exists'), [
                new Arg(new Scalar\String_($property->getName())),
                new Arg($dataVariable),
            ]);
            $arrayElement = new Expr\ArrayDimFetch($dataVariable, new Scalar\String_($property->getName()));
            $intCondition = new Expr\FuncCall(new Name('\is_int'), [$arrayElement]);
            $condition = new Expr\BinaryOp\BooleanAnd($baseCondition, $intCondition);
            $castFloat = new Stmt\Expression(new Expr\Assign($arrayElement, new Expr\Cast\Bool_($arrayElement)));
            $statements[] = new Stmt\If_($condition, ['stmts' => [$castFloat]]);
        }
        if ($this->validation) {
            $schema = $context->getCurrentSchema();
            $contextVariable = new Expr\Variable('context');
            $constraintFqdn = $schema->getNamespace() . '\\Validator\\' . $this->naming->getConstraintName($classGuess->getName());

            $statements[] = new Stmt\If_(new Expr\BooleanNot(new Expr\BinaryOp\Coalesce(new Expr\ArrayDimFetch($contextVariable, new Scalar\String_('skip_validation')), new Expr\ConstFetch(new Name('false')))), ['stmts' => [
                new Stmt\Expression(new Expr\MethodCall(new Expr\Variable('this'), 'validate', [
                    new Arg($dataVariable), new Arg(new Expr\New_(new Name('\\' . $constraintFqdn))),
                ])),
            ]]);
        }

        $denormalizeMethodStatements = $this->denormalizeMethodStatements($classGuess, $context);
        if (\count($denormalizeMethodStatements) > 0) {
            array_unshift($statements, ...$denormalizeMethodStatements);
        }

        $unset = \count($classGuess->getExtensionsType()) > 0;

        $statements[] = new Stmt\If_(new Expr\BinaryOp\BooleanOr(new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('null')), $dataVariable), new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('false')), new Expr\FuncCall(new Name('\is_array'), [new Arg($dataVariable)]))), [
            'stmts' => [new Stmt\Return_($objectVariable)],
        ]);

        foreach ($classGuess->getProperties() as $property) {
            $propertyVar = new Expr\ArrayDimFetch($dataVariable, new Scalar\String_($property->getName()));
            list($denormalizationStatements, $outputVar) = $property->getType()->createDenormalizationStatement($context, $propertyVar);

            $baseCondition = new Expr\FuncCall(new Name('\array_key_exists'), [
                new Arg(new Scalar\String_($property->getName())),
                new Arg($dataVariable),
            ]);
            $fullCondition = $baseCondition;

            $mutatorStmt = array_merge($denormalizationStatements, [
                new Stmt\Expression(new Expr\MethodCall(
                    $objectVariable,
                    $this->getNaming()->getPrefixedMethodName('set', $property->getAccessorName()),
                    [$outputVar],
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
                    new Stmt\Expression(new Expr\MethodCall(
                        $objectVariable,
                        $this->getNaming()->getPrefixedMethodName('set', $property->getAccessorName()),
                        [new Arg(new Expr\ConstFetch(new Name('null')))],
                    )),
                ]);
            }
        }

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
            $statements[] = new Stmt\Foreach_($dataVariable, $loopValueVar, [
                'keyVar' => $loopKeyVar,
                'stmts' => $patternCondition,
            ]);
        }
        $statements[] = new Stmt\Return_($objectVariable);

        return new Stmt\ClassMethod('denormalize', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'returnType' => $symfony7 ? new Identifier('mixed') : null,
            'params' => [
                $symfony7 ? new Param($dataVariable, type: new Identifier('mixed')) : new Param($dataVariable),
                $symfony7 ? new Param(new Expr\Variable('type'), type: new Identifier('string')) : new Param(new Expr\Variable('type')),
                $symfony7 ? new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null')), new Identifier('string')) : new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null'))),
                new Param(new Expr\Variable('context'), new Expr\Array_(), new Identifier('array')),
            ],
            'stmts' => $statements,
        ], [
            'comments' => $symfony7 ? [] : [new Doc(<<<EOD
/**
 * @return mixed
 */
EOD
            )],
        ]);
    }

    protected function denormalizeMethodStatements(ClassGuess $classGuess, Context $context): array
    {
        return [];
    }
}
