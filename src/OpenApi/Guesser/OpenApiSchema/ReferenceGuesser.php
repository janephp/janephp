<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\OpenApi\Model\Schema;

class ReferenceGuesser extends \Jane\Guesser\ReferenceGuesser
{
    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return Schema::class;
    }
}
