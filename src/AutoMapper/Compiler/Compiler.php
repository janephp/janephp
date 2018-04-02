<?php

namespace Jane\AutoMapper\Compiler;

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
        $statements = [
            new Expr\Assign($result, new Expr\New_(new Name($mapperConfiguration->getTarget()))),
        ];

        if ($mapperConfiguration->getTarget() === 'array') {
            $statements = [
                new Expr\Assign($result, new Expr\Array_()),
            ];
        }

        /** @var PropertyMapping $propertyMapping */
        foreach ($propertiesMapping as $propertyMapping) {
            [$output, $propStatements] = $propertyMapping->getTransformer()->transform($propertyMapping->getReadAccessor()->getExpression($sourceInput), $uniqueVariableScope);
            $propStatements[] = $propertyMapping->getWriteMutator()->getExpression($result, $output);

            if ($propertyMapping->checkExists()) {
                $condition = new Expr\FuncCall(new Name('property_exists'), [
                    new Arg($sourceInput),
                    new Arg(new Scalar\String_($propertyMapping->getProperty())),
                ]);

                if ($mapperConfiguration->getSource() === 'array') {
                    $condition = new Expr\FuncCall(new Name('array_key_exists'), [
                        new Arg(new Scalar\String_($propertyMapping->getProperty())),
                        new Arg($sourceInput),
                    ]);
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
                new Param('options', new Expr\Array_(), 'array'),
            ],
            'stmts' => $statements,
        ]);

        return new Stmt\Class_(new Name($mapperConfiguration->getMapperClassName()), [
            'flags' => Stmt\Class_::MODIFIER_FINAL,
            'extends' => new Name\FullyQualified(Mapper::class),
            'stmts' => [$method],
        ]);
    }
}
