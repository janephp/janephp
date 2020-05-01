<?php

namespace Jane\JsonSchema\Generator\Context;

use Jane\JsonSchema\Registry\Registry;
use Jane\JsonSchema\Registry\Schema;

/**
 * Context when generating a library base on a Schema.
 */
class Context
{
    private $registry;

    private $variableScope;

    private $currentSchema;

    private $strict;

    public function __construct(Registry $registry, bool $strict = true)
    {
        $this->registry = $registry;
        $this->variableScope = new UniqueVariableScope();
        $this->strict = $strict;
    }

    public function isStrict(): bool
    {
        return $this->strict;
    }

    public function getRegistry(): Registry
    {
        return $this->registry;
    }

    public function getCurrentSchema(): Schema
    {
        return $this->currentSchema;
    }

    public function setCurrentSchema(Schema $currentSchema): void
    {
        $this->currentSchema = $currentSchema;
    }

    /**
     * Refresh the unique variable scope for a context.
     */
    public function refreshScope(): void
    {
        $this->variableScope = new UniqueVariableScope();
    }

    public function getUniqueVariableName(string $prefix = 'var'): string
    {
        return $this->variableScope->getUniqueName($prefix);
    }
}
