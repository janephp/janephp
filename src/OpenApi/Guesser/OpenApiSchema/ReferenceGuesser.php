<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\OpenApi\JsonSchema\Model\Schema;

class ReferenceGuesser extends \Jane\JsonSchema\Guesser\ReferenceGuesser
{
    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return Schema::class;
    }
}
