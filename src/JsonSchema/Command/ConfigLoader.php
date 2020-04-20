<?php

namespace Jane\JsonSchema\Command;

use Symfony\Component\OptionsResolver\OptionsResolver;

trait ConfigLoader
{
    public function loadConfig(string $path): array
    {
        if (!file_exists($path)) {
            throw new \RuntimeException(sprintf('Config file %s does not exist', $path));
        }

        $options = require $path;

        if (!\is_array($options)) {
            throw new \RuntimeException(sprintf('Invalid config file specified or invalid return type in file %s', $path));
        }

        return $this->resolveConfiguration($options);
    }

    private function resolveConfiguration(array $options = [])
    {
        $optionsResolver = new OptionsResolver();
        $optionsResolver->setDefaults([
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
        ]);

        if (\array_key_exists('json-schema-file', $options)) {
            $optionsResolver->setRequired([
                'json-schema-file',
                'root-class',
                'namespace',
                'directory',
            ]);
        } else {
            $optionsResolver->setRequired([
                'mapping',
            ]);
        }

        return $optionsResolver->resolve($options);
    }
}
