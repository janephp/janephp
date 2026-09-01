<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

/**
 * Nullability detection for schema objects of every supported JSON Schema /
 * OpenAPI dialect, without depending on version specific model classes.
 */
trait CheckNullableTrait
{
    public function isNullable($schema): bool
    {
        if (!\is_object($schema)) {
            return false;
        }

        // JSON Schema 2020-12 (and the OpenAPI 3.1 model extending it): the
        // "null" keyword is part of the (possibly union) type.
        if (property_exists($schema, 'type')) {
            $type = ($schema->type ?? null);

            if (\is_array($type) ? \in_array('null', $type, true) : 'null' === $type) {
                return true;
            }
        }

        // OpenAPI 2.0: boolean vendor extension "x-nullable".
        if (method_exists($schema, 'offsetExists') && method_exists($schema, 'offsetGet')
            && $schema->offsetExists('x-nullable') && \is_bool($schema->offsetGet('x-nullable'))) {
            return $schema->offsetGet('x-nullable');
        }

        // OpenAPI 3.0: "nullable: true" keyword.
        if (property_exists($schema, 'nullable')) {
            return ($schema->nullable ?? null) === true;
        }

        return false;
    }
}
