<?php

declare(strict_types=1);

namespace Jane\Component\OpenApi3\Guesser\OpenApiSchema;

use Jane\Component\OpenApi3\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\AbstractXOfReferenceGuesser;

/**
 * OpenAPI 3.0 anyOf reference guesser.
 */
class AnyOfReferenceGuesser extends AbstractXOfReferenceGuesser
{
    protected function getUnionName(): string
    {
        return 'anyOf';
    }

    protected function requiresReferenceElement(): bool
    {
        return false;
    }

    protected function getUnionElements($object): ?array
    {
        return $object instanceof Schema && \is_array($object->anyOf ?? null) ? ($object->anyOf ?? null) : null;
    }
}
