<?php

namespace Jane\Component\JsonSchema\Guesser\Validator;

use Jane\Component\JsonSchema\Guesser\Guess\ValidatorGuessTrait;

class ValidatorGuessCollector
{
    use ValidatorGuessTrait;

    public function getReference(): string
    {
        return 'properties';
    }
}
