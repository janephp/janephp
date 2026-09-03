<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer;

trait CheckArray
{
    public function isOnlyNumericKeys(array $array): bool
    {
        return count(array_filter($array, static fn($key): bool => is_numeric($key), ARRAY_FILTER_USE_KEY)) === count($array);
    }
}