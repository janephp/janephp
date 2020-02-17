<?php

namespace Jane\OpenApi2\SchemaParser;

use Jane\OpenApi2\JsonSchema\Model\OpenApi;
use Jane\OpenApiCommon\SchemaParser\SchemaParser as CommonSchemaParser;

/**
 * @method OpenApi parseSchema(string $openApiSpecPath)
 * @method OpenApi denormalize($openApiSpecData, $openApiSpecPath)
 */
class SchemaParser extends CommonSchemaParser
{
    protected const OPEN_API_MODEL = OpenApi::class;
    protected const OPEN_API_VERSION_MAJOR = '2';

    protected function validSchema($openApiSpecData): bool
    {
        return \is_array($openApiSpecData) && \array_key_exists('swagger', $openApiSpecData) && version_compare($openApiSpecData['swagger'], '2.0', '>=') && version_compare($openApiSpecData['swagger'], '3.0', '<');
    }
}
