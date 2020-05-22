<?php

namespace Jane\JsonSchema\Guesser\JsonSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\Guess\MultipleType;
use Jane\JsonSchema\Guesser\Guess\Type;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry\Registry;

class OneOfGuesser implements ChainGuesserAwareInterface, TypeGuesserInterface, GuesserInterface
{
    use ChainGuesserAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        return ($object instanceof JsonSchema) && 'object' !== $object->getType() && \is_array($object->getOneOf()) && \count($object->getOneOf()) > 0;
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $type = new MultipleType($object);

        foreach ($object->getOneOf() as $oneOfKey => $oneOf) {
            $type->addType($this->chainGuesser->guessType($oneOf, $name, $reference . '/oneOf/' . $oneOfKey, $registry));
        }

        return $type;
    }
}
