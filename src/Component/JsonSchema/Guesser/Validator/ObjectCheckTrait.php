<?php

namespace Jane\Component\JsonSchema\Guesser\Validator;

/**
 * Recognizes schema objects the validator chain is allowed to handle, without
 * depending on the model classes of any specific OpenAPI version.
 */
trait ObjectCheckTrait
{
    public function checkObject(object $object): bool
    {
        return property_exists($object, 'type') || property_exists($object, 'properties');
    }

    /**
     * Whether the schema allows null values in addition to its other types.
     */
    public function isNullable(object $object): bool
    {
        // JSON Schema 2020-12 (and the OpenAPI 3.1 model extending it): the
        // "null" keyword is part of the (possibly union) type.
        if (property_exists($object, 'type')) {
            $type = ($object->type ?? null);

            if (\is_array($type) ? \in_array('null', $type, true) : 'null' === $type) {
                return true;
            }
        }

        // OpenAPI 2.0: boolean vendor extension "x-nullable".
        if (method_exists($object, 'offsetExists') && method_exists($object, 'offsetGet')
            && $object->offsetExists('x-nullable') && \is_bool($object->offsetGet('x-nullable'))) {
            return $object->offsetGet('x-nullable');
        }

        // OpenAPI 3.0: "nullable: true" keyword.
        if (property_exists($object, 'nullable')) {
            return ($object->nullable ?? null) ?? false;
        }

        return false;
    }
}
