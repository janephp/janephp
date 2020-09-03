<?php

namespace Jane\JsonSchemaRuntime\Normalizer;

/**
 * @deprecated Deprecated since v6.2.0, will removed in v7.0.0 and is already replaced by generated Runtime
 */
trait CheckArray
{
    public function isOnlyNumericKeys(array $array): bool
    {
        return \count(array_filter($array, function ($key) { return is_numeric($key); }, ARRAY_FILTER_USE_KEY)) === \count($array);
    }
}
