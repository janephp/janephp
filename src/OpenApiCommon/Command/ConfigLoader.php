<?php

namespace Jane\OpenApiCommon\Command;

use Jane\JsonSchema\Command\ConfigLoader as BaseConfigLoader;

trait ConfigLoader
{
    use BaseConfigLoader {
        resolveConfigurationDefaults as baseResolveConfigurationDefaults;
    }

    protected function resolveConfigurationDefaults(): array
    {
        return array_merge($this->baseResolveConfigurationDefaults(), [
            'whitelisted-paths' => null,
        ]);
    }
}
