<?php

namespace Jane\Component\JsonSchema\Guesser\Validator;

use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;

trait ObjectCheckTrait
{
    public function checkObject(object $object): bool
    {
        if (JsonSchema::class === ($objectClass = \get_class($object))
            || 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Schema' === $objectClass
            || 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema' === $objectClass
            || 'Jane\\Component\\OpenApi31\\JsonSchema\\Model\\Schema' === $objectClass) {
            return true;
        }

        return false;
    }

    /**
     * Whether the schema allows null values in addition to its other types.
     */
    public function isNullable(object $object): bool
    {
        if (\get_class($object) === JsonSchema::class) {
            return \is_array($object->type ?? null) ? \in_array('null', $object->type ?? null) : 'null' === ($object->type ?? null);
        }

        if (\get_class($object) === 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Schema') {
            return $object->offsetExists('x-nullable') && \is_bool($object->offsetGet('x-nullable')) && $object->offsetGet('x-nullable');
        }

        if (\get_class($object) === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema') {
            return property_exists($object, 'nullable') && ($object->nullable ?? null) ?? false;
        }

        if (\get_class($object) === 'Jane\\Component\\OpenApi31\\JsonSchema\\Model\\Schema') {
            return \is_array($object->type ?? null) ? \in_array('null', $object->type ?? null) : 'null' === ($object->type ?? null);
        }

        return false;
    }
}
