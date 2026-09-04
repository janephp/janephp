<?php

namespace Jane\Component\OpenApiCommon\Generator\Client;

use Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait ServerPluginGenerator
{
    /**
     * @param object $openApi
     *
     * @return array{0: string|null}
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
     * Emits the registration of the server URL decorator: request URLs are
     * rewritten to the spec's server URL (scheme, host, port and base path).
     *
     * @param object $openApi
     */
    protected function getServerPluginsStatements(mixed $openApi): array
    {
        [$baseUri] = $this->discoverServer($openApi);

        return [
            new Stmt\Expression(new Expr\Assign(
                new Expr\ArrayDimFetch(new Expr\Variable('plugins')),
                new Expr\New_(new Name\FullyQualified(ServerUrlHttpClient::class), [
                    new Node\Arg(new Node\Scalar\String_($baseUri)),
                ])
            )),
        ];
    }
}
