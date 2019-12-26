<?php

namespace Jane\OpenApiCommon\Generator\Client;

use Http\Client\Common\Plugin;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
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

    abstract protected function getPsr18ClientGeneratorClass(): string;

    abstract protected function discoverServer($openApi): void;

    protected function needsServerPlugins($openApi): bool
    {
        if (null === $this->baseUri) {
            $this->discoverServer($openApi);
        }

        return !(empty($this->baseUri) || $this->baseUri === '/');
    }

    protected function getServerPluginsStatements($openApi): array
    {
        if (null === $this->baseUri) {
            $this->discoverServer($openApi);
        }

        $psr18ClientGeneratorClass = $this->getPsr18ClientGeneratorClass();
        $discoveryFactoryClass = $this instanceof $psr18ClientGeneratorClass ? Psr17FactoryDiscovery::class : UriFactoryDiscovery::class;
        $discoveryFactoryMethod = $this instanceof $psr18ClientGeneratorClass ? 'findUrlFactory' : 'find';

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
