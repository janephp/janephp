<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\SimpleTypeGuesser as BaseSimpleTypeGuesser;
use Jane\OpenApi2\Model\Schema;

class SimpleTypeGuesser extends BaseSimpleTypeGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
