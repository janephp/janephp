<?php

namespace Jane\Component\JsonSchema\Guesser\Validator;

class ValidatorGuess
{
    /** @var string */
    private $constraintClass;

    /** @var array */
    private $arguments;

    public function __construct(string $constraintClass, array $arguments = [])
    {
        $this->constraintClass = $constraintClass;
        $this->arguments = $arguments;
    }

    public function getConstraintClass(): string
    {
        return $this->constraintClass;
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }
}
