<?php

namespace Jane\Component\OpenApi2\Generator\Endpoint;

use Jane\Component\JsonSchema\Tools\InflectorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Guesser\GuessClass;
use Jane\Component\OpenApi2\JsonSchema\Model\PathParameterSubSchema;
use Jane\Component\OpenApiCommon\Generator\Endpoint\PathParameterNameTrait;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Modifiers;
use PhpParser\Node\Arg;
use PhpParser\Node\ArrayItem;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait GetGetUriTrait
{
    use InflectorTrait;
    use PathParameterNameTrait;

    public function getGetUri(OperationGuess $operation, GuessClass $guessClass): Stmt\ClassMethod
    {
        $placeholders = [];
        $propertyNames = [];

        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if ($parameter instanceof PathParameterSubSchema) {
                // $url = str_replace('{param}', $param, $url)
                $placeholders[] = $parameter->name;
                $propertyNames[] = $this->normalizePathPropertyName($parameter->name);
            }
        }

        if (\count($placeholders) === 0) {
            return new Stmt\ClassMethod('getUri', [
                'flags' => Modifiers::PUBLIC,
                'stmts' => [
                    new Stmt\Return_(new Scalar\String_($operation->getPath())),
                ],
                'returnType' => new Name('string'),
            ]);
        }

        return new Stmt\ClassMethod('getUri', [
            'flags' => Modifiers::PUBLIC,
            'stmts' => [
                new Stmt\Return_(new Expr\FuncCall(new Name('str_replace'), [
                    new Arg(new Expr\Array_(array_map(function ($name) {
                        return new ArrayItem(new Scalar\String_('{' . $name . '}'));
                    }, $placeholders))),
                    new Arg(new Expr\Array_($this->buildPathPropertyFetchArrayItems($propertyNames))),
                    new Arg(new Scalar\String_($operation->getPath())),
                ])),
            ],
            'returnType' => new Name('string'),
        ]);
    }
}
