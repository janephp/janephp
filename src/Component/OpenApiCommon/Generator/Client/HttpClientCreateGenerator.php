<?php

namespace Jane\Component\OpenApiCommon\Generator\Client;

use Http\Client\Common\PluginClient;
use Http\Discovery\Psr18ClientDiscovery;
use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait HttpClientCreateGenerator
{
    use ServerPluginGenerator;

    protected function getHttpClientCreateExpr(Context $context): array
    {
        $openApi = $context->getCurrentSchema()->getParsed();

        if (!$this->needsServerPlugins($openApi)) {
            return [
                new Stmt\If_(
                    $this->createHttpClientNullCheck(),
                    [
                        'stmts' => [
                            $this->createHttpClientDiscoveryStmt(),
                            new Stmt\Expression(new Expr\Assign(
                                new Expr\Variable('plugins'),
                                new Expr\Array_()
                            )),
                            $this->createAdditionalPluginsMergeStmt(),
                            $this->createPluginClientAssignStmt(),
                        ],
                    ]
                ),
            ];
        }

        return [
            new Stmt\Expression(new Expr\Assign(
                new Expr\Variable('plugins'),
                new Expr\Array_()
            )),
            new Stmt\If_(
                $this->createHttpClientNullCheck(),
                [
                    'stmts' => [
                        $this->createHttpClientDiscoveryStmt(),
                    ],
                ]
            ),
            new Stmt\If_(
                new Expr\Variable('applyServerPlugins'),
                [
                    'stmts' => $this->getServerPluginsStatements($openApi),
                ]
            ),
            $this->createAdditionalPluginsMergeStmt(),
            $this->createPluginClientAssignStmt(),
        ];
    }

    private function createHttpClientNullCheck(): Expr
    {
        return new Expr\BinaryOp\Identical(
            new Expr\ConstFetch(new Name('null')),
            new Expr\Variable('httpClient')
        );
    }

    private function createHttpClientDiscoveryStmt(): Stmt\Expression
    {
        return new Stmt\Expression(new Expr\Assign(
            new Expr\Variable('httpClient'),
            new Expr\StaticCall(
                new Name\FullyQualified(Psr18ClientDiscovery::class),
                'find'
            )
        ));
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

    private function createPluginClientAssignStmt(): Stmt\Expression
    {
        return new Stmt\Expression(new Expr\Assign(
            new Expr\Variable('httpClient'),
            new Expr\New_(
                new Name\FullyQualified(PluginClient::class),
                [
                    new Node\Arg(new Expr\Variable('httpClient')),
                    new Node\Arg(new Expr\Variable('plugins')),
                ]
            )
        ));
    }
}
