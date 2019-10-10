<?php

namespace Jane\JsonSchema\Generator\Proxy;

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
    protected function createConstruct(string $modelFdqn, ClassGuess $class, Context $context): Stmt\ClassMethod
    {
        $modelVariable = new Expr\Variable('model');
        $propertiesVariable = new Expr\Variable('properties');

        $methods = [
            new Stmt\Expression(new Expr\Assign(
                $propertiesVariable,
                new Expr\MethodCall(new Expr\Variable('this'), '__properties')
            )),
        ];

        /** @var Property $property */
        foreach ($class->getProperties() as $property) {
            $propertyVar = new Expr\MethodCall($modelVariable, $this->getNaming()->getPrefixedMethodName('get', $property->getPhpName()));

            list($normalizationStatements, $outputVar) = $property->getType()->createNormalizationStatement($context, $propertyVar);

            $normalizationStatements[] = new Stmt\Expression(new Expr\Assign(new Expr\ArrayDimFetch(new Expr\Variable('properties'), new Scalar\String_($property->getName())), $outputVar));

            if (!$property->isNullable()) {
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
                'params' => [new Param($modelVariable, new Expr\ConstFetch(new Name('null')), $modelFdqn)],
                'stmts' => [
                    new Stmt\If_(
                        new Expr\Instanceof_($modelVariable, new Name($modelFdqn)),
                        [
                            'stmts' => $methods,
                        ]
                    ),
                ],
            ]
        );
    }
}
