<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\DateTimeGuesser as BaseDateTimeGuesser;
use Jane\OpenApi2\Model\Schema;

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
