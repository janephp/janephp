<?php

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\AllOfGuesser as BaseAllOfGuesser;

class AllOfGuesser extends BaseAllOfGuesser
{
    protected function resolveAdditionalProperties($object, string $reference): array
    {
        if (null === $object->getAdditionalProperties()
            && (!method_exists($object, 'getPatternProperties') || null === $object->getPatternProperties())
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
