<?php

namespace Jane\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\ReferenceGuesser as BaseReferenceGuesser;
use Symfony\Component\Serializer\SerializerInterface;

class ReferenceGuesser extends BaseReferenceGuesser
{
    use SchemaClassTrait;

    public function __construct(SerializerInterface $serializer, string $schemaClass)
    {
        parent::__construct($serializer);
        $this->schemaClass = $schemaClass;
    }
}
