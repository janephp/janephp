<?php

namespace Jane\Component\OpenApiCommon\Generator\Authentication;

use Jane\Component\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;
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
        $nextVar = new Expr\Variable('next');
        $stmts = [];

        switch ($securityScheme->getType()) {
            case SecuritySchemeGuess::TYPE_HTTP:
                switch ($securityScheme->getScheme()) {
                    case SecuritySchemeGuess::SCHEME_BEARER:
                        $fetchedValue = new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('token'));
                        break;
                    case SecuritySchemeGuess::SCHEME_BASIC:
                        $fetchedValue = new Expr\FuncCall(new Name('base64_encode'), [
                            new Node\Arg(new Expr\FuncCall(new Name('sprintf'), [
                                new Node\Arg(new Scalar\String_('%s:%s')),
                                new Node\Arg(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('username'))),
                                new Node\Arg(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('password'))),
                            ])),
                        ]);
                        break;
                }

                $stmts[] = new Stmt\Expression(new Expr\Assign(new Expr\Variable('header'), new Expr\FuncCall(new Name('sprintf'), [
                    new Node\Arg(new Scalar\String_($securityScheme->getScheme() . ' %s')),
                    new Node\Arg($fetchedValue),
                ])));
                $stmts[] = new Stmt\Expression(new Expr\Assign(new Expr\Variable('request'), new Expr\MethodCall(new Expr\Variable('request'), 'withHeader', [
                    new Node\Arg(new Scalar\String_('Authorization')),
                    new Node\Arg(new Expr\Variable('header')),
                ])));
                break;
            case SecuritySchemeGuess::TYPE_API_KEY:
                if (null === $securityScheme->getIn()) {
                    break;
                }

                switch ($securityScheme->getIn()) {
                    case 'header':
                        $stmts = [
                            new Stmt\Expression(new Expr\Assign(new Expr\Variable('request'), new Expr\MethodCall(new Expr\Variable('request'), 'withHeader', [
                                new Node\Arg(new Scalar\String_($securityScheme->getVariable())),
                                new Node\Arg(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('apiKey'))),
                            ]))),
                        ];
                        break;
                    case 'query':
                        $stmts = [
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
                            new Stmt\Expression(new Expr\Assign(new Expr\Variable('request'), new Expr\MethodCall(new Expr\Variable('request'), 'withUri', [
                                new Node\Arg(new Expr\Variable('uri')),
                            ]))),
                        ];
                        break;
                }
                break;
            default:
                throw new \Exception(\sprintf('Jane actually does not support Security type %s generation', $securityScheme->getType()));
                break;
        }

        $stmts[] = new Stmt\Return_($requestVar);

        return new Stmt\ClassMethod('authentication', [
            'params' => [
                new Param($requestVar, null, new Name\FullyQualified(RequestInterface::class)),
            ],
            'returnType' => new Name\FullyQualified(RequestInterface::class),
            'stmts' => $stmts,
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
        ]);
    }
}
