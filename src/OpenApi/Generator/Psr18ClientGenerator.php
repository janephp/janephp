<?php

namespace Jane\OpenApi\Generator;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\JsonSchema\Version3\Model\OpenApi;
use Jane\OpenApiRuntime\Client\Psr18Client;
use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

class Psr18ClientGenerator extends ClientGenerator
{
    protected function getSuffix(): string
    {
        return '';
    }

    protected function createResourceClass(string $name): Stmt\Class_
    {
        return new Stmt\Class_($name, [
            'extends' => new Node\Name\FullyQualified(Psr18Client::class),
        ]);
    }

    protected function getFactoryMethod(Context $context): Stmt
    {
        return new Stmt\ClassMethod(
            'create', [
                'flags' => Stmt\Class_::MODIFIER_STATIC | Stmt\Class_::MODIFIER_PUBLIC,
                'params' => [
                    new Node\Param(new Expr\Variable('httpClient'), new Expr\ConstFetch(new Name('null'))),
                ],
                'stmts' => [
                    new Stmt\If_(
                        new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('null')), new Expr\Variable('httpClient')),
                        [
                            'stmts' => $this->getHttpClientCreateExpr($context),
                        ]
                    ),
                    new Stmt\Expression(new Expr\Assign(
                        new Expr\Variable('requestFactory'),
                        new Expr\StaticCall(
                            new Name\FullyQualified(Psr17FactoryDiscovery::class),
                            'findRequestFactory'
                        )
                    )),
                    new Stmt\Expression(new Expr\Assign(
                        new Expr\Variable('streamFactory'),
                        new Expr\StaticCall(
                            new Name\FullyQualified(Psr17FactoryDiscovery::class),
                            'findStreamFactory'
                        )
                    )),
                    new Stmt\Expression(new Expr\Assign(
                        new Expr\Variable('serializer'),
                        new Expr\New_(
                            new Name\FullyQualified(Serializer::class),
                            [
                                new Node\Arg(
                                    new Expr\StaticCall(
                                        new Name('\\' . $context->getCurrentSchema()->getNamespace() . '\\Normalizer\\NormalizerFactory'),
                                        'create'
                                    )
                                ),
                                new Node\Arg(
                                    new Expr\Array_([
                                        new Expr\ArrayItem(
                                            new Expr\New_(new Name\FullyQualified(JsonEncoder::class), [
                                                new Node\Arg(new Expr\New_(new Name\FullyQualified(JsonEncode::class))),
                                                new Node\Arg(new Expr\New_(new Name\FullyQualified(JsonDecode::class))),
                                            ])
                                        ),
                                    ])
                                ),
                            ]
                        )
                    )),
                    new Stmt\Return_(
                        new Expr\New_(
                            new Name('static'), [
                                new Node\Arg(new Expr\Variable('httpClient')),
                                new Node\Arg(new Expr\Variable('requestFactory')),
                                new Node\Arg(new Expr\Variable('serializer')),
                                new Node\Arg(new Expr\Variable('streamFactory')),
                            ]
                        )
                    ),
                ],
            ]
        );
    }

    private function getHttpClientCreateExpr(Context $context)
    {
        /** @var OpenApi $openApi */
        $openApi = $context->getCurrentSchema()->getParsed();
        $baseUri = null;
        $plugins = [];

        $servers = $openApi->getServers();
        $server = $servers !== null && $servers[0] !== null ? $servers[0] : null;

        if (null !== $server) {
            $url = parse_url($server->getUrl());
            $baseUri = '';

            if (isset($url['host'])) {
                $scheme = $url['scheme'] ?? 'https';
                $baseUri = $scheme . '://' . trim($url['host'], '/');
                $plugins[] = AddHostPlugin::class;
            }

            if (null !== $url['path']) {
                $baseUri .= '/' . trim($url['path'], '/');
                $plugins[] = AddPathPlugin::class;
            }
        }

        $httpClientAssign = new Stmt\Expression(new Expr\Assign(
            new Expr\Variable('httpClient'),
            new Expr\StaticCall(
                new Name\FullyQualified(Psr18ClientDiscovery::class),
                'find'
            )
        ));

        if (empty($baseUri) || $baseUri === '/') {
            return [$httpClientAssign];
        }

        $statements = [
            $httpClientAssign,
            new Stmt\Expression(new Expr\Assign(
                new Expr\Variable('plugins'),
                new Expr\Array_()
            )),
            new Stmt\Expression(new Expr\Assign(
                new Expr\Variable('uri'),
                new Expr\MethodCall(
                    new Expr\StaticCall(
                        new Name\FullyQualified(Psr17FactoryDiscovery::class),
                        'findUrlFactory'
                    ),
                    'createUri',
                    [
                        new Node\Arg(new Node\Scalar\String_($baseUri)),
                    ]
                )
            )),
        ];

        foreach ($plugins as $pluginClass) {
            $statements[] = new Stmt\Expression(new Expr\Assign(
                new Expr\ArrayDimFetch(new Expr\Variable('plugins')),
                new Expr\New_(new Name\FullyQualified($pluginClass), [
                    new Node\Arg(new Expr\Variable('uri')),
                ])
            ));
        }

        $statements[] = new Stmt\Expression(new Expr\Assign(
            new Expr\Variable('httpClient'),
            new Expr\New_(
                new Name\FullyQualified(PluginClient::class),
                [
                    new Node\Arg(new Expr\Variable('httpClient')),
                    new Node\Arg(new Expr\Variable('plugins')),
                ]
            )
        ));

        return $statements;
    }
}
