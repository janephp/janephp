<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\JsonSchema\ArrayGuesser as BaseArrayGuesser;

class ArrayGuesser extends BaseArrayGuesser
{
    use SchemaClassTrait;

    protected ?bool $defaultAdditionalProperties = null;

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        if (!($object instanceof $class)) {
            return false;
        }

        $type = ($object->type ?? null);

        return \is_array($type) ? \in_array('array', $type, true) : 'array' === $type;
    }
}
