<?php

namespace Jane\OpenApiCommon\Command;

use Jane\JsonSchema\Command\ConfigLoader as BaseConfigLoader;
use Symfony\Component\OptionsResolver\OptionsResolver;

trait ConfigLoader
{
    use BaseConfigLoader {
        resolveConfigurationDefaults as baseResolveConfigurationDefaults;
    }

    protected function resolveConfiguration(array $options = [])
    {
        $optionsResolver = new OptionsResolver();
        $optionsResolver->setDefaults($this->resolveConfigurationDefaults());

        if (\array_key_exists('openapi-file', $options)) {
            $optionsResolver->setRequired([
                'openapi-file',
                'namespace',
                'directory',
            ]);

            $optionsResolver->setDefault('version', 3);
        } else {
            $optionsResolver->setRequired([
                'mapping',
            ]);
        }

        return $optionsResolver->resolve($options);
    }

    protected function resolveConfigurationDefaults(): array
    {
        return array_merge($this->baseResolveConfigurationDefaults(), [
            'whitelisted-paths' => null,
        ]);
    }
}
