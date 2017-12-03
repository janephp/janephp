<?php

namespace Jane\JsonSchema\Guesser\JsonSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\Guess\MapType;
use Jane\JsonSchema\Guesser\Guess\MultipleType;
use Jane\JsonSchema\Guesser\Guess\PatternMapType;
use Jane\JsonSchema\Guesser\Guess\PatternMultipleType;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Guesser\TypeGuesserInterface;

use Jane\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;

class PatternPropertiesGuesser implements GuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;

    /**
     * {@inheritDoc}
     */
    public function supportObject($object)
    {
        if (!($object instanceof JsonSchema)) {
            return false;
        }

        if ($object->getType() !== 'object') {
            return false;
        }

        // @TODO Handle case when there is properties (need to rework the guessClass for extending \ArrayObject and do the assignation)
        if ($object->getProperties() !== null) {
            return false;
        }

        if (!($object->getPatternProperties() instanceof \ArrayObject) || count($object->getPatternProperties()) == 0) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritDoc}
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
