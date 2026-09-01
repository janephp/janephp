<?php

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\AllOfGuesser as BaseAllOfGuesser;

class AllOfGuesser extends BaseAllOfGuesser
{
    protected function resolveAdditionalProperties($object, string $reference): array
    {
        if (null === ($object->additionalProperties ?? null)
            && (!property_exists($object, 'patternProperties') || null === ($object->patternProperties ?? null))
        ) {
            return [
                '.*' => [
                    'object' => null,
                    'reference' => $reference . '/additionalProperties',
                ],
            ];
        }

        return parent::resolveAdditionalProperties($object, $reference);
    }
}
