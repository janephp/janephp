<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\OpenApiCommon\Guesser\OpenApiSchema\ArrayGuesser as CommonArrayGuesser;
use Jane\OpenApi2\Model\Schema;

class ArrayGuesser extends CommonArrayGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
