<?php

namespace Jane\Component\OpenApiCommon\Generator\Client;

use Http\Discovery\Psr17FactoryDiscovery;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait ServerPluginGenerator
{
    /**
     * @param object $openApi
     *
     * @return array{0: string|null, 1: string[]}
     */
    abstract protected function discoverServer(mixed $openApi): array;

    /**
     * @param object $openApi
     */
    protected function needsServerPlugins(mixed $openApi): bool
    {
        [$baseUri] = $this->discoverServer($openApi);

        return !(empty($baseUri) || $baseUri === '/');
    }

    /**
     * @param object $openApi
     *
     * @return array
     */
    protected function getServerPluginsStatements(mixed $openApi): array
    {
        [$baseUri, $plugins] = $this->discoverServer($openApi);

        $stmts = [
            new Stmt\Expression(new Expr\Assign(
                new Expr\Variable('uri'),
                new Expr\MethodCall(
                    new Expr\StaticCall(
                        new Name\FullyQualified(Psr17FactoryDiscovery::class),
                        'findUriFactory'
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
