<?php

namespace Jane\Component\OpenApi3\Generator\Endpoint;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Generator\EndpointGenerator;
use Jane\Component\OpenApi3\Guesser\GuessClass;
use Jane\Component\OpenApi3\JsonSchema\Model\Parameter;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Modifiers;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait GetGetPathStylesTrait
{
    public function getPathStylesMethod(OperationGuess $operation, string $methodName, GuessClass $guessClass): ?Stmt\ClassMethod
    {
        $styles = [];
        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if (!$parameter instanceof Parameter || EndpointGenerator::IN_PATH !== ($parameter->in ?? null)) {
                continue;
            }

            // Content based serialization takes precedence over styles.
            if (null !== ($parameter->content ?? null)) {
                continue;
            }

            // Only emit a style declaration when the parameter declares one:
            // collection shaped and untyped schemas already route through the
            // runtime encoder with the OpenAPI defaults (issue #1165).
            if (null === ($parameter->style ?? null) && null === ($parameter->explode ?? null)) {
                continue;
            }

            // OpenAPI defaults: style is guessed from the `in` field, explode defaults to false.
            $style = ($parameter->style ?? null) ?? 'simple';
            $explode = ($parameter->explode ?? null) ?? false;

            // Only emit a style declaration when it changes the legacy runtime behavior.
            if ('simple' === $style && !$explode) {
                continue;
            }

            $styles[$parameter->name] = new Expr\Array_([
                new Expr\ArrayItem(new Scalar\String_($style), new Scalar\String_('style')),
                new Expr\ArrayItem(new Expr\ConstFetch(new Name($explode ? 'true' : 'false')), new Scalar\String_('explode')),
            ]);
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
