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
use Psr\Http\Message\RequestInterface;

trait AuthenticationGenerator
{
    protected function createAuthentication(SecuritySchemeGuess $securityScheme): Stmt\ClassMethod
    {
        $requestVar = new Expr\Variable('request');

        $stmts = match ($securityScheme->getType()) {
            SecuritySchemeGuess::TYPE_HTTP => $this->createHttpAuthenticationStatements($requestVar, $securityScheme),
            SecuritySchemeGuess::TYPE_API_KEY => $this->createApiKeyAuthenticationStatements($requestVar, $securityScheme),
            default => throw new \Exception(\sprintf('Jane actually does not support Security type %s generation', $securityScheme->getType())),
        };

        $stmts[] = new Stmt\Return_($requestVar);

        return new Stmt\ClassMethod('authentication', [
            'params' => [
                new Param($requestVar, null, new Name\FullyQualified(RequestInterface::class)),
            ],
            'returnType' => new Name\FullyQualified(RequestInterface::class),
            'stmts' => $stmts,
            'flags' => Modifiers::PUBLIC,
        ]);
    }

    /**
     * @return Stmt[]
     */
    private function createHttpAuthenticationStatements(Expr\Variable $requestVar, SecuritySchemeGuess $securityScheme): array
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
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('header'), new Expr\FuncCall(new Name('sprintf'), [
                new Node\Arg(new Scalar\String_($securityScheme->getScheme() . ' %s')),
                new Node\Arg($fetchedValue),
            ]))),
            new Stmt\Expression(new Expr\Assign($requestVar, new Expr\MethodCall(new Expr\Variable('request'), 'withHeader', [
                new Node\Arg(new Scalar\String_('Authorization')),
                new Node\Arg(new Expr\Variable('header')),
            ]))),
        ];
    }

    /**
     * @return Stmt[]
     */
    private function createApiKeyAuthenticationStatements(Expr\Variable $requestVar, SecuritySchemeGuess $securityScheme): array
    {
        if (null === $securityScheme->getIn()) {
            return [];
        }

        return match ($securityScheme->getIn()) {
            'header' => $this->createApiKeyHeaderStatements($requestVar, $securityScheme),
            'query' => $this->createApiKeyQueryStatements($requestVar, $securityScheme),
            default => [],
        };
    }

    /**
     * @return Stmt[]
     */
    private function createApiKeyHeaderStatements(Expr\Variable $requestVar, SecuritySchemeGuess $securityScheme): array
    {
        return [
            new Stmt\Expression(new Expr\Assign($requestVar, new Expr\MethodCall(new Expr\Variable('request'), 'withHeader', [
                new Node\Arg(new Scalar\String_($securityScheme->getVariable())),
                new Node\Arg(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('apiKey'))),
            ]))),
        ];
    }

    /**
     * @return Stmt[]
     */
    private function createApiKeyQueryStatements(Expr\Variable $requestVar, SecuritySchemeGuess $securityScheme): array
    {
        return [
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('uri'), new Expr\MethodCall(new Expr\Variable('request'), 'getUri'))),
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('query'), new Expr\MethodCall(new Expr\Variable('uri'), 'getQuery'))),
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('params'), new Expr\Array_())),
            new Stmt\Expression(new Expr\FuncCall(new Name('parse_str'), [
                new Node\Arg(new Expr\Variable('query')),
                new Node\Arg(new Expr\Variable('params')),
            ])),
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('params'), new Expr\FuncCall(new Name('array_merge'), [
                new Node\Arg(new Expr\Variable('params')),
                new Node\Arg(new Expr\Array_([
                    new Expr\ArrayItem(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('apiKey')), new Scalar\String_($securityScheme->getVariable())),
                ])),
            ]))),
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('query'), new Expr\FuncCall(new Name('http_build_query'), [
                new Node\Arg(new Expr\Variable('params')),
            ]))),
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('uri'), new Expr\MethodCall(new Expr\Variable('uri'), 'withQuery', [
                new Node\Arg(new Expr\Variable('query')),
            ]))),
            new Stmt\Expression(new Expr\Assign($requestVar, new Expr\MethodCall(new Expr\Variable('request'), 'withUri', [
                new Node\Arg(new Expr\Variable('uri')),
            ]))),
        ];
    }
}
