<?php

namespace Jane\OpenApiCommon\Console\Loader;

use Jane\JsonSchema\Console\Loader\ConfigLoader as BaseConfigLoader;
use Jane\JsonSchema\Console\Loader\ConfigLoaderInterface;

class ConfigLoader extends BaseConfigLoader implements ConfigLoaderInterface
{
    public function fileKey(): string
    {
        return 'openapi-file';
    }

    protected function resolveConfigurationRequired(): array
    {
        return [
            $this->fileKey(),
            'namespace',
            'directory',
        ];
    }

    protected function resolveConfigurationDefaults(): array
    {
        return array_merge(parent::resolveConfigurationDefaults(), [
            'whitelisted-paths' => null
        ]);
    }
}
