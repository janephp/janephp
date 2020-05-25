<?php

namespace Jane\OpenApi2\Generator\Endpoint;

use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Node\Scalar;

trait GetAuthenticationScopesTrait
{
    private function getAuthenticationScopesMethod(OperationGuess $operation): Stmt\ClassMethod
    {
        $securityScopes = [];
        foreach ($operation->getSecurityScopes() as $scope) {
            $securityScopes[] = new Expr\ArrayItem(new Scalar\String_($scope));
        }

        return new Stmt\ClassMethod('getAuthenticationScopes', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'returnType' => new Name('array'),
            'stmts' => [new Stmt\Return_(new Expr\Array_($securityScopes))],
        ]);
    }
}
