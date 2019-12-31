<?php

namespace Jane\OpenApi\SchemaParser;

use Jane\OpenApi\JsonSchema\Model\OpenApi;
use Jane\OpenApiCommon\SchemaParser\SchemaParser as CommonSchemaParser;

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
        return $openApiSpecData instanceof \stdClass && property_exists($openApiSpecData, 'openapi') && version_compare($openApiSpecData->openapi, '3.0.0', '>=');
    }
}
