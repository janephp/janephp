<?php

namespace Jane\Component\JsonSchema\Event;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Registry\Schema;

/**
 * Fired after the type of a schema property has been guessed.
 *
 * The event holds live references: listeners may replace the guessed type
 * through Property::setType(), and the change flows into the generated models
 * AND normalizers (so type customizations must go through this event, not
 * through AST events).
 *
 * @experimental This event is part of the experimental generation events API (see ADR 0013)
 */
final class PropertyGuessedEvent
{
    public function __construct(
        private readonly Schema $schema,
        private readonly ClassGuess $classGuess,
        private readonly Property $property,
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
}
