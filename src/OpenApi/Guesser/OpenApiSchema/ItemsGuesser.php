<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\ItemsGuesser as BaseItemsGuesser;
use Jane\OpenApi\JsonSchema\Model\Schema;

class ItemsGuesser extends BaseItemsGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
