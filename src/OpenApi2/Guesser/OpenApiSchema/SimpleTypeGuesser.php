<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\SimpleTypeGuesser as BaseSimpleTypeGuesser;
use Jane\OpenApi2\JsonSchema\Model\Schema;

class SimpleTypeGuesser extends BaseSimpleTypeGuesser
{
    protected $typesSupported = [
        'boolean',
        'integer',
        'number',
        'string',
    ];

    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
