<?php

namespace Jane\Component\OpenApi3\Generator\Client;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Jane\Component\OpenApi3\JsonSchema\Model\OpenApi;
use Jane\Component\OpenApiCommon\Generator\Client\ServerPluginGenerator as BaseServerPluginGenerator;

trait ServerPluginGenerator
{
    use BaseServerPluginGenerator;

    /**
     * @param OpenApi $openApi
     */
    private function discoverServer($openApi): array
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

            if ($variables instanceof \ArrayObject
                && $variables->offsetExists('port')
                && null !== $variables->offsetGet('port')->getDefault()
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
