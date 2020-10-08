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
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait GetGetQueryStringTrait
{
    public function getGetQueryString(OperationGuess $operation, GuessClass $guessClass): ?Stmt\ClassMethod
    {
        $hasParams = false;
        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }
            if ($parameter instanceof Parameter && EndpointGenerator::IN_QUERY === $parameter->getIn()) {
                $hasParams = true;
                break;
            }
        }
        if (!$hasParams) {
            return null;
        }

        // $optionsResolved = $this->getQueryOptionsResolver()->resolve($this->queryParameters);
        // $optionsResolved = array_map(function ($value) { return null !== $value ? $value : ''; }, $optionsResolved);
        $stmts = [
            new Stmt\Expression(new Expr\Assign(
                new Expr\Variable('optionsResolved'),
                new Expr\MethodCall(
                    new Expr\MethodCall(new Expr\Variable('this'), 'getQueryOptionsResolver'),
                    'resolve',
                    [new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'queryParameters'))]
                )
            )),
            new Stmt\Expression(new Expr\Assign(
                new Expr\Variable('optionsResolved'),
                new Expr\FuncCall(
                    new Name('array_map'),
                    [
                        new Arg(new Expr\Closure([
                            'static' => true,
                            'params' => [new Param(new Expr\Variable('value'))],
                            'stmts' => [new Stmt\Return_(new Expr\Ternary(
                                new Expr\BinaryOp\NotIdentical(new Expr\ConstFetch(new Name('null')), new Expr\Variable('value')),
                                new Expr\Variable('value'),
                                new Scalar\String_('')
                            ))],
                        ])),
                        new Arg(new Expr\Variable('optionsResolved')),
                    ]
                )
            )),
            new Stmt\Return_(new Expr\FuncCall(new Name('ltrim'), [
                new Expr\MethodCall(
                    new Expr\New_(new Name('\Rize\UriTemplate\UriTemplate')),
                    'expand',
                    [
                        new Arg(new Scalar\String_($this->createQueryStringUriTemplate($operation, $guessClass))),
                        new Arg(new Expr\Variable('optionsResolved')),
                    ]
                ),
                new Arg(new Scalar\String_('?')),
            ])),
        ];

        return new Stmt\ClassMethod('getQueryString', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => $stmts,
            'returnType' => new Name('string'),
        ]);
    }

    protected function createQueryStringUriTemplate(OperationGuess $operation, GuessClass $guessClass): string
    {
        $queryString = '{?';
        /** @var Parameter $parameter */
        foreach ($operation->getParameters() as $parameter) {
            if ($parameter instanceof Reference) {
                $parameter = $guessClass->resolveParameter($parameter);
            }
            if ($parameter->getIn() !== EndpointGenerator::IN_QUERY) {
                continue;
            }
            $suffix = '';
            if ($parameter->getExplode()) {
                $suffix = '*';
            }
            $queryString .= $parameter->getName() . $suffix . ',';
        }
        if ($queryString === '{?') {
            return '';
        }

        return rtrim($queryString, ',') . '}';
    }
}
