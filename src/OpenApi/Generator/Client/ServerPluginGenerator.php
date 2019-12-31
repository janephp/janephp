<?php

namespace Jane\OpenApi\Generator\Client;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Jane\OpenApi\Generator\Psr18ClientGenerator;
use Jane\OpenApi\JsonSchema\Model\OpenApi;
use Jane\OpenApiCommon\Generator\Client\ServerPluginGenerator as BaseServerPluginGenerator;

trait ServerPluginGenerator
{
    use BaseServerPluginGenerator;

    protected function getPsr18ClientGeneratorClass(): string
    {
        return Psr18ClientGenerator::class;
    }

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
}
