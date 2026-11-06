<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchema\Generator;

/**
 * Validation policies available for the generated Normalizers.
 *
 * The "validation" generation option accepts only `false` or one of these
 * cases:
 *
 * - `false` (default): no validation at all;
 * - NormalizeOnly: the generated `normalize()` calls the validator
 *   (useful for API clients which validate what they send);
 * - DenormalizeOnly: the generated `denormalize()` calls the validator;
 * - Both: both directions, the historical behavior of the boolean `true`.
 */
enum ValidationOption
{
    /** The validator runs in the generated `normalize()` only. */
    case NormalizeOnly;

    /** The validator runs in the generated `denormalize()` only. */
    case DenormalizeOnly;

    /** The validator runs in the generated `normalize()` and `denormalize()` (historical `true`). */
    case Both;

    /** Whether the generated `normalize()` must call the generated validator. */
    public function validatesNormalization(): bool
    {
        return self::DenormalizeOnly !== $this;
    }

    /** Whether the generated `denormalize()` must call the generated validator. */
    public function validatesDenormalization(): bool
    {
        return self::NormalizeOnly !== $this;
    }

    /**
     * Convert a raw "validation" configuration value to its normalized form.
     *
     * `false` and every enum case of this class are returned unchanged. The
     * boolean `true` (deprecated) converts to {@see self::Both} and an explicit
     * `null` (deprecated) converts to `false`: those inputs go away in the next
     * major, which will accept only `false` or a `ValidationOption` case. Any
     * other value is rejected with an `\InvalidArgumentException`.
     */
    public static function fromConfig(mixed $value): false|self
    {
        if (false === $value) {
            return false;
        }

        if ($value instanceof self) {
            return $value;
        }

        if (true === $value) {
            trigger_deprecation('jane-php/json-schema', '8.2', 'Passing true to the "validation" option is deprecated, use ValidationOption::Both instead.');

            return self::Both;
        }

        if (null === $value) {
            trigger_deprecation('jane-php/json-schema', '8.2', 'Passing null to the "validation" option is deprecated, use false instead.');

            return false;
        }

        throw new \InvalidArgumentException(\sprintf('The "validation" option must be false or a ValidationOption enum case ("NormalizeOnly", "DenormalizeOnly", "Both"); "%s" given.', get_debug_type($value)));
    }
}
