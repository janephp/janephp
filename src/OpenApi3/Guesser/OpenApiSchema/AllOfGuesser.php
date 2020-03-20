<?php

namespace Jane\OpenApi3\Guesser\OpenApiSchema;

use Jane\OpenApiCommon\Guesser\OpenApiSchema\AllOfGuesser as CommonAllOfGuesser;
use Jane\OpenApi3\JsonSchema\Model\Schema;

class AllOfGuesser extends CommonAllOfGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
