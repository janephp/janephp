<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\JsonSchema\AdditionalPropertiesGuesser as BaseAdditionalPropertiesGuesser;

class AdditionalPropertiesGuesser extends BaseAdditionalPropertiesGuesser
{
    use SchemaClassTrait;

    public function supportObject($object): bool
    {
        // A `type: object` schema only carrying a oneOf is left to the oneOf guessers,
        // unless additionalProperties declares a value schema
        return parent::supportObject($object)
            && (\is_object($object->additionalProperties ?? null) || !OneOfGuesser::isObjectTypedUnion($object));
    }
}
