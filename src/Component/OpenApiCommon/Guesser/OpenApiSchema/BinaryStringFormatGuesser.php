<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\Guess\BinaryStringType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\Registry\Registry;

class BinaryStringFormatGuesser implements GuesserInterface, TypeGuesserInterface
{
    use SchemaClassTrait;

    public function __construct(string $schemaClass)
    {
        $this->schemaClass = $schemaClass;
    }

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return ($object instanceof $class)
            && 'string' === ($object->type ?? null)
            && 'binary' === ($object->format ?? null)
        ;
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        return new BinaryStringType($object);
    }
}
