<?php

namespace Jane\Component\JsonSchema\Generator\Context;

use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;

/**
 * Context when generating a library base on a Schema.
 */
class Context
{
    private UniqueVariableScope $variableScope;
    private Schema $currentSchema;

    public function __construct(
        private readonly Registry $registry,
        private readonly bool $strict = true,
    ) {
        $this->variableScope = new UniqueVariableScope();
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
