<?php

namespace Jane\Component\OpenApi3\Generator\Endpoint;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Generator\EndpointGenerator;
use Jane\Component\OpenApi3\Guesser\GuessClass;
use Jane\Component\OpenApi3\JsonSchema\Model\Parameter;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Modifiers;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait GetGetQueryAllowReservedTrait
{
    public function getQueryAllowReservedMethod(OperationGuess $operation, string $methodName, GuessClass $guessClass): ?Stmt\ClassMethod
    {
        $queryAllowReservedParameters = [];
        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if ($parameter instanceof Parameter && EndpointGenerator::IN_QUERY === ($parameter->in ?? null) && true === ($parameter->allowReserved ?? null)) {
                $queryAllowReservedParameters[] = ($parameter->name ?? null);
            }
        }

        if (\count($queryAllowReservedParameters) === 0) {
            return null;
        }

        $items = [];
        foreach ($queryAllowReservedParameters as $parameter) {
            $items[] = new Expr\ArrayItem(new Scalar\String_($parameter));
        }

        return new Stmt\ClassMethod($methodName, [
            'flags' => Modifiers::PROTECTED,
            'stmts' => [
                new Stmt\Return_(new Expr\Array_($items)),
            ],
            'returnType' => new Name('array'),
        ]);
    }
}
