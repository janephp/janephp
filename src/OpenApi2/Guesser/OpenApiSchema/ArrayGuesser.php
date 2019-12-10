<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\ArrayGuesser as BaseArrayGuesser;
use Jane\OpenApi2\Model\Schema;

class ArrayGuesser extends BaseArrayGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof Schema) && 'array' === $object->getType();
    }

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return Schema::class;
    }
}
