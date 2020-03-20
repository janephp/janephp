<?php

namespace Jane\OpenApi3\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\AdditionalPropertiesGuesser as BaseAdditionalPropertiesGuesser;
use Jane\OpenApi3\JsonSchema\Model\Schema;

class AdditionalPropertiesGuesser extends BaseAdditionalPropertiesGuesser
{
    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
