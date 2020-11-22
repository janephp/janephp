<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\JsonSchema\ArrayGuesser as BaseArrayGuesser;

class ArrayGuesser extends BaseArrayGuesser
{
    use SchemaClassTrait;

    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return ($object instanceof $class) && 'array' === $object->getType();
    }
}
