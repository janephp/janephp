<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\SimpleTypeGuesser as BaseSimpleTypeGuesser;
use Jane\OpenApi\JsonSchema\Model\Schema;

class SimpleTypeGuesser extends BaseSimpleTypeGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof Schema)
            &&
            \in_array($object->getType(), $this->typesSupported)
            &&
            !\in_array($object->getFormat(), $this->excludeFormat)
        ;
    }
}
