<?php

namespace Jane\JsonSchema\Guesser;

use Jane\JsonSchema\Guesser\Guess\Property;
use Jane\JsonSchema\Registry\Registry;

interface PropertiesGuesserInterface
{
    /**
     * Return all properties guessed.
     *
     * @internal
     *
     * @return Property[]
     */
    public function guessProperties($object, string $name, string $reference, Registry $registry): array;
}
