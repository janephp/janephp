<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\ItemsGuesser as BaseItemsGuesser;
use Jane\OpenApi2\Model\Schema;

class ItemsGuesser extends BaseItemsGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return
            ($object instanceof Schema)
            && (
                $object->getItems() instanceof Schema
                ||
                (
                    \is_array($object->getItems())
                    &&
                    \count($object->getItems()) > 0
                )
            )
        ;
    }
}
