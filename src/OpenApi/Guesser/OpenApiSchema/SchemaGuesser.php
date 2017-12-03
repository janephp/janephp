<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\ObjectGuesser;
use Jane\OpenApi\Model\Schema;

class SchemaGuesser extends ObjectGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof Schema) && ('object' === $object->getType() || null === $object->getType()) && null !== $object->getProperties();
    }

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return Schema::class;
    }
}
