<?php

namespace Jane\Component\JsonSchema\Event;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Node\Stmt;

/**
 * Fired when the AST of a model class has been generated.
 *
 * The event holds a live reference: listeners may decorate the PhpParser
 * Stmt\Class_ node (add methods, traits, extends, psalm tags...). Model file
 * decoration only.
 *
 * @experimental This event is part of the experimental generation events API (see ADR 0013)
 */
final class ClassGeneratedEvent
{
    public function __construct(
        private readonly Schema $schema,
        private readonly ClassGuess $classGuess,
        private readonly Stmt\Class_ $classNode,
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

    public function getClassNode(): Stmt\Class_
    {
        return $this->classNode;
    }
}
