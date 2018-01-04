<?php

namespace Jane\OpenApi\Generator;

use Amp\Artax\Request;
use Amp\Artax\Response;
use Amp\CancellationToken;
use Amp\Promise;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\Operation\Operation;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class AmpArtaxOperationGenerator extends OperationGenerator
{
    protected function getAssignResponseStatement(): Expr
    {
        return new Expr\Assign(new Expr\Variable('response'), new Expr\Yield_(new Expr\MethodCall(
            new Expr\PropertyFetch(new Expr\Variable('this'), 'httpClient'),
            'request',
            [
                new Arg(new Expr\Variable('request')),
                new Arg(new Expr\Array_()),
                new Arg(new Expr\Variable('cancellationToken')),
            ]
        )));
    }

    protected function createParameters(Operation $operation, $queryParamDocumentation, Context $context)
    {
        list($documentationParam, $methodParams) = parent::createParameters($operation, $queryParamDocumentation, $context);

        $methodParams[] = new Param(
            'cancellationToken',
            new Expr\ConstFetch(new Name('null')),
            new Name\FullyQualified(CancellationToken::class)
        );
        $documentationParam[] = ' * @param \\Amp\\CancellationToken $cancellationToken Token to cancel the request';

        return [$documentationParam, $methodParams];
    }

    protected function getResponseClass(): string
    {
        return Response::class;
    }

    protected function getResponseToStringStatement($responseVariable): Expr
    {
        return new Expr\Yield_(new Expr\MethodCall($responseVariable, 'getBody'));
    }

    protected function getCreateRequestStatements(string $method, Expr\Variable $urlVariable, Expr\Variable $headerVariable, Expr\Variable $bodyVariable): array
    {
        return [
            new Expr\Assign(new Expr\Variable('request'), new Expr\New_(
                new Name\FullyQualified(Request::class), [
                    new Arg($urlVariable),
                    new Arg(new Scalar\String_($method)),
                ]
            )),
            new Expr\Assign(new Expr\Variable('request'), new Expr\MethodCall(
                new Expr\Variable('request'),
                'withHeaders',
                [
                    new Arg($headerVariable),
                ]
            )),
            new Expr\Assign(new Expr\Variable('request'), new Expr\MethodCall(
                new Expr\Variable('request'),
                'withBody',
                [
                    new Arg($bodyVariable),
                ]
            )),
        ];
    }

    protected function getReturnTypesForDoc($outputTypes): string
    {
        return '\Amp\Promise<' . implode('|', $outputTypes) . '>';
    }

    protected function getResponseStatusStatement($responseVariable): Expr
    {
        return new Expr\MethodCall($responseVariable, 'getStatus');
    }

    public function createOperation($name, Operation $operation, Context $context): Stmt\ClassMethod
    {
        $classMethod = parent::createOperation($name, $operation, $context);
        $uses = [];

        foreach ($classMethod->params as $param) {
            $uses[] = new Expr\ClosureUse($param->name);
        }

        $classMethod->stmts = [
            new Stmt\Return_(new Expr\FuncCall(new Name\FullyQualified('Amp\\call'), [
                new Expr\Closure([
                    'stmts' => $classMethod->stmts,
                    'uses' => $uses,
                ]),
            ])),
        ];
        $classMethod->returnType = new Name\FullyQualified(Promise::class);

        return $classMethod;
    }
}
