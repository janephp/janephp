<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\Guesser\JsonSchema\ItemsGuesser as BaseItemsGuesser;
use Jane\OpenApi\Model\Schema;

class ItemsGuesser extends BaseItemsGuesser
{
    /**
     * {@inheritDoc}
     */
    public function supportObject($object)
    {
        return (
            ($object instanceof Schema)
            && (
                $object->getItems() instanceof Schema
                ||
                (
                    is_array($object->getItems())
                    &&
                    count($object->getItems()) > 0
                )
            )
        );
    }
}
