<?php

namespace Jane\Component\OpenApi31\Generator\Endpoint;

use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Generator\EndpointGenerator;
use Jane\Component\OpenApi31\Guesser\GuessClass;
use Jane\Component\OpenApi31\JsonSchema\Model\Parameter;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Modifiers;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait GetGetQueryStylesTrait
{
    public function getQueryStylesMethod(OperationGuess $operation, string $methodName, GuessClass $guessClass): ?Stmt\ClassMethod
    {
        $styles = [];
        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if (!$parameter instanceof Parameter || EndpointGenerator::IN_QUERY !== ($parameter->in ?? null)) {
                continue;
            }

            // Content based serialization takes precedence over styles.
            if (null !== ($parameter->content ?? null)) {
                continue;
            }

            $schema = ($parameter->schema ?? null);
            if ($schema instanceof Reference) {
                [, $schema] = $guessClass->resolve($schema, JsonSchema::class);
            }

            // OpenAPI defaults: style is guessed from the `in` field, explode defaults to true when style is form.
            $style = ($parameter->style ?? null) ?? 'form';
            $explode = ($parameter->explode ?? null) ?? ('form' === $style);

            $isCollectionType = $schema instanceof JsonSchema && \in_array($schema->type ?? null, ['object', 'array'], true);

            // Only emit a style declaration when it changes the legacy runtime behavior.
            if (null === ($parameter->style ?? null) && null === ($parameter->explode ?? null) && !$isCollectionType) {
                continue;
            }

            // Keep option resolver keys consistent: `[]` suffixes are stripped there too.
            $parameterName = ($parameter->name ?? null);
            if (str_contains($parameterName, '[]')) {
                $parameterName = substr($parameterName, 0, -2);
            }

            $items = [
                new Expr\ArrayItem(new Scalar\String_($style), new Scalar\String_('style')),
                new Expr\ArrayItem(new Expr\ConstFetch(new Name($explode ? 'true' : 'false')), new Scalar\String_('explode')),
            ];
            $styles[$parameterName] = new Expr\Array_($items);
        }

        if (\count($styles) === 0) {
            return null;
        }

        $arrayItems = [];
        foreach ($styles as $parameterName => $styleArray) {
            $arrayItems[] = new Expr\ArrayItem($styleArray, new Scalar\String_($parameterName));
        }

        return new Stmt\ClassMethod($methodName, [
            'flags' => Modifiers::PROTECTED,
            'stmts' => [
                new Stmt\Return_(new Expr\Array_($arrayItems)),
            ],
            'returnType' => new Name('array'),
        ]);
    }
}
