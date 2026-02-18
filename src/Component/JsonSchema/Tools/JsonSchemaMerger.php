<?php

namespace Jane\Component\JsonSchema\Tools;

use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;

class JsonSchemaMerger
{
    /**
     * Create a new JsonSchema based on two merged schema.
     */
    public function merge(JsonSchema $left, JsonSchema $right): JsonSchema
    {
        $merged = clone $right;

        if (null !== $left->getType() && null !== $right->getType() && $left->getType() !== $right->getType()) {
            throw new \RuntimeException('Both types are defined and different, merge is not possible');
        }

        if (null === $right->getType() && null !== $left->getType()) {
            $merged->setType($left->getType());
        }

        $merged->setProperties($this->arrayMerge($left->getProperties(), $right->getProperties()));
        $merged->setRequired($this->arrayUnique($this->arrayMerge($left->getRequired(), $right->getRequired())));

        return $merged;
    }

    private function arrayMerge($left, $right)
    {
        if (!\is_array($left)) {
            return $right;
        }

        if (!\is_array($right)) {
            return $left;
        }

        return array_merge($left, $right);
    }

    private function arrayUnique($array)
    {
        if (!\is_array($array)) {
            return $array;
        }

        return array_unique($array);
    }
}
