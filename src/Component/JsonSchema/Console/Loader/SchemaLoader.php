<?php

namespace Jane\Component\JsonSchema\Console\Loader;

use Jane\Component\JsonSchema\Registry\Schema;
use Jane\Component\JsonSchema\Registry\SchemaInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SchemaLoader implements SchemaLoaderInterface
{
    public function resolve(string $schema, array $options = []): SchemaInterface
    {
        $optionsResolver = new OptionsResolver();

        $optionsResolver->setDefined($this->getDefinedOptions());
        $optionsResolver->setRequired($this->getRequiredOptions());
        $options = $optionsResolver->resolve($options);

        return $this->newSchema($schema, $options);
    }

    protected function newSchema(string $schema, array $options): SchemaInterface
    {
        return new Schema($schema, $options['namespace'], $options['directory'], $options['root-class'] ?? '');
    }

    protected function getDefinedOptions(): array
    {
        return [
            'json-schema-file',
            'reference',
            'date-format',
            'full-date-format',
            'date-prefer-interface',
            'date-input-format',
            'strict',
            'use-fixer',
            'fixer-config-file',
            'clean-generated',
            'use-cacheable-supports-method',
            'skip-null-values',
            'skip-required-fields',
            'custom-string-format-mapping',
            'validation',
            'include-null-value',
        ];
    }

    protected function getRequiredOptions(): array
    {
        return [
            'root-class',
            'namespace',
            'directory',
        ];
    }
}
