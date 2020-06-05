<?php

namespace Jane\OpenApi3\Generator\Endpoint;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Generator\RequestBodyGenerator;
use Jane\OpenApi3\Guesser\GuessClass;
use Jane\OpenApi3\JsonSchema\Model\RequestBody;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
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
            [$_, $requestBody] = $guessClass->resolve($requestBody, RequestBody::class);
        }

        return new Stmt\ClassMethod('getBody', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable('serializer'), null, new Name\FullyQualified(SerializerInterface::class)),
                new Param(new Expr\Variable('streamFactory'), new Expr\ConstFetch(new Name('null'))),
            ],
            'returnType' => new Name('array'),
            'stmts' => $requestBodyGenerator->getSerializeStatements($requestBody, $opRef, $context),
        ]);
    }
}
