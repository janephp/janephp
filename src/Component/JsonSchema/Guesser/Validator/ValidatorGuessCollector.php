<?php

namespace Jane\Component\JsonSchema\Guesser\Validator;

use Jane\Component\JsonSchema\Guesser\Guess\ValidatorGuessTrait;

class ValidatorGuessCollector
{
    use ValidatorGuessTrait;

    /**
     * The collected guesses apply to each array item as a whole. SubObjectValidator skips a reference
     * whose JSON pointer contains "properties", so it adds no sub-object constraints here: those belong
     * to one property of the item, not to the item.
     */
    public function getReference(): string
    {
        return '#/properties';
    }
}
