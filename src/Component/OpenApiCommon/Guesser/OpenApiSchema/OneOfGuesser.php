<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\JsonSchema\OneOfGuesser as BaseOneOfGuesser;

class OneOfGuesser extends BaseOneOfGuesser
{
    use SchemaClassTrait;

    public function supportObject($object): bool
    {
        return ($object instanceof $this->schemaClass) && 'object' !== $object->getType() && \is_array($object->getOneOf()) && \count($object->getOneOf()) > 0;
    }
}
