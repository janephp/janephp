<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Context;
use Jane\AutoMapper\Mapper;
use Jane\AutoMapper\MapperConfigurationInterface;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\Scalar;

class Compiler
{
    public function compile(MapperConfigurationInterface $mapperConfiguration)
    {
        $propertiesMapping = $mapperConfiguration->getPropertiesMapping();

        if (\count($propertiesMapping) === 0) {
            throw new \RuntimeException('No properties to compile');
        }

        $uniqueVariableScope = new UniqueVariableScope();
        $sourceInput = new Expr\Variable($uniqueVariableScope->getUniqueName('value'));
        $result = new Expr\Variable($uniqueVariableScope->getUniqueName('result'));
        $hashVariable = new Expr\Variable($uniqueVariableScope->getUniqueName('sourceHash'));
        $contextVariable = new Expr\Variable($uniqueVariableScope->getUniqueName('context'));
        $statements = [];

        if ($mapperConfiguration->getSource() !== 'array') {
            $statements[] = new Expr\Assign($hashVariable, new Expr\BinaryOp\Concat(new Expr\FuncCall(new Name('spl_object_hash'), [
                new Arg($sourceInput),
            ]),
                new Scalar\String_($mapperConfiguration->getTarget())
            ));
            $statements[] = new Stmt\If_(new Expr\FuncCall(new Name('array_key_exists'), [
                new Arg($hashVariable),
                new Arg(new Expr\MethodCall($contextVariable, 'getRegistry')),
            ]), [
                'stmts' => [
                    new Stmt\Return_(new Expr\ArrayDimFetch(new Expr\MethodCall($contextVariable, 'getRegistry'), $hashVariable)),
                ],
            ]);
        }

        if ($mapperConfiguration->getTarget() === 'array') {
            $statements[] = new Expr\Assign($result, new Expr\Array_());
        }

        if ($mapperConfiguration->getTarget() !== 'array') {
            $statements[] = new Expr\Assign($result, new Expr\New_(new Name($mapperConfiguration->getTarget())));
        }

        if ($mapperConfiguration->getSource() !== 'array') {
            $statements[] = new Expr\AssignRef(
                new Expr\ArrayDimFetch(new Expr\MethodCall($contextVariable, 'getRegistry'), $hashVariable),
                $result
            );
        }

        /** @var PropertyMapping $propertyMapping */
        foreach ($propertiesMapping as $propertyMapping) {
            [$output, $propStatements] = $propertyMapping->getTransformer()->transform($propertyMapping->getReadAccessor()->getExpression($sourceInput), $uniqueVariableScope);
            $propStatements[] = $propertyMapping->getWriteMutator()->getExpression($result, $output);
            $conditions = [];

            if ($propertyMapping->checkExists()) {
                if ($mapperConfiguration->getSource() === \stdClass::class) {
                    $conditions[] = new Expr\FuncCall(new Name('property_exists'), [
                        new Arg($sourceInput),
                        new Arg(new Scalar\String_($propertyMapping->getProperty())),
                    ]);
                }

                if ($mapperConfiguration->getSource() === 'array') {
                    $conditions[] = new Expr\FuncCall(new Name('array_key_exists'), [
                        new Arg(new Scalar\String_($propertyMapping->getProperty())),
                        new Arg($sourceInput),
                    ]);
                }
            }

            if (null !== $propertyMapping->getSourceGroups()) {
                $conditions[] = new Expr\BinaryOp\BooleanAnd(
                    new Expr\BinaryOp\NotIdentical(
                        new Expr\ConstFetch(new Name('null')),
                        new Expr\MethodCall(new Expr\Variable('context'), 'getGroups')
                    ),
                    new Expr\FuncCall(new Name('array_intersect'), [
                        new Arg(new Expr\MethodCall(new Expr\Variable('context'), 'getGroups')),
                        new Arg(new Expr\Array_(array_map(function (string $group) {
                            return new Expr\ArrayItem(new Scalar\String_($group));
                        }, $propertyMapping->getSourceGroups()))),
                    ])
                );
            }

            if (null !== $propertyMapping->getTargetGroups()) {
                $conditions[] = new Expr\BinaryOp\BooleanAnd(
                    new Expr\BinaryOp\NotIdentical(
                        new Expr\ConstFetch(new Name('null')),
                        new Expr\MethodCall(new Expr\Variable('context'), 'getGroups')
                    ),
                    new Expr\FuncCall(new Name('array_intersect'), [
                        new Arg(new Expr\MethodCall(new Expr\Variable('context'), 'getGroups')),
                        new Arg(new Expr\Array_(array_map(function (string $group) {
                            return new Expr\ArrayItem(new Scalar\String_($group));
                        }, $propertyMapping->getTargetGroups()))),
                    ])
                );
            }

            if (\count($conditions) > 0) {
                $condition = array_shift($conditions);

                while (\count($conditions) > 0) {
                    $condition = new Expr\BinaryOp\BooleanAnd($condition, array_shift($conditions));
                }

                $propStatements = [new Stmt\If_($condition, [
                    'stmts' => $propStatements,
                ])];
            }

            $statements = array_merge(
                $statements,
                $propStatements
            );
        }

        $statements[] = new Stmt\Return_($result);

        $method = new Stmt\ClassMethod('map', [
            'flags' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param($sourceInput->name),
                new Param('context', null, new Name\FullyQualified(Context::class)),
            ],
            'stmts' => $statements,
        ]);

        return new Stmt\Class_(new Name($mapperConfiguration->getMapperClassName()), [
            'flags' => Stmt\Class_::MODIFIER_FINAL,
            'extends' => new Name\FullyQualified(Mapper::class),
            'stmts' => [
                new Stmt\Property(Stmt\Class_::MODIFIER_PROTECTED, [
                    new Stmt\PropertyProperty('hash', new Scalar\String_($mapperConfiguration->getModificationHash())),
                ]),
                $method,
            ],
        ]);
    }
}
