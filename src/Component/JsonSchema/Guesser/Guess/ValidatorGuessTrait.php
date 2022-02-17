<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;

trait ValidatorGuessTrait
{
    /** @var ValidatorGuess[] */
    private $validators = [];

    public function addValidatorGuess(ValidatorGuess $validatorGuess): void
    {
        $this->validators[] = $validatorGuess;
    }

    public function getValidatorGuesses(): array
    {
        return $this->validators;
    }
}
