<?php

namespace Jane\JsonSchema\Guesser\JsonSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\Guess\PatternMultipleType;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry;

class PatternPropertiesGuesser implements GuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        if (!($object instanceof JsonSchema)) {
            return false;
        }

        if ('object' !== $object->getType()) {
            return false;
        }

        // @TODO Handle case when there is properties (need to rework the guessClass for extending \ArrayObject and do the assignation)
        if (null !== $object->getProperties()) {
            return false;
        }

        if (!($object->getPatternProperties() instanceof \ArrayObject) || 0 == count($object->getPatternProperties())) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, $name, $reference, Registry $registry)
    {
        $type = new PatternMultipleType($object);

        foreach ($object->getPatternProperties() as $pattern => $patternProperty) {
            $type->addType($pattern, $this->chainGuesser->guessType($patternProperty, $name, $reference . '/patternProperties/' . $pattern, $registry));
        }

        return $type;
    }
}
