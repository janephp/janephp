<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\OpenApiCommon\Guesser\OpenApiSchema\ArrayGuesser as CommonArrayGuesser;
use Jane\OpenApi\JsonSchema\Model\Schema;

class ArrayGuesser extends CommonArrayGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
