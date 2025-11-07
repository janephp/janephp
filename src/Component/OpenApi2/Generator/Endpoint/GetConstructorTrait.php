<?php

namespace Jane\Component\OpenApi2\Generator\Endpoint;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Tools\InflectorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Generator\Parameter\BodyParameterGenerator;
use Jane\Component\OpenApi2\Generator\Parameter\NonBodyParameterGenerator;
use Jane\Component\OpenApi2\Guesser\GuessClass;
use Jane\Component\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\Component\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\HeaderParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\PathParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\QueryParameterSubSchema;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait GetConstructorTrait
{
    use InflectorTrait;

    public function getConstructor(OperationGuess $operation, Context $context, GuessClass $guessClass, BodyParameterGenerator $bodyParameterGenerator, NonBodyParameterGenerator $nonBodyParameterGenerator): array
    {
        $pathParams = $pathParamsDoc = $pathParamsWithDefaultValue = $pathParamsWithDefaultValueDoc = $queryParamsDoc = $formParamsDoc = $headerParamsDoc = $methodStatements = $pathProperties = [];
        $bodyParam = $bodyDoc = $bodyAssign = null;

        foreach ($operation->getParameters() as $key => $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if ($parameter instanceof PathParameterSubSchema) {
                if (null === $parameter->getDefault()) {
                    $pathParams[] = $nonBodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                    $pathParamsDoc[] = $nonBodyParameterGenerator->generateMethodDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                } else {
                    $pathParamsWithDefaultValue[] = $nonBodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                    $pathParamsWithDefaultValueDoc[] = $nonBodyParameterGenerator->generateMethodDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                }

                $methodStatements[] = new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), $parameter->getName()), new Expr\Variable($this->getInflector()->camelize($parameter->getName()))));
                $pathProperties[] = new Stmt\Property(Modifiers::PROTECTED, [
                    new Stmt\PropertyProperty($parameter->getName()),
                ]);
            }

            if ($parameter instanceof BodyParameter) {
                $bodyParam = $bodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $bodyDoc = $bodyParameterGenerator->generateMethodDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $bodyAssign = new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'body'), new Expr\Variable($this->getInflector()->camelize($parameter->getName()))));
            }

            if ($parameter instanceof QueryParameterSubSchema) {
                $queryParamsDoc[] = $nonBodyParameterGenerator->generateOptionDocParameter($parameter);
            }

            if ($parameter instanceof FormDataParameterSubSchema) {
                $formParamsDoc[] = $nonBodyParameterGenerator->generateOptionDocParameter($parameter);
            }

            if ($parameter instanceof HeaderParameterSubSchema) {
                $headerParamsDoc[] = $nonBodyParameterGenerator->generateOptionDocParameter($parameter);
            }
        }

        $methodStatements = array_merge(
            $methodStatements,
            $bodyAssign !== null ? [$bodyAssign] : [],
            \count($queryParamsDoc) > 0 ? [new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'queryParameters'), new Expr\Variable('queryParameters')))] : [],
            \count($formParamsDoc) > 0 ? [new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'formParameters'), new Expr\Variable('formParameters')))] : [],
            \count($headerParamsDoc) > 0 ? [new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'headerParameters'), new Expr\Variable('headerParameters')))] : []
        );

        if (\count($methodStatements) === 0) {
            return [null, [], '/**', []];
        }

        $methodParams = array_merge(
            $pathParams,
            $pathParamsWithDefaultValue,
            $bodyParam ? [$bodyParam] : [],
            \count($queryParamsDoc) > 0 ? [new Node\Param(new Expr\Variable('queryParameters'), new Expr\Array_(), new Name('array'))] : [],
            \count($formParamsDoc) > 0 ? [new Node\Param(new Expr\Variable('formParameters'), new Expr\Array_(), new Name('array'))] : [],
            \count($headerParamsDoc) > 0 ? [new Node\Param(new Expr\Variable('headerParameters'), new Expr\Array_(), new Name('array'))] : []
        );

        $methodDocumentations = array_merge(
            $pathParamsDoc,
            $pathParamsWithDefaultValueDoc,
            $bodyDoc ? [$bodyDoc] : [],
            \count($queryParamsDoc) > 0 ? array_merge([' * @param array $queryParameters {'], $queryParamsDoc, [' * }']) : [],
            \count($formParamsDoc) > 0 ? array_merge([' * @param array $formParameters {'], $formParamsDoc, [' * }']) : [],
            \count($headerParamsDoc) > 0 ? array_merge([' * @param array $headerParameters {'], $headerParamsDoc, [' * }']) : []
        );

        $methodParamsDoc = ['/**'];
        if ($operation->getOperation()->getDescription()) {
            foreach (explode("\n", $operation->getOperation()->getDescription()) as $line) {
                $methodParamsDoc[] = rtrim(' * ' . $line);
            }
        }
        $methodParamsDoc[] = implode("\n", $methodDocumentations);
        $methodParamsDoc[] = ' */';

        $methodParamsDoc = implode("\n", $methodParamsDoc);

        return [new Stmt\ClassMethod('__construct', [
            'flags' => Modifiers::PUBLIC,
            'params' => $methodParams,
            'stmts' => $methodStatements,
        ], [
            'comments' => [new Doc($methodParamsDoc),
            ], ]), $methodParams, $methodParamsDoc, $pathProperties];
    }
}
