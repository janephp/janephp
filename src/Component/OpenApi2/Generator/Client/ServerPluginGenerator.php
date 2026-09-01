<?php

namespace Jane\Component\OpenApi2\Generator\Client;

use Jane\Component\OpenApi2\JsonSchema\Model\OpenApi;
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
        if (null !== ($host = ($openApi->host ?? null))) {
            $scheme = 'https';
            $schemes = ($openApi->schemes ?? null) ?? [];

            if (1 === \count($schemes)) {
                $scheme = reset($schemes);
            }

            $baseUri = $scheme . '://' . trim($host, '/');

            if (null !== ($basePath = ($openApi->basePath ?? null))) {
                $baseUri .= '/' . trim($basePath, '/');
            }

            return [$baseUri];
        }

        return [null];
    }
}
