<?php

namespace Jane\Component\OpenApi31\Generator\Client;

use Jane\Component\OpenApi31\JsonSchema\Model\OpenApi;
use Jane\Component\OpenApi31\JsonSchema\Model\Server;
use Jane\Component\OpenApiCommon\Generator\Client\ServerPluginGenerator as BaseServerPluginGenerator;

trait ServerPluginGenerator
{
    use BaseServerPluginGenerator;

    /**
     * @param OpenApi $openApi
     *
     * @return array{0: string|null}
     */
    protected function discoverServer($openApi): array
    {
        $servers = ($openApi->servers ?? null);
        $server = $servers !== null && !empty($servers[0]) && $servers[0] instanceof Server ? $servers[0] : null;

        if (null !== $server) {
            $url = parse_url($server->url ?? null);
            $baseUri = '';

            if (\array_key_exists('host', $url)) {
                $scheme = $url['scheme'] ?? 'https';
                $baseUri = $scheme . '://' . trim($url['host'], '/');
            }

            $variables = ($server->variables ?? null);

            if (null !== $variables
                && $variables instanceof \ArrayAccess
                && $variables->offsetExists('port')
                && null !== $variables->offsetGet('port')->default
            ) {
                $baseUri .= ':' . $variables['port']->default;
            }

            if (\array_key_exists('path', $url) && null !== $url['path']) {
                $baseUri .= '/' . trim($url['path'], '/');
            }

            return [$baseUri];
        }

        return [null];
    }
}
