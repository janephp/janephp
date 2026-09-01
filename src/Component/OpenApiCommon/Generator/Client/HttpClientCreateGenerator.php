<?php

namespace Jane\Component\OpenApiCommon\Generator\Client;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use Symfony\Component\HttpClient\HttpClient;

trait HttpClientCreateGenerator
{
    use ServerPluginGenerator;

    protected function getHttpClientCreateExpr(Context $context): array
    {
        $openApi = $context->getCurrentSchema()->getParsed();

        if (!$this->needsServerPlugins($openApi)) {
            return [
                $this->createHttpClientDefaultStmt(),
                new Stmt\Expression(new Expr\Assign(
                    new Expr\Variable('plugins'),
                    new Expr\Array_()
                )),
                $this->createAdditionalPluginsMergeStmt(),
                $this->createDecoratorLoopStmt(),
            ];
        }

        return [
            new Stmt\Expression(new Expr\Assign(
                new Expr\Variable('plugins'),
                new Expr\Array_()
            )),
            $this->createHttpClientDefaultStmt(),
            new Stmt\If_(
                new Expr\Variable('applyServerPlugins'),
                [
                    'stmts' => $this->getServerPluginsStatements($openApi),
                ]
            ),
            $this->createAdditionalPluginsMergeStmt(),
            $this->createDecoratorLoopStmt(),
        ];
    }

    private function createHttpClientDefaultStmt(): Stmt\If_
    {
        return new Stmt\If_(
            $this->createHttpClientNullCheck(),
            [
                'stmts' => [
                    new Stmt\Expression(new Expr\Assign(
                        new Expr\Variable('httpClient'),
                        new Expr\StaticCall(
                            new Name\FullyQualified(HttpClient::class),
                            'create'
                        )
                    )),
                ],
            ]
        );
    }

    private function createHttpClientNullCheck(): Expr
    {
        return new Expr\BinaryOp\Identical(
            new Expr\ConstFetch(new Name('null')),
            new Expr\Variable('httpClient')
        );
    }

    private function createAdditionalPluginsMergeStmt(): Stmt\If_
    {
        return new Stmt\If_(
            new Expr\BinaryOp\Greater(
                new Expr\FuncCall(new Name('count'), [new Node\Arg(new Expr\Variable('additionalPlugins'))]),
                new Expr\ConstFetch(new Name('0'))
            ),
            [
                'stmts' => [
                    new Stmt\Expression(new Expr\Assign(
                        new Expr\Variable('plugins'),
                        new Expr\FuncCall(new Name('array_merge'), [
                            new Node\Arg(new Expr\Variable('plugins')),
                            new Node\Arg(new Expr\Variable('additionalPlugins')),
                        ])
                    )),
                ],
            ]
        );
    }

    /**
     * Plugins are HttpClientInterface decorator factories
     * (callable(HttpClientInterface): HttpClientInterface): each one wraps the
     * client with an additional behavior (server URL, authentication, ...).
     */
    private function createDecoratorLoopStmt(): Stmt\Foreach_
    {
        return new Stmt\Foreach_(
            new Expr\Variable('plugins'),
            new Expr\Variable('plugin'),
            [
                'stmts' => [
                    new Stmt\Expression(new Expr\Assign(
                        new Expr\Variable('httpClient'),
                        new Expr\Call(
                            new Expr\Variable('plugin'),
                            [
                                new Node\Arg(new Expr\Variable('httpClient')),
                            ]
                        )
                    )),
                ],
            ]
        );
    }
}
