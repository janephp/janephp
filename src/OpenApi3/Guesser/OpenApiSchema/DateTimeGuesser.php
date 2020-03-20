<?php

namespace Jane\OpenApi3\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\DateTimeGuesser as BaseDateTimeGuesser;
use Jane\OpenApi3\JsonSchema\Model\Schema;

class DateTimeGuesser extends BaseDateTimeGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
