<?php

namespace Jane\Component\JsonSchema\Tests\Expected\DeepObject\Runtime\Normalizer;

trait CheckArray
{
    public function isOnlyNumericKeys(array $array): bool
    {
        return count(array_filter($array, static fn($key): bool => is_numeric($key), ARRAY_FILTER_USE_KEY)) === count($array);
    }
}