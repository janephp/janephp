<?php

namespace Jane\Component\JsonSchema\Guesser\Validator;

class ValidatorGuess
{
    public function __construct(
        private string $constraintClass,
        private array $arguments = [],
        private ?string $subProperty = null,
        private ?string $classReference = null,
    ) {
    }

    public function getClassReference(): ?string
    {
        return $this->classReference;
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
