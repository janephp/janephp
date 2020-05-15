<?php

namespace Jane\OpenApiCommon\Generator\Authentication;

use Jane\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;
use PhpParser\Node\Stmt;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;

trait GetScopeGenerator
{
    protected function createGetScope(SecuritySchemeGuess $securityScheme): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('getScope', [
            'returnType' => new Name('string'),
            'stmts' => [
                new Stmt\Return_(new Scalar\String_($securityScheme->getName())),
            ],
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
        ]);
    }
}
