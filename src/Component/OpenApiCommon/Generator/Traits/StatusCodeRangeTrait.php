<?php

namespace Jane\Component\OpenApiCommon\Generator\Traits;

trait StatusCodeRangeTrait
{
    private function isStatusCodeRange(int|string $status): bool
    {
        return \is_string($status) && 1 === preg_match('/^[1-5]XX$/', $status);
    }

    /**
     * @return array{int, int}
     */
    private function statusCodeRangeBounds(string $status): array
    {
        $hundreds = ((int) $status[0]) * 100;

        return [$hundreds, $hundreds + 99];
    }
}
