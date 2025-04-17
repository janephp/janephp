<?php

namespace Jane\Component\JsonSchema\Console\Loader;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ConfigLoader implements ConfigLoaderInterface
{
    public function fileKey(): string
    {
        return 'json-schema-file';
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

    protected function resolveConfiguration(array $options = [])
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
            'root-class',
            'namespace',
            'directory',
        ];
    }

    protected function resolveConfigurationDefaults(): array
    {
        return [
            'reference' => true,
            'strict' => true,
            'date-format' => \DateTime::RFC3339,
            'full-date-format' => 'Y-m-d',
            'date-prefer-interface' => null,
            'date-input-format' => null,
            'use-fixer' => false,
            'fixer-config-file' => null,
            'clean-generated' => true,
            'use-cacheable-supports-method' => null,
            'skip-null-values' => true,
            'skip-required-fields' => false,
            'custom-string-format-mapping' => [],
            'validation' => false,
            'include-null-value' => true,
        ];
    }
}
