<?php

namespace Jane\JsonSchema\Generator;

use Jane\JsonSchema\Guesser\Guess\ClassGuess;

trait PropertyCheckTrait
{
    public function hasReadOnlyProperty(ClassGuess $class): bool
    {
        foreach ($class->getProperties() as $property) {
            if ($property->isReadOnly()) {
                return true;
            }
        }

        return false;
    }
}
