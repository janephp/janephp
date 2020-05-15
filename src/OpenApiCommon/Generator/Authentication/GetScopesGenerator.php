<?php

namespace Jane\OpenApiCommon\Generator\Authentication;

use Jane\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;
use PhpParser\Node\Stmt;
use PhpParser\Node\Name;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;

trait GetScopesGenerator
{
    protected function createGetScopes(SecuritySchemeGuess $securityScheme): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('getScopes', [
            'returnType' => new Name('array'),
            'stmts' => [
                new Stmt\Return_(new Expr\Array_([new Expr\ArrayItem(new Scalar\String_($securityScheme->getName()))])),
            ],
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
        ]);
    }
}
