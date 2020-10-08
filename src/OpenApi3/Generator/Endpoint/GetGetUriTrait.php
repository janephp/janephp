<?php

namespace Jane\OpenApi3\Generator\Endpoint;

use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Generator\EndpointGenerator;
use Jane\OpenApi3\Guesser\GuessClass;
use Jane\OpenApi3\JsonSchema\Model\Parameter;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait GetGetUriTrait
{
    protected static $styleExpansionPrefixMap = [
        'matrix' => ';',
        'label' => '.',
        'simple' => null,
    ];

    public function getGetUri(OperationGuess $operation, GuessClass $guessClass): Stmt\ClassMethod
    {
        $templateParams = [];

        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }

            if ($parameter instanceof Parameter && EndpointGenerator::IN_PATH === $parameter->getIn()) {
                // $url = str_replace('{param}', $param, $url)
                $templateParams[] = new Expr\ArrayItem(
                    new Expr\PropertyFetch(new Expr\Variable('this'), $parameter->getName()),
                    new Scalar\String_($parameter->getName())
                );
            }
        }

        if (\count($templateParams) === 0) {
            return new Stmt\ClassMethod('getUri', [
                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                'stmts' => [new Stmt\Return_(new Scalar\String_($operation->getPath()))],
                'returnType' => new Name('string'),
            ]);
        }

        return new Stmt\ClassMethod('getUri', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => [new Stmt\Return_(new Expr\MethodCall(
                new Expr\New_(new Name('\Rize\UriTemplate\UriTemplate')),
                'expand',
                [new Arg(new Scalar\String_($this->createPathUriTemplate($operation, $guessClass))), new Arg(new Expr\Array_($templateParams))]
            ))],
            'returnType' => new Name('string'),
        ]);
    }

    protected function createPathUriTemplate(OperationGuess $operation, GuessClass $guessClass): string
    {
        $path = $operation->getPath();
        /** @var Parameter $parameter */
        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }
            if ($parameter->getIn() !== EndpointGenerator::IN_PATH) {
                continue;
            }
            $suffix = '';
            if ($parameter->getExplode()) {
                $suffix = '*';
            }
            if (\array_key_exists($parameter->getStyle(), self::$styleExpansionPrefixMap)) {
                $prefix = '';
                if (self::$styleExpansionPrefixMap[$parameter->getStyle()] !== null) {
                    $prefix = self::$styleExpansionPrefixMap[$parameter->getStyle()];
                }
                $path = str_replace(
                    '{' . $parameter->getName() . '}',
                    '{' . $prefix . $parameter->getName() . $suffix . '}',
                    $path
                );
            }
        }

        return $path;
    }
}
