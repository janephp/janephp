<?php

namespace Jane\Component\OpenApi31\Generator\Endpoint;

use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Generator\EndpointGenerator;
use Jane\Component\OpenApi31\Guesser\GuessClass;
use Jane\Component\OpenApi31\JsonSchema\Model\Parameter;
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
    public function getGetUri(OperationGuess $operation, GuessClass $guessClass): Stmt\ClassMethod
    {
        $names = $types = [];

        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if (!$parameter instanceof Parameter || EndpointGenerator::IN_PATH !== $parameter->getIn()) {
                continue;
            }

            $schema = $parameter->getSchema();
            if ($schema instanceof Reference) {
                [, $schema] = $guessClass->resolve($parameter->getSchema(), JsonSchema::class);
            }

            $names[] = $parameter->getName();
            $schemaType = null;
            if ($schema instanceof JsonSchema) {
                $schemaType = $schema->getType();
                if (\is_array($schemaType)) {
                    $schemaType = array_filter($schemaType, fn ($t) => $t !== 'null');
                    $schemaType = reset($schemaType) ?: null;
                }
            }
            $types[] = $schemaType;
        }

        if (\count($names) === 0) {
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
                    }, $names))),
                    new Arg(new Expr\Array_(array_map(function ($type, $name) {
                        return 'array' === $type
                            ? new ArrayItem(new Expr\FuncCall(new Name('implode'), [new Arg(new Scalar\String_(',')), new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), $name))]))
                            : new ArrayItem(new Expr\PropertyFetch(new Expr\Variable('this'), $name));
                    }, $types, $names))),
                    new Arg(new Scalar\String_($operation->getPath())),
                ])),
            ],
            'returnType' => new Name('string'),
        ]);
    }
}
