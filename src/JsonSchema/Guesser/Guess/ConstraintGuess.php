<?php

declare(strict_types=1);

namespace Jane\JsonSchema\Guesser\Guess;

class ConstraintGuess
{
    /** @var string Constraint class */
    private $constraint;

    /** @var array Options for the constraint */
    private $options;

    /** @var array Options that will be available to change from the parent Class */
    private $editableOptions;

    /** @var ClassGuess Class guess associated */
    private $class;

    /** @var Property|null Property associated (or null if none) */
    private $property;

    public function __construct(string $constraint, array $options, array $editableOptions, ClassGuess $class, ?Property $property = null)
    {
        $this->constraint = $constraint;
        $this->options = $options;
        $this->editableOptions = $editableOptions;
        $this->class = $class;
        $this->property = $property;
    }

    public function getConstraint(): string
    {
        return $this->constraint;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getEditableOptions(): array
    {
        return $this->editableOptions;
    }

    public function getClass(): ClassGuess
    {
        return $this->class;
    }

    public function getProperty(): ?Property
    {
        return $this->property;
    }
}
