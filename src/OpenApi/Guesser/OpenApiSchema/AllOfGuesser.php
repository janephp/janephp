<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\OpenApiCommon\Guesser\OpenApiSchema\AllOfGuesser as CommonAllOfGuesser;
use Jane\OpenApi\JsonSchema\Model\Schema;

class AllOfGuesser extends CommonAllOfGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
