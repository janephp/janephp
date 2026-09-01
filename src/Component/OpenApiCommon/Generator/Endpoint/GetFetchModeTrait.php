<?php

namespace Jane\Component\OpenApiCommon\Generator\Endpoint;

use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiRuntime\Client\FetchMode;
use PhpParser\Modifiers;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait GetFetchModeTrait
{
    /**
     * Emits the getFetchMode() method of an endpoint: the resolved mode for
     * GET/HEAD operations (x-fetch-mode > default-fetch-mode > lazy) and a
     * hardcoded eager for every other verb.
     */
    public function getFetchModeMethod(OperationGuess $operation): Stmt\ClassMethod
    {
        $method = strtoupper($operation->getMethod());
        $fetchMode = \in_array($method, [OperationGuess::GET, OperationGuess::HEAD], true)
            ? $operation->getFetchMode()
            : FetchMode::Eager->value;

        return new Stmt\ClassMethod('getFetchMode', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Name('string'),
            'stmts' => [new Stmt\Return_(new Expr\PropertyFetch(
                new Expr\ClassConstFetch(new Name\FullyQualified(FetchMode::class), ucfirst($fetchMode)),
                'value'
            ))],
        ]);
    }
}
