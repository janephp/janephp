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
        $placeholders = $propertyNames = $types = $styledParameterNames = [];

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

            $index = \count($placeholders);
            $placeholders[] = ($parameter->name ?? null);
            $propertyNames[] = $this->normalizePathPropertyName($parameter->name ?? null);
            $types[] = $this->getPathSchemaType($schema, $guessClass);

            // Parameters declaring a non-default style are serialized by the
            // runtime encoder, their declaration lives in getPathStyles().
            $style = ($parameter->style ?? null) ?? 'simple';
            $explode = ($parameter->explode ?? null) ?? false;
            if ('simple' !== $style || $explode) {
                $styledParameterNames[$index] = ($parameter->name ?? null);
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
                    new Arg(new Expr\Array_($this->buildPathPropertyFetchArrayItems($propertyNames, $types, $styledParameterNames))),
                    new Arg(new Scalar\String_($operation->getPath())),
                ])),
            ],
            'returnType' => new Name('string'),
        ]);
    }

    /**
     * Returns the serialization shape of a path parameter schema: the
     * collection shape ('array' or 'object') when the schema allows one
     * through its type, a type list or anyOf/oneOf branches (issue #1165),
     * the scalar type (or the list of scalar types) for the inline casts, or null when unknown. Untyped
     * schemas are routed to the runtime encoder, which handles every shape
     * without the legacy `Array to string conversion` TypeError.
     */
    private function getPathSchemaType(mixed $schema, GuessClass $guessClass): string|array|null
    {
        $collection = $guessClass->allowsCollection($schema);

        if (null !== $collection) {
            return $collection;
        }

        $schemaType = $schema instanceof JsonSchema ? ($schema->type ?? null) : null;

        if (\is_array($schemaType)) {
            // JSON Schema 2020-12 (OpenAPI 3.1) allows "type" to be a list:
            // keep every non-null entry so the serialization knows the
            // parameter accepts several types (issue #1166).
            $schemaType = array_values(array_filter($schemaType, fn ($type) => null !== $type && 'null' !== $type));
            if (1 === \count($schemaType)) {
                $schemaType = $schemaType[0];
            } elseif ([] === $schemaType) {
                $schemaType = null;
            }
        }

        return $schemaType;
    }
}
