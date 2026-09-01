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

        if (($left->type ?? null) !== null && ($right->type ?? null) !== null && ($left->type ?? null) !== ($right->type ?? null)) {
            throw new \RuntimeException('Both types are defined and different, merge is not possible');
        }

        if (null === ($right->type ?? null) && null !== ($left->type ?? null)) {
            $merged->type = $left->type;
        }

        $merged->properties = $this->arrayMerge($left->properties ?? null, $right->properties ?? null);
        $merged->required = $this->arrayUnique($this->arrayMerge($left->required ?? null, $right->required ?? null));

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
