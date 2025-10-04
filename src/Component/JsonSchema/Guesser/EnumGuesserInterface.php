<?php

namespace Jane\Component\JsonSchema\Guesser;

use Jane\Component\JsonSchema\Registry\Registry;

interface EnumGuesserInterface
{
    /**
     * Guess model.
     *
     * This guesser should create a Model and the associated File
     * The file must be inject into the context
     *
     * @internal
     */
    public function guessEnum($object, string $name, string $reference, Registry $registry): void;
}
