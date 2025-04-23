<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\Guess\MapType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class AdditionalPropertiesGuesser implements GuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface, ClassGuesserInterface
{
    use ChainGuesserAwareTrait;

    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (is_a($object->getAdditionalProperties(), $this->getSchemaClass())) {
            $this->chainGuesser->guessClass($object->getAdditionalProperties(), $name . 'Item', $reference . '/additionalProperties', $registry);
        }
    }

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        if (!($object instanceof $class)) {
            return false;
        }

        if ('object' !== $object->getType()) {
            return false;
        }

        if (true !== $object->getAdditionalProperties() && !\is_object($object->getAdditionalProperties())) {
            return false;
        }

        return true;
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        if (true === $object->getAdditionalProperties()) {
            return new MapType($object, new Type($object, 'mixed'));
        }

        return new MapType($object, $this->chainGuesser->guessType($object->getAdditionalProperties(), $name . 'Item', $reference . '/additionalProperties', $registry));
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }
}
