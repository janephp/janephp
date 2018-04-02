<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Mapper;
use Jane\AutoMapper\MapperConfigurationInterface;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;

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

        /** @var PropertyMapping $propertyMapping */
        foreach ($propertiesMapping as $propertyMapping) {
            [$output, $propStatements] = $propertyMapping->getTransformer()->transform($propertyMapping->getReadAccessor()->getExpression($sourceInput), $uniqueVariableScope);
            $propStatements[] = $propertyMapping->getWriteMutator()->getExpression($result, $output);

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
