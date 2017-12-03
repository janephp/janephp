<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\Guesser\JsonSchema\MultipleGuesser as BaseMultipleGuesser;
use Jane\OpenApi\Model\Schema;

class MultipleGuesser extends BaseMultipleGuesser
{
    /**
     * {@inheritDoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof Schema) && is_array($object->getType());
    }
}
