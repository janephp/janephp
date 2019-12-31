<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\ReferenceGuesser as BaseReferenceGuesser;
use Jane\OpenApi\JsonSchema\Model\Schema;

class ReferenceGuesser extends BaseReferenceGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
