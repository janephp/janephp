<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\Guesser\JsonSchema\AllOfGuesser as BaseAllOfGuesser;
use Jane\OpenApi\Model\Schema;

class AllOfGuesser extends BaseAllOfGuesser
{
    /**
     * {@inheritDoc}
     */
    public function supportObject($object)
    {
        return (($object instanceof Schema) && is_array($object->getAllOf()) && count($object->getAllOf()) > 0);
    }

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return Schema::class;
    }
}
