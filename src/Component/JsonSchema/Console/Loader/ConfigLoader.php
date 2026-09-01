<?php

namespace Jane\Component\JsonSchema\Console\Loader;

use Jane\Component\JsonSchema\Generator\Options;
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
            $phpPath = $path . '.php';
            if (file_exists($phpPath)) {
                $path = $phpPath;
            }
        }

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
            'root-class',
            'namespace',
            'directory',
        ];
    }

    protected function resolveConfigurationDefaults(): array
    {
        $defaults = Options::defaults()->toArray();

        // OpenAPI-specific options are not part of the JsonSchema vocabulary.
        unset($defaults['whitelisted-paths'], $defaults['endpoint-generator'], $defaults['operation-namings'], $defaults['custom-query-resolver'], $defaults['throw-unexpected-status-code'], $defaults['generate-error-exceptions']);

        // The console historically treats an unspecified 'reference' as true.
        return array_merge($defaults, [
            'reference' => true,
        ]);
    }
}
