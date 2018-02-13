<?php

namespace Jane\OpenApi\SchemaParser;

use Jane\OpenApi\JsonSchema\Version2\Model\OpenApi as OpenApiV2;
use Jane\OpenApi\JsonSchema\Version3\Model\OpenApi;

class Converter
{
    /**
     * Transform a version2 of OpenApi to version3
     */
    public function convert(OpenApiV2 $openApiVersion2): OpenApi
    {
        $openApiVersion3 = new OpenApi();

        return $openApiVersion3;
    }
}