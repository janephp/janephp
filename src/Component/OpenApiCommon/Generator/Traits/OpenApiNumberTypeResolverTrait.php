<?php

namespace Jane\Component\OpenApiCommon\Generator\Traits;

trait OpenApiNumberTypeResolverTrait
{
    private function isNumberFloat(?string $format, mixed $default, ?float $minimum, ?float $maximum, ?float $multipleOf, ?array $enum): bool
    {
        if (\in_array($format, ['float', 'double'], true)) {
            return true;
        }

        if ($this->isFloatLikeNumeric($default)) {
            return true;
        }

        if ($this->isFloatLikeNumeric($minimum)) {
            return true;
        }

        if ($this->isFloatLikeNumeric($maximum)) {
            return true;
        }

        if ($this->isFloatLikeNumeric($multipleOf)) {
            return true;
        }

        foreach ($enum ?? [] as $enumValue) {
            if ($this->isFloatLikeNumeric($enumValue)) {
                return true;
            }
        }

        return false;
    }

    private function isFloatLikeNumeric(mixed $value): bool
    {
        if (!is_numeric($value)) {
            return false;
        }

        return (float) $value != (int) $value;
    }
}
