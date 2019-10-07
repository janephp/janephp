<?php

namespace Jane\JsonSchema\Generator\Model;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\JsonSchema\Guesser\Guess\Property;
use PhpParser\Node\Stmt;
use PhpParser\Node\Param;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;

trait ConstructGenerator
{
    /**
     * The naming service.
     *
     * @return Naming
     */
    abstract protected function getNaming();

    /**
     * Return a model class.
     *
     * @param string $proxyFqdn
     *
     * @return Stmt\ClassMethod
     */
    protected function createConstruct(string $proxyFqdn, ClassGuess $class, Context $context): Stmt\ClassMethod
    {
        $proxyVariable = new Expr\Variable('proxy');
        $propertiesVariable = new Expr\Variable('properties');

        $methods = [
            new Stmt\Expression(new Expr\Assign(
                $propertiesVariable,
                new Expr\MethodCall($proxyVariable, '__properties')
            )),
        ];

        /** @var Property $property */
        foreach ($class->getProperties() as $property) {
            $propertyVar = new Expr\ArrayDimFetch(new Expr\Variable('properties'), new Scalar\String_($property->getName()));

            list($normalizationStatements, $outputVar) = $property->getType()->createNormalizationStatement($context, $propertyVar);

            $normalizationStatements[] = new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), sprintf("{'%s'}", $property->getPhpName())), $outputVar));

            if ($property->isNullable()) {
                $methods = array_merge($methods, $normalizationStatements);

                continue;
            }

            $methods[] = new Stmt\If_(
                new Expr\BinaryOp\NotIdentical(new Expr\ConstFetch(new Name('null')), $propertyVar),
                [
                    'stmts' => $normalizationStatements,
                ]
            );
        }

        return new Stmt\ClassMethod(
            '__construct',
            [
                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                'params' => [new Param($proxyVariable, new Expr\ConstFetch(new Name('null')), $proxyFqdn)],
                'stmts' => [
                    new Stmt\If_(
                        new Expr\Instanceof_($proxyVariable, new Name($proxyFqdn)),
                        [
                            'stmts' => $methods,
                        ]
                    ),
                ],
            ]
        );
    }
}
