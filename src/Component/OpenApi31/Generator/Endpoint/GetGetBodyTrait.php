<?php

namespace Jane\Component\OpenApi31\Generator\Endpoint;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Generator\RequestBodyGenerator;
use Jane\Component\OpenApi31\Guesser\GuessClass;
use Jane\Component\OpenApi31\JsonSchema\Model\RequestBody;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Modifiers;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\SerializerInterface;

trait GetGetBodyTrait
{
    public function getGetBody(OperationGuess $operation, Context $context, GuessClass $guessClass, RequestBodyGenerator $requestBodyGenerator): Stmt\ClassMethod
    {
        $opRef = $operation->getReference() . '/requestBody';
        $requestBody = $operation->getOperation()->getRequestBody();

        if ($requestBody instanceof Reference) {
            [, $requestBody] = $guessClass->resolve($requestBody, RequestBody::class);
        }

        $resolvedRequestBody = $requestBody instanceof RequestBody ? $requestBody : null;

        return new Stmt\ClassMethod('getBody', [
            'flags' => Modifiers::PUBLIC,
            'params' => [
                new Param(new Expr\Variable('serializer'), null, new Name\FullyQualified(SerializerInterface::class)),
                new Param(new Expr\Variable('streamFactory'), new Expr\ConstFetch(new Name('null'))),
            ],
            'returnType' => new Name('array'),
            'stmts' => $requestBodyGenerator->getSerializeStatements($resolvedRequestBody, $opRef, $context),
        ]);
    }
}
