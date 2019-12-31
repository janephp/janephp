<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\DateTimeGuesser as BaseDateTimeGuesser;
use Jane\OpenApi\JsonSchema\Model\Schema;

class DateTimeGuesser extends BaseDateTimeGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
