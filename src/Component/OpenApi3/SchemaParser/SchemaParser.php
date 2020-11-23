<?php

namespace Jane\Component\OpenApi3\SchemaParser;

use Jane\Component\OpenApi3\JsonSchema\Model\OpenApi;
use Jane\Component\OpenApiCommon\SchemaParser\SchemaParser as CommonSchemaParser;

/**
 * @method OpenApi parseSchema(string $openApiSpecPath)
 * @method OpenApi denormalize($openApiSpecData, $openApiSpecPath)
 */
class SchemaParser extends CommonSchemaParser
{
    protected const OPEN_API_MODEL = OpenApi::class;
    protected const OPEN_API_VERSION_MAJOR = '3';

    protected function validSchema($openApiSpecData): bool
    {
        return \is_array($openApiSpecData) && \array_key_exists('openapi', $openApiSpecData) && version_compare($openApiSpecData['openapi'], '3.0.0', '>=');
    }
}
