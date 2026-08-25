<?php

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\ReferenceGuesser;

class DollarRefGuesser extends ReferenceGuesser
{
    public function supportObject($object): bool
    {
        $schemaClass = $this->getSchemaClass();

        // JSON Schema 2020-12 allows $ref to carry sibling keywords, so the spec parser
        // cannot collapse such a node into a Reference (parsing the OpenAPI 3.1
        // meta-schema itself relies on that); nodes composing their own properties or
        // allOf keep their inline handling, for anything else the reference wins
        return $object instanceof $schemaClass
            && null !== $object->getDollarRef()
            && null === $object->getProperties()
            && null === $object->getAllOf();
    }

    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        parent::guessClass($this->toReference($object, $reference), $name, $reference, $registry);
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        return parent::guessType($this->toReference($object, $reference), $name, $reference, $registry);
    }

    private function toReference($object, string $reference): Reference
    {
        [$origin] = explode('#', $reference, 2);

        return new Reference($object->getDollarRef(), $origin);
    }
}
