<?php

namespace Jane\OpenApi3\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\ItemsGuesser as BaseItemsGuesser;
use Jane\OpenApi3\JsonSchema\Model\Schema;

class ItemsGuesser extends BaseItemsGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
