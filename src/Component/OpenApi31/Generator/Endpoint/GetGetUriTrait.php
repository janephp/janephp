<?php

namespace Jane\Component\OpenApi31\Generator\Endpoint;

use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Tools\InflectorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Generator\EndpointGenerator;
use Jane\Component\OpenApi31\Guesser\GuessClass;
use Jane\Component\OpenApi31\JsonSchema\Model\Parameter;
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
        $placeholders = $propertyNames = $types = [];

        foreach ($operation->getParameters() as $key => $parameter) {
            if (\is_array($parameter) && isset($parameter['$ref'])) {
                $parameter = new Reference($parameter['$ref'], $operation->getReference() . '/parameters/' . $key);
            }

            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if (!$parameter instanceof Parameter || EndpointGenerator::IN_PATH !== ($parameter->in ?? null)) {
                continue;
            }

            $schema = ($parameter->schema ?? null);
            if ($schema instanceof Reference) {
                [, $schema] = $guessClass->resolve($parameter->schema ?? null, JsonSchema::class);
            }

            $placeholders[] = ($parameter->name ?? null);
            $propertyNames[] = $this->normalizePathPropertyName($parameter->name ?? null);
            $schemaType = null;
            if ($schema instanceof JsonSchema) {
                $schemaType = ($schema->type ?? null);
                if (\is_array($schemaType)) {
                    $schemaType = array_filter($schemaType, fn ($t) => $t !== 'null');
                    $schemaType = reset($schemaType) ?: null;
                }
            }
            $types[] = $schemaType;
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
                    new Arg(new Expr\Array_($this->buildPathPropertyFetchArrayItems($propertyNames, $types))),
                    new Arg(new Scalar\String_($operation->getPath())),
                ])),
            ],
            'returnType' => new Name('string'),
        ]);
    }
}
