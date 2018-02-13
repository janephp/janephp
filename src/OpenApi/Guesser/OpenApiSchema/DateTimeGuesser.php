<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\DateTimeGuesser as BaseDateTimeGuesser;
use Jane\OpenApi\JsonSchema\Version3\Model\Schema;

class DateTimeGuesser extends BaseDateTimeGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof Schema) && 'string' === $object->getType() && 'date-time' === $object->getFormat();
    }
}
