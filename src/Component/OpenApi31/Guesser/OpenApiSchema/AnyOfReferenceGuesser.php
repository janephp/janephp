<?php

declare(strict_types=1);

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\OpenApi31\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\AbstractXOfReferenceGuesser;

/**
 * OpenAPI 3.1 anyOf reference guesser (allOf-wrapped references included).
 */
class AnyOfReferenceGuesser extends AbstractXOfReferenceGuesser
{
    protected function getUnionName(): string
    {
        return 'anyOf';
    }

    protected function supportsWrappedReferences(): bool
    {
        return true;
    }

    protected function hasUnionContent($schema): bool
    {
        return null !== ($schema->type ?? null)
            || (\is_array($schema->allOf) && [] !== $schema->allOf)
            || (\is_array($schema->anyOf ?? null) && [] !== ($schema->anyOf ?? null));
    }

    protected function getUnionElements($object): ?array
    {
        return $object instanceof Schema && \is_array($object->anyOf ?? null) ? ($object->anyOf ?? null) : null;
    }
}
