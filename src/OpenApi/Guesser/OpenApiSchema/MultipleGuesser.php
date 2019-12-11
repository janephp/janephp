<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\MultipleGuesser as BaseMultipleGuesser;
use Jane\OpenApi\JsonSchema\Model\Schema;

class MultipleGuesser extends BaseMultipleGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
