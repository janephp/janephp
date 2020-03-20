<?php

namespace Jane\OpenApi3\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\DateGuesser as BaseDateGuesser;
use Jane\OpenApi3\JsonSchema\Model\Schema;

class DateGuesser extends BaseDateGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
