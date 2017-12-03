<?php

namespace Jane\JsonSchema\Generator\Context;

use Jane\JsonSchema\Generator\File;
use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;

/**
 * Context when generating a library base on a Schema
 */
class Context
{
    /**
     * Registry of all classes created on various schema
     *
     * @var Registry
     */
    private $registry;

    /**
     * Files generated through the run
     *
     * @var File[]
     */
    private $files = [];

    /**
     * Variable scope to have unique variable name per method
     *
     * @var UniqueVariableScope
     */
    private $variableScope;

    private $currentSchema;

    /**
     * @param Registry $registry
     */
    public function __construct(Registry $registry)
    {
        $this->registry = $registry;
        $this->variableScope = new UniqueVariableScope();
    }

    public function addFile(File $file)
    {
        $this->files[] = $file;
    }

    /**
     * @return File[]
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @return Registry
     */
    public function getRegistry()
    {
        return $this->registry;
    }

    /**
     * @return Schema
     */
    public function getCurrentSchema()
    {
        return $this->currentSchema;
    }

    /**
     * @param Schema $currentSchema
     */
    public function setCurrentSchema(Schema $currentSchema)
    {
        $this->currentSchema = $currentSchema;
    }

    /**
     * Refresh the unique variable scope for a context
     */
    public function refreshScope()
    {
        $this->variableScope = new UniqueVariableScope();
    }

    /**
     * Get a unique variable name
     *
     * @param string $prefix
     *
     * @return string
     */
    public function getUniqueVariableName($prefix = 'var')
    {
        return $this->variableScope->getUniqueName($prefix);
    }
}
