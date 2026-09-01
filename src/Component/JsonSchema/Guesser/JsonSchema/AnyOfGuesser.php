<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class AnyOfGuesser implements GuesserInterface, ClassGuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;

    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        foreach (($object->anyOf ?? null ?? []) as $anyOfKey => $anyOfObject) {
            $this->chainGuesser->guessClass($anyOfObject, $name . 'AnyOf', $reference . '/anyOf/' . $anyOfKey, $registry);
        }
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        if (1 == \count($object->anyOf ?? null)) {
            return $this->chainGuesser->guessType(($object->anyOf ?? null)[0], $name, $reference . '/anyOf/0', $registry);
        }

        $type = new MultipleType($object);

        foreach (($object->anyOf ?? null ?? []) as $anyOfKey => $anyOfObject) {
            $type->addType($this->chainGuesser->guessType($anyOfObject, $name, $reference . '/anyOf/' . $anyOfKey, $registry));
        }

        return $type;
    }

    public function supportObject($object): bool
    {
        return ($object instanceof JsonSchema) && \is_array($object->anyOf ?? null) && \count($object->anyOf ?? null) > 0;
    }
}
