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
use Jane\Component\OpenApiCommon\Generator\Endpoint\ConstructorParametersTrait;
use Jane\Component\OpenApiCommon\Generator\Endpoint\PathParameterNameTrait;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt;

trait GetConstructorTrait
{
    use ConstructorParametersTrait;
    use InflectorTrait;
    use PathParameterNameTrait;

    public function getConstructor(OperationGuess $operation, Context $context, GuessClass $guessClass, BodyParameterGenerator $bodyParameterGenerator, NonBodyParameterGenerator $nonBodyParameterGenerator): array
    {
        $pathParams = $pathParamsDoc = $pathParamsWithDefaultValue = $pathParamsWithDefaultValueDoc = $queryParamsDoc = $formParamsDoc = $headerParamsDoc = $methodStatements = $pathProperties = [];
        $bodyParam = $bodyDoc = $bodyAssign = null;
        $queryParamsRequired = $formParamsRequired = $headerParamsRequired = false;

        foreach ($operation->getParameters() as $key => $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if ($parameter instanceof PathParameterSubSchema) {
                $pathPropertyName = $this->normalizePathPropertyName($parameter->name);
                $pathVariableName = $this->normalizePathVariableName($parameter->name);
                if (null === ($parameter->default ?? null)) {
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

            if ($parameter instanceof BodyParameter) {
                $bodyParam = $bodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $bodyDoc = $bodyParameterGenerator->generateMethodDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $bodyAssign = new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'body'), new Expr\Variable($this->getInflector()->camelize($parameter->name))));
            }

            if ($parameter instanceof QueryParameterSubSchema) {
                $queryParamsDoc[] = $nonBodyParameterGenerator->generateOptionDocParameter($parameter);
                $queryParamsRequired = $queryParamsRequired || $nonBodyParameterGenerator->isOptionRequired($parameter);
            }

            if ($parameter instanceof FormDataParameterSubSchema) {
                $formParamsDoc[] = $nonBodyParameterGenerator->generateOptionDocParameter($parameter);
                $formParamsRequired = $formParamsRequired || $nonBodyParameterGenerator->isOptionRequired($parameter);
            }

            if ($parameter instanceof HeaderParameterSubSchema) {
                $headerParamsDoc[] = $nonBodyParameterGenerator->generateOptionDocParameter($parameter);
                $headerParamsRequired = $headerParamsRequired || $nonBodyParameterGenerator->isOptionRequired($parameter);
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

        $methodParams = $this->dropDefaultsBeforeRequired(array_merge(
            $pathParams,
            $pathParamsWithDefaultValue,
            $bodyParam ? [$bodyParam] : [],
            \count($queryParamsDoc) > 0 ? [$this->optionsArrayParameter('queryParameters', $queryParamsRequired)] : [],
            \count($formParamsDoc) > 0 ? [$this->optionsArrayParameter('formParameters', $formParamsRequired)] : [],
            \count($headerParamsDoc) > 0 ? [$this->optionsArrayParameter('headerParameters', $headerParamsRequired)] : []
        ));

        $methodDocumentations = array_merge(
            $pathParamsDoc,
            $pathParamsWithDefaultValueDoc,
            $bodyDoc ? [$bodyDoc] : [],
            \count($queryParamsDoc) > 0 ? [$nonBodyParameterGenerator->generateOptionsArrayDocParameter('queryParameters', $queryParamsDoc)] : [],
            \count($formParamsDoc) > 0 ? [$nonBodyParameterGenerator->generateOptionsArrayDocParameter('formParameters', $formParamsDoc)] : [],
            \count($headerParamsDoc) > 0 ? [$nonBodyParameterGenerator->generateOptionsArrayDocParameter('headerParameters', $headerParamsDoc)] : []
        );

        $methodParamsDoc = ['/**'];
        if ($operation->getOperation()->description ?? null) {
            foreach (explode("\n", $operation->getOperation()->description ?? null) as $line) {
                $methodParamsDoc[] = rtrim(' * ' . str_replace('*/', '*\\/', $line));
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
