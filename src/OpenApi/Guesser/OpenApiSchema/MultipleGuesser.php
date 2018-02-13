<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\MultipleGuesser as BaseMultipleGuesser;
use Jane\OpenApi\JsonSchema\Version3\Model\Schema;

class MultipleGuesser extends BaseMultipleGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof Schema) && \is_array($object->getType());
    }
}
