<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;

trait ValidatorGuessTrait
{
    /** @var array<ValidatorGuess> */
    private array $validators = [];

    public function addValidatorGuess(ValidatorGuess $validatorGuess): void
    {
        $this->validators[] = $validatorGuess;
    }

    public function getValidatorGuesses(): array
    {
        return $this->validators;
    }
}
