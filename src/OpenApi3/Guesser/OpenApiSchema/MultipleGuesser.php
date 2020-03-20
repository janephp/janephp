<?php

namespace Jane\OpenApi3\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\MultipleGuesser as BaseMultipleGuesser;
use Jane\OpenApi3\JsonSchema\Model\Schema;

class MultipleGuesser extends BaseMultipleGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
