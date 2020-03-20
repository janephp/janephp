<?php

namespace Jane\OpenApi3\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\SimpleTypeGuesser as BaseSimpleTypeGuesser;
use Jane\OpenApi3\JsonSchema\Model\Schema;

class SimpleTypeGuesser extends BaseSimpleTypeGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
