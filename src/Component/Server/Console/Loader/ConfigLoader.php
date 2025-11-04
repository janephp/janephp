<?php

namespace Jane\Component\Server\Console\Loader;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ConfigLoader implements ConfigLoaderInterface
{
    public function fileKey(): string
    {
        return 'openapi-file';
    }

    public function load(string $path): array
    {
        if (!file_exists($path)) {
            throw new \RuntimeException(\sprintf('Config file %s does not exist', $path));
        }

        $options = require $path;

        if (!\is_array($options)) {
            throw new \RuntimeException(\sprintf('Invalid config file specified or invalid return type in file %s', $path));
        }

        return $this->resolveConfiguration($options);
    }

    protected function resolveConfiguration(array $options = []): array
    {
        $optionsResolver = new OptionsResolver();
        $optionsResolver->setDefaults($this->resolveConfigurationDefaults());

        if (\array_key_exists($this->fileKey(), $options)) {
            $optionsResolver->setRequired($this->resolveConfigurationRequired());
        } else {
            $optionsResolver->setRequired([
                'mapping',
            ]);
        }

        return $optionsResolver->resolve($options);
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
        return [
            'use-fixer' => false,
            'fixer-config-file' => null,
        ];
    }
}
