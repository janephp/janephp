<?php

namespace Jane\Component\JsonSchema\Guesser\Validator;

use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;

trait ObjectCheckTrait
{
    public function checkObject(object $object): bool
    {
        if (JsonSchema::class === ($objectClass = \get_class($object))
            || 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Schema' === $objectClass
            || 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema' === $objectClass) {
            return true;
        }

        return false;
    }
}
