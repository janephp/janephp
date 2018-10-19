<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\AllOfGuesser as BaseAllOfGuesser;
use Jane\OpenApi\JsonSchema\Version3\Model\Schema;

class AllOfGuesser extends BaseAllOfGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof Schema) && \is_array($object->getAllOf()) && \count($object->getAllOf()) > 0;
    }

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return Schema::class;
    }
}
