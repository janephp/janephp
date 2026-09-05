<?php

namespace Jane\Component\JsonSchema\Event;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Node\Stmt;

/**
 * Fired when the AST of a model property has been generated.
 *
 * The event holds live references: listeners may decorate the PhpParser
 * Stmt\Property node (docblock tags...). Model file only — type changes must
 * go through PropertyGuessedEvent to stay consistent with normalizers.
 *
 * @experimental This event is part of the experimental generation events API (see ADR 0013)
 */
final class PropertyGeneratedEvent
{
    public function __construct(
        private readonly Schema $schema,
        private readonly ClassGuess $classGuess,
        private readonly Property $property,
        private readonly Stmt\Property $propertyNode,
    ) {
    }

    public function getSchema(): Schema
    {
        return $this->schema;
    }

    public function getClassGuess(): ClassGuess
    {
        return $this->classGuess;
    }

    public function getProperty(): Property
    {
        return $this->property;
    }

    public function getPropertyNode(): Stmt\Property
    {
        return $this->propertyNode;
    }
}
