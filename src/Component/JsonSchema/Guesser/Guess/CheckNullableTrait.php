<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;

trait CheckNullableTrait
{
    public function isNullable($schema): bool
    {
        if (\get_class($schema) === JsonSchema::class) {
            return \is_array($schema->type) ? \in_array('null', $schema->type) : 'null' === $schema->type;
        }
        if (\get_class($schema) === 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Schema') {
            return isset($schema['x-nullable']) && \is_bool($schema['x-nullable']) && $schema['x-nullable'];
        }
        if (\get_class($schema) === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema') {
            return property_exists($schema, 'nullable') && $schema->nullable === true;
        }
        if (\get_class($schema) === 'Jane\\Component\\OpenApi31\\JsonSchema\\Model\\Schema') {
            return \is_array($schema->type) ? \in_array('null', $schema->type) : 'null' === $schema->type;
        }

        return false;
    }
}
