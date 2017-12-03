<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\AdditionalPropertiesGuesser as BaseAdditionalPropertiesGuesser;
use Jane\OpenApi\Model\Schema;

class AdditionalPropertiesGuesser extends BaseAdditionalPropertiesGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        if (!($object instanceof Schema)) {
            return false;
        }

        if ('object' !== $object->getType()) {
            return false;
        }

        if (true !== $object->getAdditionalProperties() && !is_object($object->getAdditionalProperties())) {
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
