<?php

namespace Jane\Component\OpenApiCommon\Console\Loader;

use Jane\Component\JsonSchema\Console\Loader\SchemaLoader as BaseSchemaLoader;
use Jane\Component\JsonSchema\Console\Loader\SchemaLoaderInterface;
use Jane\Component\JsonSchema\Registry\SchemaInterface;
use Jane\Component\OpenApiCommon\Registry\Schema;

class SchemaLoader extends BaseSchemaLoader implements SchemaLoaderInterface
{
    protected function newSchema(string $schema, array $options): SchemaInterface
    {
        return new Schema($schema, $options['namespace'], $options['directory']);
    }

    protected function getDefinedOptions(): array
    {
        return [
            'openapi-file',
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
            'validation',
            'validators',
            'version',
            'whitelisted-paths',
            'endpoint-generator',
            'operation-namings',
            'custom-query-resolver',
            'throw-unexpected-status-code',
            'generate-error-exceptions',
            'custom-string-format-mapping',
            'include-null-value',
            'enums-as-objects',
            'default-additional-properties',
            'allow-external-refs',
            'external-ref-allowed-hosts',
            'external-ref-follow-redirects',
            'allowed-local-ref-roots',
        ];
    }

    protected function getRequiredOptions(): array
    {
        return [
            'namespace',
            'directory',
        ];
    }
}
