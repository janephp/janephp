<?php

namespace Jane\Component\JsonSchema\Guesser\Validator;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;

interface ValidatorInterface
{
    public function supports($object): bool;

    /**
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void;
}
