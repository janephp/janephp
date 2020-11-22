<?php

namespace Jane\Component\OpenApi3\Generator\Endpoint;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Generator\EndpointGenerator;
use Jane\Component\OpenApi3\Guesser\GuessClass;
use Jane\Component\OpenApi3\JsonSchema\Model\Parameter;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait GetGetUriTrait
{
    public function getGetUri(OperationGuess $operation, GuessClass $guessClass): Stmt\ClassMethod
    {
        $names = [];

        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if ($parameter instanceof Parameter && EndpointGenerator::IN_PATH === $parameter->getIn()) {
                // $url = str_replace('{param}', $param, $url)
                $names[] = $parameter->getName();
            }
        }

        if (\count($names) === 0) {
            return new Stmt\ClassMethod('getUri', [
                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                'stmts' => [
                    new Stmt\Return_(new Scalar\String_($operation->getPath())),
                ],
                'returnType' => new Name('string'),
            ]);
        }

        return new Stmt\ClassMethod('getUri', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => [
                new Stmt\Return_(new Expr\FuncCall(new Name('str_replace'), [
                    new Arg(new Expr\Array_(array_map(function ($name) {
                        return new Scalar\String_('{' . $name . '}');
                    }, $names))),
                    new Arg(new Expr\Array_(array_map(function ($name) {
                        return new Expr\PropertyFetch(new Expr\Variable('this'), $name);
                    }, $names))),
                    new Arg(new Scalar\String_($operation->getPath())),
                ])),
            ],
            'returnType' => new Name('string'),
        ]);
    }
}
