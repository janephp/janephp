<?php

namespace Jane\OpenApi3\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\ReferenceGuesser as BaseReferenceGuesser;
use Jane\OpenApi3\JsonSchema\Model\Schema;

class ReferenceGuesser extends BaseReferenceGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
