<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\RuntimeGenerator as BaseRuntimeGenerator;

class RuntimeGenerator extends BaseRuntimeGenerator
{
    /**
     * The Client template types its endpoint methods with the Endpoint
     * interface, which only endpoint generation requires otherwise: a
     * specification without operations would get a Client referencing an
     * interface that is never generated.
     */
    private const OPENAPI_BUILDERS = [
        'Client' => ['class' => 'Client', 'namespace' => ['Client'], 'source' => 'Client/Client.php', 'file' => 'Client.php', 'requires' => ['Endpoint']],
        'BaseEndpoint' => ['class' => 'BaseEndpoint', 'namespace' => ['Client'], 'source' => 'Client/BaseEndpoint.php', 'file' => 'BaseEndpoint.php'],
        'Endpoint' => ['class' => 'Endpoint', 'namespace' => ['Client'], 'source' => 'Client/Endpoint.php', 'file' => 'Endpoint.php'],
        'EndpointTrait' => ['class' => 'EndpointTrait', 'namespace' => ['Client'], 'source' => 'Client/EndpointTrait.php', 'file' => 'EndpointTrait.php'],
        'CustomQueryResolver' => ['class' => 'CustomQueryResolver', 'namespace' => ['Client'], 'source' => 'Client/CustomQueryResolver.php', 'file' => 'CustomQueryResolver.php'],
        'FormEncoder' => ['class' => 'FormEncoder', 'namespace' => ['Client'], 'source' => 'Client/FormEncoder.php', 'file' => 'FormEncoder.php'],
        'JsonPayload' => ['class' => 'JsonPayload', 'namespace' => ['Client'], 'source' => 'Client/JsonPayload.php', 'file' => 'JsonPayload.php'],
    ];

    protected function getBuilders(): array
    {
        return array_merge(parent::getBuilders(), self::OPENAPI_BUILDERS);
    }

    protected function getSourceDir(array $namespace): string
    {
        if ($namespace === ['Client']) {
            return __DIR__ . '/Runtime';
        }

        return parent::getSourceDir($namespace);
    }
}
