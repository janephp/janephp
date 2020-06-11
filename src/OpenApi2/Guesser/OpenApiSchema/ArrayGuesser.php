<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\OpenApi2\JsonSchema\Model\Schema;
use Jane\OpenApiCommon\Guesser\OpenApiSchema\ArrayGuesser as CommonArrayGuesser;

class ArrayGuesser extends CommonArrayGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
