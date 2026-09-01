<?php

namespace Jane\Component\OpenApi31\SchemaParser;

/**
 * Detects invalid `x-fetch-mode` usages in the document's operations.
 *
 * The extension is only supported on GET and HEAD operations (every other verb
 * is always executed eagerly) and its value must be exactly one of "lazy",
 * "eager" or "preload" (ADR 0011).
 */
final class FetchModeValidator
{
    /**
     * Returns one human readable error per invalid usage, each pointing at the
     * offending location as a JSON pointer (RFC 6901).
     *
     * @param array<mixed> $document
     *
     * @return array<string>
     */
    public static function validate(array $document): array
    {
        $errors = [];

        if (!isset($document['paths']) || !\is_array($document['paths'])) {
            return $errors;
        }

        foreach ($document['paths'] as $path => $pathItem) {
            if (!\is_array($pathItem)) {
                continue;
            }

            foreach ($pathItem as $methodKey => $operation) {
                if (!\is_array($operation) || !\array_key_exists('x-fetch-mode', $operation)) {
                    continue;
                }

                $method = strtolower((string) $methodKey);
                $pointer = '/paths/' . self::escapePointerToken((string) $path) . '/' . $method;

                if (!\in_array($method, ['get', 'head'], true)) {
                    $errors[] = \sprintf(
                        '`x-fetch-mode` is only supported on GET and HEAD operations but was found on a %s operation at "%s/x-fetch-mode". Other verbs are always executed eagerly: remove the attribute.',
                        $method,
                        $pointer
                    );

                    continue;
                }

                $value = $operation['x-fetch-mode'];

                if (!\is_string($value) || !\in_array($value, ['lazy', 'eager', 'preload'], true)) {
                    $errors[] = \sprintf(
                        '`x-fetch-mode` value must be one of "lazy", "eager" or "preload" at "%s/x-fetch-mode"%s.',
                        $pointer,
                        \is_string($value) ? \sprintf(', "%s" given', $value) : \sprintf(' (%s given)', get_debug_type($value))
                    );
                }
            }
        }

        return $errors;
    }

    private static function escapePointerToken(string $token): string
    {
        return str_replace(['~', '/'], ['~0', '~1'], $token);
    }
}
