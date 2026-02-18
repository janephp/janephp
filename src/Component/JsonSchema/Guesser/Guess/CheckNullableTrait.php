<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;

trait CheckNullableTrait
{
    public function isNullable($schema): bool
    {
        if (\get_class($schema) === JsonSchema::class) {
            return \is_array($schema->getType()) ? !\in_array('null', $schema->getType()) : 'null' !== $schema->getType();
        }
        if (\get_class($schema) === 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Schema') {
            return $schema->offsetExists('x-nullable') && \is_bool($schema->offsetGet('x-nullable')) && $schema->offsetGet('x-nullable');
        }
        if (\get_class($schema) === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema') {
            return method_exists($schema, 'getNullable') && $schema->getNullable() === true;
        }

        return false;
    }
}
