<?php

namespace Jane\Component\OpenApi31\Generator\Endpoint;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Tools\InflectorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Generator\EndpointGenerator;
use Jane\Component\OpenApi31\Generator\Parameter\NonBodyParameterGenerator;
use Jane\Component\OpenApi31\Generator\RequestBodyGenerator;
use Jane\Component\OpenApi31\Guesser\GuessClass;
use Jane\Component\OpenApi31\JsonSchema\Model\Parameter;
use Jane\Component\OpenApi31\JsonSchema\Model\RequestBody;
use Jane\Component\OpenApiCommon\Generator\Endpoint\PathParameterNameTrait;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait GetConstructorTrait
{
    use GetResponseContentTrait;
    use InflectorTrait;
    use PathParameterNameTrait;

    public function getConstructor(OperationGuess $operation, Context $context, GuessClass $guessClass, NonBodyParameterGenerator $nonBodyParameterGenerator, RequestBodyGenerator $requestBodyGenerator): array
    {
        $pathParams = $pathParamsDoc = $pathParamsWithDefaultValue = $pathParamsWithDefaultValueDoc = $queryParamsDoc = $headerParamsDoc = $methodStatements = $pathProperties = [];
        $bodyParam = $bodyDoc = $bodyAssign = null;
        $contentTypes = $this->getContentTypes($operation, $guessClass, $context);

        foreach ($operation->getParameters() as $key => $parameter) {
            if (\is_array($parameter) && isset($parameter['$ref'])) {
                $parameter = new Reference($parameter['$ref'], $operation->getReference() . '/parameters/' . $key);
            }

            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if (!$parameter instanceof \stdClass && $parameter instanceof Parameter && $parameter->getSchema() instanceof Reference) {
                [, $schema] = $guessClass->resolve($parameter->getSchema(), JsonSchema::class);
                $parameter->setSchema($schema);
            }

            if ($parameter instanceof Parameter && EndpointGenerator::IN_PATH === $parameter->getIn()) {
                $pathPropertyName = $this->normalizePathPropertyName($parameter->getName());
                $pathVariableName = $this->getInflector()->camelize($parameter->getName());
                $schema = $parameter->getSchema();
                if (null === ($schema instanceof JsonSchema ? $schema->getDefault() : null)) {
                    $pathParams[] = $nonBodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                    $pathParamsDoc[] = $nonBodyParameterGenerator->generateMethodDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                } else {
                    $pathParamsWithDefaultValue[] = $nonBodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                    $pathParamsWithDefaultValueDoc[] = $nonBodyParameterGenerator->generateMethodDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                }

                $methodStatements[] = new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), $pathPropertyName), new Expr\Variable($pathVariableName)));
                $pathProperties[] = new Stmt\Property(Modifiers::PROTECTED, [
                    new Stmt\PropertyProperty($pathPropertyName),
                ]);
            }

            if ($parameter instanceof Parameter && EndpointGenerator::IN_QUERY === $parameter->getIn()) {
                $queryParamsDoc[] = $nonBodyParameterGenerator->generateOptionDocParameter($parameter);
            }
            if ($parameter instanceof Parameter && EndpointGenerator::IN_HEADER === $parameter->getIn()) {
                $headerParamsDoc[] = $nonBodyParameterGenerator->generateOptionDocParameter($parameter);
            }
        }

        if (($requestBody = $operation->getOperation()->getRequestBody()) instanceof RequestBody && null !== $requestBody->getContent()) {
            $bodyParam = $requestBodyGenerator->generateMethodParameter($requestBody, $operation->getReference() . '/requestBody', $context);
            $bodyDoc = $requestBodyGenerator->generateMethodDocParameter($requestBody, $operation->getReference() . '/requestBody', $context);
            $bodyAssign = new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'body'), new Expr\Variable('requestBody')));
        }

        if (\count($contentTypes) > 1) {
            $pathProperties[] = new Stmt\Property(Modifiers::PROTECTED, [new Stmt\PropertyProperty('accept')], []);
        }

        $methodStatements = array_merge(
            $methodStatements,
            $bodyAssign !== null ? [$bodyAssign] : [],
            \count($queryParamsDoc) > 0 ? [new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'queryParameters'), new Expr\Variable('queryParameters')))] : [],
            \count($headerParamsDoc) > 0 ? [new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'headerParameters'), new Expr\Variable('headerParameters')))] : [],
            \count($contentTypes) > 1 ? [new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'accept'), new Expr\Variable('accept')))] : []
        );

        if (\count($methodStatements) === 0) {
            return [null, [], '/**', []];
        }

        $methodParams = array_merge(
            $pathParams,
            $pathParamsWithDefaultValue,
            $bodyParam ? [$bodyParam] : [],
            \count($queryParamsDoc) > 0 ? [new Node\Param(new Expr\Variable('queryParameters'), new Expr\Array_(), new Name('array'))] : [],
            \count($headerParamsDoc) > 0 ? [new Node\Param(new Expr\Variable('headerParameters'), new Expr\Array_(), new Name('array'))] : [],
            \count($contentTypes) > 1 ? [new Node\Param(new Expr\Variable('accept'), new Expr\Array_(), new Name('array'))] : []
        );

        $methodDocumentations = array_merge(
            $pathParamsDoc,
            $pathParamsWithDefaultValueDoc,
            $bodyDoc ? [$bodyDoc] : [],
            \count($queryParamsDoc) > 0 ? [\sprintf(" * @param array{\n%s\n * } \$queryParameters", implode("\n", $queryParamsDoc))] : [],
            \count($headerParamsDoc) > 0 ? [\sprintf(" * @param array{\n%s\n * } \$headerParameters", implode("\n", $headerParamsDoc))] : [],
            \count($contentTypes) > 1 ? [' * @param array $accept Accept content header ' .
                str_replace('*/', '*\\/', implode('|', $this->getContentTypes($operation, $guessClass, $context)))] : []
        );

        $methodParamsDoc = ['/**'];
        if ($operation->getOperation()->getDescription()) {
            foreach (explode("\n", $operation->getOperation()->getDescription()) as $line) {
                $methodParamsDoc[] = rtrim(' * ' . str_replace('*/', '*\\/', $line));
            }
        }
        $methodParamsDoc[] = implode("\n", $methodDocumentations);
        $methodParamsDoc[] = ' */';

        $methodParamsDoc = implode("\n", $methodParamsDoc);

        return [
            new Stmt\ClassMethod(
                '__construct',
                [
                    'flags' => Modifiers::PUBLIC,
                    'params' => $methodParams,
                    'stmts' => $methodStatements,
                ],
                [
                    'comments' => [
                        new Doc($methodParamsDoc),
                    ],
                ]
            ),
            $methodParams,
            $methodParamsDoc,
            $pathProperties,
        ];
    }
}
