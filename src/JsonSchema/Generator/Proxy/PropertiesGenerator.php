<?php

namespace Jane\JsonSchema\Generator\Proxy;

use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\Guess\Property;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;

trait PropertiesGenerator
{
    /**
     * The naming service.
     *
     * @return Naming
     */
    abstract protected function getNaming();

    /**
     * @param array|Property[] $properties
     */
    protected function createProperties(array $properties): Stmt\ClassMethod
    {
        $arrayItems = [];
        foreach ($properties as $property) {
            $arrayItems[] = new Expr\ArrayItem(
                new Expr\PropertyFetch(new Expr\Variable('this'), $property->getPhpName()),
                new Scalar\String_($property->getName()),
                true
            );
        }

        return new Stmt\ClassMethod(
            '__properties',
            [
                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                'stmts' => [
                    new Stmt\Return_(
                        new Expr\Array_($arrayItems, ['kind' => Expr\Array_::KIND_SHORT])
                    ),
                ],
                'returnType' => 'array',
            ]
        );
    }
}
