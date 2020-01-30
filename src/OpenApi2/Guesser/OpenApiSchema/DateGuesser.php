<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\DateGuesser as BaseDateGuesser;
use Jane\OpenApi2\Model\Schema;

class DateGuesser extends BaseDateGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
