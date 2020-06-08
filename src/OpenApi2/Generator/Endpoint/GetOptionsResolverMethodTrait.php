<?php

namespace Jane\OpenApi2\Generator\Endpoint;

use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Generator\Parameter\NonBodyParameterGenerator;
use Jane\OpenApi2\Guesser\GuessClass;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use Symfony\Component\OptionsResolver\OptionsResolver;

trait GetOptionsResolverMethodTrait
{
    public function getOptionsResolverMethod(OperationGuess $operation, string $class, string $methodName, GuessClass $guessClass, NonBodyParameterGenerator $nonBodyParameterGenerator): ?Stmt\ClassMethod
    {
        $parameters = [];

        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if (is_a($parameter, $class)) {
                $parameters[] = $parameter;
            }
        }

        if (\count($parameters) === 0) {
            return null;
        }

        $optionsResolverVariable = new Expr\Variable('optionsResolver');

        return new Stmt\ClassMethod($methodName, [
            'type' => Stmt\Class_::MODIFIER_PROTECTED,
            'stmts' => array_merge(
                [
                    new Node\Stmt\Expression(new Expr\Assign($optionsResolverVariable, new Expr\StaticCall(new Name('parent'), $methodName))),
                ],
                $nonBodyParameterGenerator->generateOptionsResolverStatements($optionsResolverVariable, $parameters),
                [
                    new Stmt\Return_($optionsResolverVariable),
                ]
            ),
            'returnType' => new Name\FullyQualified(OptionsResolver::class),
        ]);
    }
}
