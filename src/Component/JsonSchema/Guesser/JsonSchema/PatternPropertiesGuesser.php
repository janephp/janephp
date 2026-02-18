<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\Guess\PatternMultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class PatternPropertiesGuesser implements GuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;

    public function supportObject($object): bool
    {
        if (!($object instanceof JsonSchema)) {
            return false;
        }

        if ('object' !== $object->getType()) {
            return false;
        }

        if (null !== $object->getProperties()) {
            return false;
        }

        if (!($object->getPatternProperties() instanceof \ArrayObject) || 0 == \count($object->getPatternProperties())) {
            return false;
        }

        return true;
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $type = new PatternMultipleType($object);

        foreach ($object->getPatternProperties() as $pattern => $patternProperty) {
            $type->addType($pattern, $this->chainGuesser->guessType($patternProperty, $name, $reference . '/patternProperties/' . $pattern, $registry));
        }

        return $type;
    }
}
