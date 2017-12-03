<?php

namespace Jane\JsonSchema\Guesser;

use Jane\JsonSchema\Guesser\Guess\Property;
use Jane\JsonSchema\Registry;

interface PropertiesGuesserInterface
{
    /**
     * Return all properties guessed.
     *
     * @param mixed    $object
     * @param string   $name
     * @param string   $reference
     * @param Registry $registry
     *
     * @internal
     *
     * @return Property[]
     */
    public function guessProperties($object, $name, $reference, Registry $registry);
}
