<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\MultipleGuesser as BaseMultipleGuesser;
use Jane\OpenApi2\JsonSchema\Model\Schema;

class MultipleGuesser extends BaseMultipleGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
