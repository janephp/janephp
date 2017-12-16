<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\Model\Response;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi\Generator\Parameter\BodyParameterGenerator;
use Jane\OpenApi\Generator\Parameter\FormDataParameterGenerator;
use Jane\OpenApi\Generator\Parameter\HeaderParameterGenerator;
use Jane\OpenApi\Generator\Parameter\PathParameterGenerator;
use Jane\OpenApi\Generator\Parameter\QueryParameterGenerator;
use Jane\OpenApi\Operation\Operation;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\Scalar;
use PhpParser\Comment;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

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

    protected function getReturnTypesForDoc($outputTypes): string
    {
        return implode('|', $outputTypes);
    }
}
