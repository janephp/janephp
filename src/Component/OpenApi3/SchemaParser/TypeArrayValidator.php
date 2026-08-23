<?php

namespace Jane\Component\OpenApi3\SchemaParser;

/**
 * Detects JSON Schema style type arrays (`type: [string, 'null']`) in a raw
 * OpenAPI document.
 *
 * Those arrays are only valid since OpenAPI 3.1: in a 3.0.x document `type`
 * must be a single string, and denormalizing such a document with the
 * OpenApi3 models would otherwise fail with an opaque TypeError.
 */
final class TypeArrayValidator
{
    /** @var array<string> */
    private const DATA_KEYS = [
        'const',
        'default',
        'enum',
        'example',
        'examples',
    ];

    /**
     * Keys whose children are property names instead of schema keywords: any
     * collision between a property name and the keys above must still be
     * traversed as a schema.
     *
     * @var array<string>
     */
    private const PROPERTY_MAP_KEYS = [
        'properties',
        'patternProperties',
    ];

    /**
     * Returns one human readable error per `type` array found, each pointing
     * at the offending location as a JSON pointer (RFC 6901).
     *
     * @param array<mixed> $document
     *
     * @return array<string>
     */
    public static function validate(array $document): array
    {
        $errors = [];

        self::walk($document, '', $errors);

        return $errors;
    }

    /**
     * @param array<mixed>  $node
     * @param array<string> $errors
     */
    private static function walk(array $node, string $pointer, array &$errors, bool $keysArePropertyNames = false): void
    {
        foreach ($node as $key => $value) {
            if (!$keysArePropertyNames && \is_string($key)) {
                if (str_starts_with($key, 'x-')) {
                    // vendor extensions may contain arbitrary data, not schemas
                    continue;
                }

                // plain data keys hold values, not sub schemas
                if (\in_array($key, self::DATA_KEYS, true)) {
                    continue;
                }
            }

            $childPointer = $pointer . '/' . str_replace(['~', '/'], ['~0', '~1'], \is_int($key) ? (string) $key : $key);

            // JSON objects are decoded as associative arrays: only lists are
            // actual type arrays, everything else is a nested schema
            // (e.g. a property named "type" holding its own schema object).
            if ('type' === $key && \is_array($value) && array_is_list($value)) {
                $types = implode(', ', array_map(
                    static fn ($type): string => \is_string($type) ? \sprintf('"%s"', $type) : \gettype($type),
                    $value
                ));

                $errors[] = \sprintf(
                    '`type` must be a string in OpenAPI 3.0.x, array given (%s) at "%s". Type arrays are an OpenAPI 3.1 feature: generate your client with jane-php/open-api-3-1 instead, or rewrite this schema using `nullable: true` / `oneOf`.',
                    $types,
                    $childPointer
                );

                continue;
            }

            if (\is_array($value)) {
                self::walk(
                    $value,
                    $childPointer,
                    $errors,
                    \is_string($key) && \in_array($key, self::PROPERTY_MAP_KEYS, true)
                );
            }
        }
    }
}
