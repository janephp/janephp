<?php

namespace Jane\OpenApi\Generator\Client;

use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Jane\OpenApi\Generator\Psr18ClientGenerator;
use Jane\OpenApi\JsonSchema\Model\OpenApi;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node;

trait ServerPluginGenerator
{
    /** @var string */
    private $baseUri;

    /** @var array|Plugin[] */
    private $plugins = [];

    private function discoverServer(OpenApi $openApi)
    {
        $servers = $openApi->getServers();
        $server = $servers !== null && !empty($servers[0]) ? $servers[0] : null;

        if (null !== $server) {
            $url = parse_url($server->getUrl());
            $this->baseUri = '';

            if (\array_key_exists('host', $url)) {
                $scheme = $url['scheme'] ?? 'https';
                $this->baseUri = $scheme . '://' . trim($url['host'], '/');
                $this->plugins[] = AddHostPlugin::class;
            }

            if (\array_key_exists('path', $url) && null !== $url['path']) {
                $this->baseUri .= '/' . trim($url['path'], '/');
                $this->plugins[] = AddPathPlugin::class;
            }
        }
    }

    protected function needsServerPlugins(OpenApi $openApi): bool
    {
        if (null === $this->baseUri) {
            $this->discoverServer($openApi);
        }

        return !(empty($this->baseUri) || $this->baseUri === '/');
    }

    protected function getServerPluginsStatements(OpenApi $openApi): array
    {
        if (null === $this->baseUri) {
            $this->discoverServer($openApi);
        }

        $discoveryFactoryClass = $this instanceof Psr18ClientGenerator ? Psr17FactoryDiscovery::class : UriFactoryDiscovery::class;
        $discoveryFactoryMethod = $this instanceof Psr18ClientGenerator ? 'findUrlFactory' : 'find';

        $stmts = [
            new Stmt\Expression(new Expr\Assign(
                new Expr\Variable('uri'),
                new Expr\MethodCall(
                    new Expr\StaticCall(
                        new Name\FullyQualified($discoveryFactoryClass),
                        $discoveryFactoryMethod
                    ),
                    'createUri',
                    [
                        new Node\Arg(new Node\Scalar\String_($this->baseUri)),
                    ]
                )
            )),
        ];

        foreach ($this->plugins as $pluginClass) {
            $stmts[] = new Stmt\Expression(new Expr\Assign(
                new Expr\ArrayDimFetch(new Expr\Variable('plugins')),
                new Expr\New_(new Name\FullyQualified($pluginClass), [
                    new Node\Arg(new Expr\Variable('uri')),
                ])
            ));
        }

        return $stmts;
    }
}
