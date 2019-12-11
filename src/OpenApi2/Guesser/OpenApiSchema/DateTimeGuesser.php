<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\DateTimeGuesser as BaseDateTimeGuesser;
use Jane\OpenApi2\Model\Schema;

class DateTimeGuesser extends BaseDateTimeGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
