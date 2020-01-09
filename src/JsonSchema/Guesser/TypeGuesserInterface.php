<?php

namespace Jane\JsonSchema\Guesser;

use Jane\JsonSchema\Guesser\Guess\Type;
use Jane\JsonSchema\Registry;

interface TypeGuesserInterface
{
    /**
     * Return all types guessed.
     *
     * @internal
     */
    public function guessType($object, string $name, string $reference, Registry $registry): Type;
}
