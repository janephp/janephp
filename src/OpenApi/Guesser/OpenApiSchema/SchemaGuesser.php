<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\Guesser\JsonSchema\ObjectGuesser;
use Jane\OpenApi\Model\Schema;

class SchemaGuesser extends ObjectGuesser
{
    /**
     * {@inheritDoc}
     */
    public function supportObject($object)
    {
        return (($object instanceof Schema) && ($object->getType() === 'object' || $object->getType() === null) && $object->getProperties() !== null);
    }

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return Schema::class;
    }
}
