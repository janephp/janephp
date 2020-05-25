<?php

namespace Jane\OpenApi2\Generator\Endpoint;

use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Node\Stmt;
use PhpParser\Node\Scalar;
use PhpParser\Node\Name;

trait GetGetMethodTrait
{
    public function getGetMethod(OperationGuess $operation): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('getMethod', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => [
                new Stmt\Return_(new Scalar\String_($operation->getMethod())),
            ],
            'returnType' => new Name('string'),
        ]);
    }
}
