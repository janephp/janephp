<?php

namespace Jane\JsonSchema\Guesser\Validator;

use Jane\JsonSchema\Guesser\Guess\Property;

interface ValidatorInterface
{
    public function supports($object): bool;

    public function guess($object, string $name, Property $classGuess): void;
}
