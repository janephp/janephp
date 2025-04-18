<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\ReferenceGuesser as BaseReferenceGuesser;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ReferenceGuesser extends BaseReferenceGuesser
{
    use SchemaClassTrait;

    public function __construct(DenormalizerInterface $denormalizer, string $schemaClass)
    {
        parent::__construct($denormalizer);
        $this->schemaClass = $schemaClass;
    }
}
