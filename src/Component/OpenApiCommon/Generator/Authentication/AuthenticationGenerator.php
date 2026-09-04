<?php

namespace Jane\Component\OpenApiCommon\Generator\Authentication;

use Jane\Component\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait AuthenticationGenerator
{
    protected function createAuthentication(SecuritySchemeGuess $securityScheme): Stmt\ClassMethod
    {
        $stmts = match ($securityScheme->getType()) {
            SecuritySchemeGuess::TYPE_HTTP => $this->createHttpAuthenticationStatements($securityScheme),
            SecuritySchemeGuess::TYPE_API_KEY => $this->createApiKeyAuthenticationStatements($securityScheme),
            default => throw new \Exception(\sprintf('Jane actually does not support Security type %s generation', $securityScheme->getType())),
        };

        return new Stmt\ClassMethod('decorate', [
            'params' => [
                new Param(new Expr\Variable('method'), null, new Name('string')),
                new Param(new Expr\Variable('url'), null, new Name('string')),
                new Param(new Expr\Variable('options'), null, new Name('array'), true),
            ],
            'returnType' => new Name('void'),
            'stmts' => $stmts,
            'flags' => Modifiers::PUBLIC,
        ]);
    }

    /**
     * @return Stmt[]
     */
    private function createHttpAuthenticationStatements(SecuritySchemeGuess $securityScheme): array
    {
        $fetchedValue = match ($securityScheme->getScheme()) {
            SecuritySchemeGuess::SCHEME_BEARER => new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('token')),
            SecuritySchemeGuess::SCHEME_BASIC => new Expr\FuncCall(new Name('base64_encode'), [
                new Node\Arg(new Expr\FuncCall(new Name('sprintf'), [
                    new Node\Arg(new Scalar\String_('%s:%s')),
                    new Node\Arg(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('username'))),
                    new Node\Arg(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('password'))),
                ])),
            ]),
            default => null,
        };

        if (null === $fetchedValue) {
            return [];
        }

        return [
            new Stmt\Expression(new Expr\Assign(
                new Expr\ArrayDimFetch(
                    new Expr\ArrayDimFetch(new Expr\Variable('options'), new Scalar\String_('headers')),
                    new Scalar\String_('Authorization')
                ),
                new Expr\FuncCall(new Name('sprintf'), [
                    new Node\Arg(new Scalar\String_($securityScheme->getScheme() . ' %s')),
                    new Node\Arg($fetchedValue),
                ])
            )),
        ];
    }

    /**
     * @return Stmt[]
     */
    private function createApiKeyAuthenticationStatements(SecuritySchemeGuess $securityScheme): array
    {
        if (null === $securityScheme->getIn()) {
            return [];
        }

        return match ($securityScheme->getIn()) {
            'header' => $this->createApiKeyHeaderStatements($securityScheme),
            'query' => $this->createApiKeyQueryStatements($securityScheme),
            default => [],
        };
    }

    /**
     * @return Stmt[]
     */
    private function createApiKeyHeaderStatements(SecuritySchemeGuess $securityScheme): array
    {
        return [
            new Stmt\Expression(new Expr\Assign(
                new Expr\ArrayDimFetch(
                    new Expr\ArrayDimFetch(new Expr\Variable('options'), new Scalar\String_('headers')),
                    new Scalar\String_($securityScheme->getVariable())
                ),
                new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('apiKey'))
            )),
        ];
    }

    /**
     * @return Stmt[]
     */
    private function createApiKeyQueryStatements(SecuritySchemeGuess $securityScheme): array
    {
        return [
            new Stmt\Expression(new Expr\Assign(
                new Expr\ArrayDimFetch(
                    new Expr\ArrayDimFetch(new Expr\Variable('options'), new Scalar\String_('query')),
                    new Scalar\String_($securityScheme->getVariable())
                ),
                new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('apiKey'))
            )),
        ];
    }
}
