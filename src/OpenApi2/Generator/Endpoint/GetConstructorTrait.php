<?php

namespace Jane\OpenApi2\Generator\Endpoint;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Tools\InflectorTrait;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Generator\Parameter\BodyParameterGenerator;
use Jane\OpenApi2\Generator\Parameter\NonBodyParameterGenerator;
use Jane\OpenApi2\Guesser\GuessClass;
use Jane\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
use Jane\OpenApi2\JsonSchema\Model\HeaderParameterSubSchema;
use Jane\OpenApi2\JsonSchema\Model\PathParameterSubSchema;
use Jane\OpenApi2\JsonSchema\Model\QueryParameterSubSchema;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Comment\Doc;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait GetConstructorTrait
{
    use InflectorTrait;

    public function getConstructor(OperationGuess $operation, Context $context, GuessClass $guessClass, BodyParameterGenerator $bodyParameterGenerator, NonBodyParameterGenerator $nonBodyParameterGenerator): array
    {
        $pathParams = [];
        $bodyParam = null;
        $bodyDoc = null;
        $bodyAssign = null;
        $pathParamsDoc = [];
        $queryParamsDoc = [];
        $formParamsDoc = [];
        $headerParamsDoc = [];
        $methodStatements = [];
        $pathProperties = [];

        foreach ($operation->getParameters() as $key => $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if ($parameter instanceof PathParameterSubSchema) {
                $pathParams[] = $nonBodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $pathParamsDoc[] = $nonBodyParameterGenerator->generateMethodDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $methodStatements[] = new Node\Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), $parameter->getName()), new Expr\Variable($this->getInflector()->camelize($parameter->getName()))));
                $pathProperties[] = new Stmt\Property(Stmt\Class_::MODIFIER_PROTECTED, [
                    new Stmt\PropertyProperty(new Name($parameter->getName())),
                ]);
            }

            if ($parameter instanceof BodyParameter) {
                $bodyParam = $bodyParameterGenerator->generateMethodParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $bodyDoc = $bodyParameterGenerator->generateMethodDocParameter($parameter, $context, $operation->getReference() . '/parameters/' . $key);
                $bodyAssign = new Node\Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'body'), new Expr\Variable($this->getInflector()->camelize($parameter->getName()))));
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
            \count($queryParamsDoc) > 0 ? [new Node\Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'queryParameters'), new Expr\Variable('queryParameters')))] : [],
            \count($formParamsDoc) > 0 ? [new Node\Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'formParameters'), new Expr\Variable('formParameters')))] : [],
            \count($headerParamsDoc) > 0 ? [new Node\Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), 'headerParameters'), new Expr\Variable('headerParameters')))] : []
        );

        if (\count($methodStatements) === 0) {
            return [null, [], '/**', []];
        }

        $methodParams = array_merge(
            $pathParams,
            $bodyParam ? [$bodyParam] : [],
            \count($queryParamsDoc) > 0 ? [new Node\Param(new Node\Expr\Variable('queryParameters'), new Expr\Array_(), new Name('array'))] : [],
            \count($formParamsDoc) > 0 ? [new Node\Param(new Node\Expr\Variable('formParameters'), new Expr\Array_(), new Name('array'))] : [],
            \count($headerParamsDoc) > 0 ? [new Node\Param(new Node\Expr\Variable('headerParameters'), new Expr\Array_(), new Name('array'))] : []
        );

        $methodDocumentations = array_merge(
            $pathParamsDoc,
            $bodyDoc ? [$bodyDoc] : [],
            \count($queryParamsDoc) > 0 ? array_merge([' * @param array $queryParameters {'], $queryParamsDoc, [' * }']) : [],
            \count($formParamsDoc) > 0 ? array_merge([' * @param array $formParameters {'], $formParamsDoc, [' * }']) : [],
            \count($headerParamsDoc) > 0 ? array_merge([' * @param array $headerParameters {'], $headerParamsDoc, [' * }']) : []
        );

        $methodParamsDoc = <<<EOD
/**
 * {$operation->getOperation()->getDescription()}
 *

EOD
            . implode("\n", $methodDocumentations);

        return [new Stmt\ClassMethod('__construct', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => $methodParams,
            'stmts' => $methodStatements,
        ], [
            'comments' => [new Doc($methodParamsDoc . "\n */"),
            ], ]), $methodParams, $methodParamsDoc, $pathProperties];
    }
}
