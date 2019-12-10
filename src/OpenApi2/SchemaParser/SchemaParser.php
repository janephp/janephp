<?php

namespace Jane\OpenApi2\SchemaParser;

use Jane\OpenApi2\Model\OpenApi;
use Jane\OpenApiCommon\SchemaParser\SchemaParser as BaseSchemaParser;

/**
 * @method OpenApi parseSchema(string $openApiSpecPath)
 * @method OpenApi denormalize($openApiSpecData, $openApiSpecPath)
 */
class SchemaParser extends BaseSchemaParser
{
    protected const OPEN_API_MODEL = OpenApi::class;
    protected const OPEN_API_VERSION_MAJOR = '2';

    protected function validSchema($openApiSpecData): bool
    {
        return $openApiSpecData instanceof \stdClass && property_exists($openApiSpecData, 'swagger') && version_compare($openApiSpecData->swagger, '2.0', '>=') && version_compare($openApiSpecData->swagger, '3.0', '<');
    }
}
