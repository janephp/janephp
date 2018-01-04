<?php

namespace Jane\OpenApi\Generator;

use Jane\OpenApi\Model\Response;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use Psr\Http\Message\ResponseInterface;

class Psr7HttplugOperationGenerator extends OperationGenerator
{
    protected function getAssignResponseStatement(): Expr
    {
        return new Expr\Assign(new Expr\Variable('response'), new Expr\MethodCall(
            new Expr\PropertyFetch(new Expr\Variable('this'), 'httpClient'),
            'sendRequest',
            [new Arg(new Expr\Variable('request'))]
        ));
    }

    protected function getResponseClass(): string
    {
        return ResponseInterface::class;
    }

    protected function getResponseToStringStatement($responseVariable): Expr
    {
        return new Expr\Cast\String_(new Expr\MethodCall($responseVariable, 'getBody'));
    }

    protected function getCreateRequestStatements(string $method, Expr\Variable $urlVariable, Expr\Variable $headerVariable, Expr\Variable $bodyVariable): array
    {
        return [new Expr\Assign(new Expr\Variable('request'), new Expr\MethodCall(
            new Expr\PropertyFetch(new Expr\Variable('this'), 'messageFactory'),
            'createRequest',
            [
                new Arg(new Scalar\String_($method)),
                new Arg($urlVariable),
                new Arg($headerVariable),
                new Arg($bodyVariable),
            ]
        ))];
    }

    protected function getResponseStatusStatement($responseVariable): Expr
    {
        return new Expr\MethodCall($responseVariable, 'getStatusCode');
    }

    protected function getReturnTypesForDoc($outputTypes): string
    {
        return implode('|', $outputTypes);
    }
}
