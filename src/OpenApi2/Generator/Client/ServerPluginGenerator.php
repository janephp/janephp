<?php

namespace Jane\OpenApi2\Generator\Client;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Jane\OpenApi2\Generator\Psr18ClientGenerator;
use Jane\OpenApi2\JsonSchema\Model\OpenApi;
use Jane\OpenApiCommon\Generator\Client\ServerPluginGenerator as BaseServerPluginGenerator;

trait ServerPluginGenerator
{
    use BaseServerPluginGenerator;

    protected function getPsr18ClientGeneratorClass(): string
    {
        return Psr18ClientGenerator::class;
    }

    private function discoverServer(OpenApi $openApi): array
    {
        if (null !== ($host = $openApi->getHost())) {
            $scheme = 'https';
            $schemes = $openApi->getSchemes() ?? [];

            if (1 === \count($schemes)) {
                $scheme = reset($schemes);
            }

            $baseUri = $scheme . '://' . trim($host, '/');
            $plugins[] = AddHostPlugin::class;

            if (null !== ($basePath = $openApi->getBasePath())) {
                $baseUri .= '/' . trim($basePath, '/');
                $plugins[] = AddPathPlugin::class;
            }

            return [$baseUri, $plugins];
        }

        return [null, []];
    }
}
