<?php

namespace Jane\JsonSchema;

use Jane\JsonSchema\Model\JsonSchema;

class JsonSchemaMerger
{
    /**
     * Create a new JsonSchema based on two merged schema.
     *
     * @param JsonSchema $left
     * @param JsonSchema $right
     *
     * @TODO Handle more fields
     *
     * @return JsonSchema
     */
    public function merge(JsonSchema $left, JsonSchema $right)
    {
        $merged = clone $right;

        if (null !== $left->getType() && null !== $right->getType() && $left->getType() !== $right->getType()) {
            throw new \RuntimeException('Both types are defined and different, merge is not possible');
        }

        if (null === $right->getType() && null !== $left->getType()) {
            $merged->setType($left->getType());
        }

        $merged->setProperties(array_merge($left->getProperties() ?? [], $right->getProperties() ?? []));
        $merged->setRequired(array_unique(array_merge($left->getRequired() ?? [], $right->getRequired() ?? [])));

        return $merged;
    }
}
