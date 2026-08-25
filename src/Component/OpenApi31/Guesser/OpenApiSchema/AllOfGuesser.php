<?php

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\AllOfGuesser as BaseAllOfGuesser;

class AllOfGuesser extends BaseAllOfGuesser
{
    protected function resolveAdditionalProperties($object)
    {
        $additionalProperties = parent::resolveAdditionalProperties($object);

        if (null !== $additionalProperties) {
            return $additionalProperties;
        }

        // JSON Schema 2020-12 treats an absent additionalProperties as true, but a
        // patternProperties-only schema must keep its pattern-specific extension typing
        if (method_exists($object, 'getPatternProperties') && null !== $object->getPatternProperties()) {
            return null;
        }

        return true;
    }
}
