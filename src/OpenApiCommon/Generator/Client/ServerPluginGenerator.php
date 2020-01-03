<?php

namespace Jane\OpenApiCommon\Generator\Client;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node;

trait ServerPluginGenerator
{
    abstract protected function getPsr18ClientGeneratorClass(): string;

    abstract protected function discoverServer($openApi): array;

    protected function needsServerPlugins($openApi): bool
    {
        [$baseUri, $_] = $this->discoverServer($openApi);

        return !(empty($baseUri) || $baseUri === '/');
    }

    protected function getServerPluginsStatements($openApi): array
    {
        [$baseUri, $plugins] = $this->discoverServer($openApi);

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
                        new Node\Arg(new Node\Scalar\String_($baseUri)),
                    ]
                )
            )),
        ];

        foreach ($plugins as $pluginClass) {
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
