<?php

namespace Jane\JsonSchema\Generator\Model;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\JsonSchema\Guesser\Guess\MultipleType;
use Jane\JsonSchema\Guesser\Guess\Property;
use Jane\JsonSchema\Guesser\Guess\Type;
use PhpParser\Node\Stmt;
use PhpParser\Node\Param;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

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

            list($denormalizationStatements, $outputVar) = $property->getType()->createDenormalizationStatement($context, $propertyVar, false);

            $denormalizationStatements[] = new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), sprintf("{'%s'}", $property->getPhpName())), $outputVar));

            if ((!$property->isNullable() && $context->isStrict()) || ($property->getType() instanceof MultipleType && \count(array_intersect([Type::TYPE_NULL], $property->getType()->getTypes())) === 1) || ($property->getType()->getName() === Type::TYPE_NULL)) {
                $methods = array_merge($methods, $denormalizationStatements);

                continue;
            }

            $methods[] = new Stmt\If_(
                new Expr\BinaryOp\NotIdentical(new Expr\ConstFetch(new Name('null')), $propertyVar),
                [
                    'stmts' => $denormalizationStatements,
                ]
            );
        }

        return new Stmt\ClassMethod(
            '__construct',
            [
                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                'params' => [
                    new Param($proxyVariable, new Expr\ConstFetch(new Name('null')), $proxyFqdn),
                    new Param(new Expr\Variable('denormalizer'), new Expr\ConstFetch(new Name('null')), sprintf('\\%s', DenormalizerInterface::class)),
                    new Param(new Expr\Variable('context'), new Expr\ConstFetch(new Name('null')), 'array'),
                ],
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
