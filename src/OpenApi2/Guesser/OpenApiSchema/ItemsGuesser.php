<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\ItemsGuesser as BaseItemsGuesser;
use Jane\OpenApi2\Model\Schema;

class ItemsGuesser extends BaseItemsGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
