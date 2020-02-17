<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\ReferenceGuesser as BaseReferenceGuesser;
use Jane\OpenApi2\JsonSchema\Model\Schema;

class ReferenceGuesser extends BaseReferenceGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
