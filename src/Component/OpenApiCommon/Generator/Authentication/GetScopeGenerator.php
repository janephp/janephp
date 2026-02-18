<?php

namespace Jane\Component\OpenApiCommon\Generator\Authentication;

use Jane\Component\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;
use PhpParser\Modifiers;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait GetScopeGenerator
{
    protected function createGetScope(SecuritySchemeGuess $securityScheme): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('getScope', [
            'returnType' => new Name('string'),
            'stmts' => [
                new Stmt\Return_(new Scalar\String_($securityScheme->getName())),
            ],
            'flags' => Modifiers::PUBLIC,
        ]);
    }
}
