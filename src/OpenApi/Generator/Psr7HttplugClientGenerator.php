<?php

namespace Jane\OpenApi\Generator;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\JsonSchema\Version3\Model\OpenApi;
use Jane\OpenApiRuntime\Client\Psr7HttplugClient;
use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

class Psr7HttplugClientGenerator extends ClientGenerator
{
    protected function getSuffix(): string
    {
        return '';
    }

    protected function createResourceClass(string $name): Stmt\Class_
    {
        return new Stmt\Class_($name, [
            'extends' => new Node\Name\FullyQualified(Psr7HttplugClient::class),
        ]);
    }

    protected function getFactoryMethod(Context $context): Stmt
    {
        return new Stmt\ClassMethod(
            'create', [
                'flags' => Stmt\Class_::MODIFIER_STATIC | Stmt\Class_::MODIFIER_PUBLIC,
                'params' => [
                    new Node\Param('httpClient', new Expr\ConstFetch(new Name('null'))),
                ],
                'stmts' => [
                    new Stmt\If_(
                        new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('null')), new Expr\Variable('httpClient')),
                        [
                            'stmts' => $this->getHttpClientCreateExpr($context),
                        ]
                    ),
                    new Expr\Assign(
                        new Expr\Variable('messageFactory'),
                        new Expr\StaticCall(
                            new Name\FullyQualified(MessageFactoryDiscovery::class),
                            'find'
                        )
                    ),
                    new Expr\Assign(
                        new Expr\Variable('streamFactory'),
                        new Expr\StaticCall(
                            new Name\FullyQualified(StreamFactoryDiscovery::class),
                            'find'
                        )
                    ),
                    new Expr\Assign(
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
                    ),
                    new Stmt\Return_(
                        new Expr\New_(
                            new Name('static'), [
                                new Node\Arg(new Expr\Variable('httpClient')),
                                new Node\Arg(new Expr\Variable('messageFactory')),
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

        if (null !== $openApi->getSchemes() && \count($openApi->getSchemes()) > 0 && !\in_array('https', $openApi->getSchemes())) {
            $scheme = $openApi->getSchemes()[0];
        }

        if (null !== $server) {
            $url = parse_url($server->getUrl());
            $baseUri = '';

            if (null !== $url['host']) {
                $scheme = $url['scheme'] ?? 'https';
                $baseUri = $scheme . '://' . trim($url['host'], '/');
                $plugins[] = AddHostPlugin::class;
            }

            if (null !== $url['path']) {
                $baseUri .= '/' . trim($url['path'], '/');
                $plugins[] = AddPathPlugin::class;
            }
        }

        $httpClientAssign = new Expr\Assign(
            new Expr\Variable('httpClient'),
            new Expr\StaticCall(
                new Name\FullyQualified(HttpClientDiscovery::class),
                'find'
            )
        );

        if (empty($baseUri)) {
            return [$httpClientAssign];
        }

        $statements = [
            $httpClientAssign,
            new Expr\Assign(
                new Expr\Variable('plugins'),
                new Expr\Array_()
            ),
            new Expr\Assign(
                new Expr\Variable('uri'),
                new Expr\MethodCall(
                    new Expr\StaticCall(
                        new Name\FullyQualified(UriFactoryDiscovery::class),
                        'find'
                    ),
                    'createUri',
                    [
                        new Node\Arg(new Node\Scalar\String_($baseUri)),
                    ]
                )
            ),
        ];

        foreach ($plugins as $pluginClass) {
            $statements[] = new Expr\Assign(
                new Expr\ArrayDimFetch(new Expr\Variable('plugins')),
                new Expr\New_(new Name\FullyQualified($pluginClass), [
                    new Node\Arg(new Expr\Variable('uri')),
                ])
            );
        }

        $statements[] = new Expr\Assign(
            new Expr\Variable('httpClient'),
            new Expr\New_(
                new Name\FullyQualified(PluginClient::class),
                [
                    new Node\Arg(new Expr\Variable('httpClient')),
                    new Node\Arg(new Expr\Variable('plugins')),
                ]
            )
        );

        return $statements;
    }
}
