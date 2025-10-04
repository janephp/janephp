<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\EnumGuesserInterface;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\ReferenceGuesser;

class EnumTypeGuesser extends ReferenceGuesser implements EnumGuesserInterface
{
    public function supportObject($object): bool
    {
        if (!$object instanceof Schema) {
            return false;
        }

        return $object && $object->getEnum() !== null;
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $refs = explode('/', $reference);
        $enumName = array_pop($refs);

        return new Type($object, $enumName);
    }

    public function guessEnum($object, string $name, string $reference, Registry $registry): void
    {
        if (!$object instanceof Schema) {
            return;
        }

        $schema = $registry->getSchema($reference);
        $schema->addEnum(
            $reference,
            new ClassGuess($object, $reference, $name)
        );
    }
}
