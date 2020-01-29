<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\DateGuesser as BaseDateGuesser;
use Jane\OpenApi\JsonSchema\Model\Schema;

class DateGuesser extends BaseDateGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
