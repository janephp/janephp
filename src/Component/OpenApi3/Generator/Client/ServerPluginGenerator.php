<?php

namespace Jane\Component\OpenApi3\Generator\Client;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Jane\Component\OpenApi3\JsonSchema\Model\OpenApi;
use Jane\Component\OpenApiCommon\Generator\Client\ServerPluginGenerator as BaseServerPluginGenerator;

trait ServerPluginGenerator
{
    use BaseServerPluginGenerator;

    private function discoverServer(OpenApi $openApi): array
    {
        $servers = $openApi->getServers();
        $server = $servers !== null && !empty($servers[0]) ? $servers[0] : null;

        if (null !== $server) {
            $url = parse_url($server->getUrl());
            $baseUri = '';
            $plugins = [];

            if (\array_key_exists('host', $url)) {
                $scheme = $url['scheme'] ?? 'https';
                $baseUri = $scheme . '://' . trim($url['host'], '/');
                $plugins[] = AddHostPlugin::class;
            }

            $variables = $server->getVariables();

            if (null !== $variables
                && \array_key_exists('port', $variables)
                && null !== $variables['port']->getDefault()
            ) {
                $baseUri .= ':' . $variables['port']->getDefault();
            }

            if (\array_key_exists('path', $url) && null !== $url['path']) {
                $baseUri .= '/' . trim($url['path'], '/');
                $plugins[] = AddPathPlugin::class;
            }

            return [$baseUri, $plugins];
        }

        return [null, []];
    }
}
