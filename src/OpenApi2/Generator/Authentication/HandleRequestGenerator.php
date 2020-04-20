<?php

namespace Jane\OpenApi2\Generator\Authentication;

use Http\Promise\Promise;
use Jane\OpenApi2\JsonSchema\Model\ApiKeySecurity;
use Jane\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;
use PhpParser\Node;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\Name;
use PhpParser\Node\Expr;
use Psr\Http\Message\RequestInterface;
use PhpParser\Node\Scalar;

trait HandleRequestGenerator
{
    protected function createHandleRequest(SecuritySchemeGuess $securityScheme): Stmt\ClassMethod
    {
        $requestVar = new Expr\Variable('request');
        $nextVar = new Expr\Variable('next');
        $stmts = [];

        switch ($securityScheme->getType()) {
            case SecuritySchemeGuess::TYPE_API_KEY:
                /** @var ApiKeySecurity $object */
                $object = $securityScheme->getObject();
                $authenticateStmts = [];

                switch ($object->getIn()) {
                    case 'header':
                        $stmts = [
                            new Stmt\Expression(new Expr\Assign(new Expr\Variable('request'), new Expr\MethodCall(new Expr\Variable('request'), 'withHeader', [
                                new Node\Arg(new Scalar\String_($object->getName())),
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
                                    new Expr\ArrayItem(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('apiKey')), new Scalar\String_($object->getName())),
                                ])),
                            ]))),
                            new Stmt\Expression(new Expr\Assign(new Expr\Variable('query'), new Expr\FuncCall(new Name('http_build_query'), [
                                new Node\Arg(new Expr\Variable('params')),
                                new Node\Arg(new Expr\ConstFetch(new Name('null'))),
                                new Node\Arg(new Scalar\String_('&')),
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
                throw new \Exception(sprintf('Jane actually does not support Security type %s generation', $securityScheme->getType()));
                break;
        }

        $stmts[] = new Stmt\Return_(new Expr\FuncCall(
            new Expr\Variable('next'),
            [new Node\Arg($requestVar)]
        ));

        return new Stmt\ClassMethod('handleRequest', [
            'params' => [
                new Param($requestVar, null, new Name\FullyQualified(RequestInterface::class)),
                new Param($nextVar, null, 'callable'),
                new Param(new Expr\Variable('first'), null, 'callable'),
            ],
            'returnType' => new Name\FullyQualified(Promise::class),
            'stmts' => $stmts,
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
        ]);
    }
}
