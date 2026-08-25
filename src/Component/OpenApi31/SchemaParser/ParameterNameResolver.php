<?php

namespace Jane\Component\OpenApi31\SchemaParser;

/**
 * Resolves parameter names from the keys of map-shaped `parameters` blocks.
 *
 * The OpenAPI specification describes operation and path parameters as an
 * array of Parameter Objects, each one carrying its own `name` member. For
 * better readability, a map keyed by parameter name is also accepted, the
 * same way object properties are handled elsewhere. As those keys cannot be
 * represented by the generated OpenApi models (`parameters` is denormalized
 * as a plain list), every string key is copied into the `name` member of its
 * associated parameter before the document reaches the denormalizer. An
 * explicit `name` always takes precedence over the key.
 */
final class ParameterNameResolver
{
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
     * @param array<mixed> $document
     *
     * @return array<mixed>
     */
    public static function resolve(array $document): array
    {
        if (!isset($document['paths']) || !\is_array($document['paths'])) {
            return $document;
        }

        foreach ($document['paths'] as &$pathItem) {
            if (!\is_array($pathItem)) {
                continue;
            }

            if (isset($pathItem['parameters']) && \is_array($pathItem['parameters'])) {
                self::resolveParameterNames($pathItem['parameters']);
            }

            foreach (self::HTTP_METHODS as $method) {
                if (isset($pathItem[$method]['parameters']) && \is_array($pathItem[$method]['parameters'])) {
                    self::resolveParameterNames($pathItem[$method]['parameters']);
                }
            }
        }
        unset($pathItem);

        return $document;
    }

    /**
     * @param array<mixed> $parameters
     */
    private static function resolveParameterNames(array &$parameters): void
    {
        foreach ($parameters as $key => &$parameter) {
            if (!\is_string($key) || !\is_array($parameter) || isset($parameter['$ref']) || isset($parameter['name'])) {
                continue;
            }

            $parameter['name'] = $key;
        }
        unset($parameter);
    }
}
