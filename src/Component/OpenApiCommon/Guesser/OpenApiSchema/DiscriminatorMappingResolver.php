<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

/**
 * Resolves Discriminator Object entries (mapping values and enum values) to
 * the class name and registry reference of the schema they target.
 *
 * Per the OpenAPI specification, a mapping value is a URI reference to a
 * schema definition. It may be:
 *
 * - a pointer into the current document, e.g. "#/components/schemas/CreatedEvent";
 * - the same pointer without its leading "#", e.g. "components/schemas/CreatedEvent";
 * - a bare schema name, e.g. "CreatedEvent", which is shorthand for
 *   "#/components/schemas/CreatedEvent".
 *
 * References are resolved against the document the discriminated schema lives
 * in (the part of its reference before the "#"), so a mapping declared on an
 * inline schema points at the same document.
 *
 * Values pointing outside the current document (external document
 * references) are passed through unresolved: the discriminator hydration step
 * simply finds no class for them, and the parent relation is silently skipped
 * for those entries.
 */
final class DiscriminatorMappingResolver
{
    private const SCHEMAS_POINTER_WITHOUT_FRAGMENT = 'components/schemas/';

    /**
     * @param string $parentReference Reference of the discriminated schema, e.g. "/path/to/openapi.json#/paths/~1events/post/..."
     * @param string $entryReference  Mapping entry, e.g. "#/components/schemas/CreatedEvent" or "CreatedEvent"
     *
     * @return array{0: string, 1: string} The child class name and the child reference, both derived from the mapping entry
     */
    public static function resolve(string $parentReference, string $entryReference): array
    {
        if (str_contains($entryReference, '://')) {
            // An external document reference: it cannot be resolved against
            // the local registry.
            return [$entryReference, $entryReference];
        }

        $origin = strstr($parentReference, '#', true) ?: $parentReference;

        if (str_starts_with($entryReference, self::SCHEMAS_POINTER_WITHOUT_FRAGMENT)) {
            // A pointer missing its leading "#".
            $entryReference = '#/' . $entryReference;
        } elseif (!str_starts_with($entryReference, '#/')) {
            // A bare schema name.
            $entryReference = '#/components/schemas/' . $entryReference;
        }

        // A pointer into the current document.
        return [str_replace('#/components/schemas/', '', $entryReference), $origin . $entryReference];
    }
}
