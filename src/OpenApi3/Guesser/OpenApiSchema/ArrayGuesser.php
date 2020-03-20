<?php

namespace Jane\OpenApi3\Guesser\OpenApiSchema;

use Jane\OpenApiCommon\Guesser\OpenApiSchema\ArrayGuesser as CommonArrayGuesser;
use Jane\OpenApi3\JsonSchema\Model\Schema;

class ArrayGuesser extends CommonArrayGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
