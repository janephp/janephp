<?php

namespace Jane\Component\JsonSchema\Guesser\Validator;

class ValidatorGuess
{
    /** @var string */
    private $constraintClass;

    /** @var array */
    private $arguments;

    /** @var string|null */
    private $subProperty;

    public function __construct(string $constraintClass, array $arguments = [], string $subProperty = null)
    {
        $this->constraintClass = $constraintClass;
        $this->arguments = $arguments;
        $this->subProperty = $subProperty;
    }

    public function getConstraintClass(): string
    {
        return $this->constraintClass;
    }

    public function setConstraintClass(string $constraintClass): void
    {
        $this->constraintClass = $constraintClass;
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }

    public function getSubProperty(): ?string
    {
        return $this->subProperty;
    }
}
