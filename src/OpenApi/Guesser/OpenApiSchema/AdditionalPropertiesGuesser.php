<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\Guesser\JsonSchema\AdditionalPropertiesGuesser as BaseAdditionalPropertiesGuesser;
use Jane\OpenApi\Model\Schema;

class AdditionalPropertiesGuesser extends BaseAdditionalPropertiesGuesser
{
    /**
     * {@inheritDoc}
     */
    public function supportObject($object)
    {
        if (!($object instanceof Schema)) {
            return false;
        }

        if ($object->getType() !== 'object') {
            return false;
        }

        if ($object->getAdditionalProperties() !== true && !is_object($object->getAdditionalProperties())) {
            return false;
        }

        return true;
    }

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return Schema::class;
    }
}
