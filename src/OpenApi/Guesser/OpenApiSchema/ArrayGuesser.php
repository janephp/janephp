<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\ArrayGuesser as BaseArrayGuesser;
use Jane\OpenApi\Model\Schema;

class ArrayGuesser extends BaseArrayGuesser
{
    /**
     * {@inheritDoc}
     */
    public function supportObject($object)
    {
        return (($object instanceof Schema) && $object->getType() === 'array');
    }

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return Schema::class;
    }
}
