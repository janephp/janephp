<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\SimpleTypeGuesser as BaseSimpleTypeGuesser;
use Jane\OpenApi\JsonSchema\Model\Schema;

class SimpleTypeGuesser extends BaseSimpleTypeGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
