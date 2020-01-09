<?php

namespace Jane\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\ArrayGuesser as BaseArrayGuesser;

class ArrayGuesser extends BaseArrayGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return ($object instanceof $class) && 'array' === $object->getType();
    }
}
