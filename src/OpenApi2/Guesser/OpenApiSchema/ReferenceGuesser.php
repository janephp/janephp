<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\OpenApi2\Model\Schema;

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
