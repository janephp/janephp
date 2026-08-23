<?php

namespace Jane\Component\OpenApi3\SchemaParser;

/**
 * Detects non-body parameters whose `schema.type` cannot be mapped to a PHP
 * type by the NonBodyParameterGenerator.
 *
 * OpenAPI 3.0.x only allows a fixed set of types for such parameters: feeding
 * anything else (or omitting `type` without providing an `enum`) used to make
 * generation crash with an opaque error deep inside the generator instead of
 * a readable message pointing at the offending parameter.
 */
final class NonBodyParameterTypeValidator
{
    /** @var array<string> */
    private const SUPPORTED_TYPES = [
        'string',
        'number',
        'boolean',
        'integer',
        'array',
        'object',
        'file',
    ];

    /** @var array<string> */
    private const HTTP_METHODS = [
        'get',
        'put',
        'post',
        'delete',
        'options',
        'head',
        'patch',
        'trace',
    ];

    /**
     * Returns one human readable error per invalid non-body parameter, each
     * pointing at the offending location as a JSON pointer (RFC 6901).
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

            $pathPointer = '/paths/' . self::escapePointerToken((string) $path);

            if (isset($pathItem['parameters']) && \is_array($pathItem['parameters'])) {
                foreach ($pathItem['parameters'] as $index => $parameter) {
                    self::validateParameter($parameter, $pathPointer . '/parameters/' . $index, $errors);
                }
            }

            foreach (self::HTTP_METHODS as $method) {
                if (!isset($pathItem[$method]['parameters']) || !\is_array($pathItem[$method]['parameters'])) {
                    continue;
                }

                foreach ($pathItem[$method]['parameters'] as $index => $parameter) {
                    self::validateParameter($parameter, $pathPointer . '/' . $method . '/parameters/' . $index, $errors);
                }
            }
        }

        if (isset($document['components']['parameters']) && \is_array($document['components']['parameters'])) {
            foreach ($document['components']['parameters'] as $name => $parameter) {
                self::validateParameter($parameter, '/components/parameters/' . self::escapePointerToken((string) $name), $errors);
            }
        }

        return $errors;
    }

    /**
     * @param array<string> $errors
     */
    private static function validateParameter($parameter, string $pointer, array &$errors): void
    {
        if (!\is_array($parameter) || isset($parameter['$ref']) || isset($parameter['content'])) {
            return;
        }

        $schema = $parameter['schema'] ?? null;

        if (!\is_array($schema) || isset($schema['$ref'])) {
            return;
        }

        // anyOf parameters are short-circuited by the generator, they never
        // reach a single PHP type mapping
        if (\array_key_exists('anyOf', $schema)) {
            return;
        }

        $type = $schema['type'] ?? null;
        $typePointer = $pointer . '/schema/type';

        if (\is_string($type)) {
            if (!\in_array($type, self::SUPPORTED_TYPES, true)) {
                $errors[] = \sprintf(
                    '`type` "%s" is not supported for non-body parameters, expected one of "string", "number", "boolean", "integer", "array", "object" or "file" at "%s".',
                    $type,
                    $typePointer
                );
            }

            return;
        }

        if (null !== $type) {
            // type arrays are already reported by TypeArrayValidator
            if (\is_array($type) && array_is_list($type)) {
                return;
            }

            $errors[] = \sprintf(
                '`type` %s is not supported for non-body parameters, expected one of "string", "number", "boolean", "integer", "array", "object" or "file" at "%s".',
                \gettype($type),
                $typePointer
            );

            return;
        }

        $enum = $schema['enum'] ?? null;

        if (!\is_array($enum) || [] === $enum) {
            $errors[] = \sprintf(
                'Missing `type` for non-body parameter, expected one of "string", "number", "boolean", "integer", "array", "object" or "file", or an `enum` at "%s".',
                $pointer . '/schema'
            );
        }
    }

    private static function escapePointerToken(string $token): string
    {
        return str_replace(['~', '/'], ['~0', '~1'], $token);
    }
}
