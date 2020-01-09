<?php

namespace Jane\JsonSchema\Generator;

use PhpParser\Node;

/**
 * File generated.
 *
 * Simply a correspondance between a filename and a AST
 */
class File
{
    /**
     * Relative path of the file generated.
     */
    private $filename;

    /**
     * Ast generated.
     */
    private $node;

    /**
     * Type of generation (model / normalizer / ...).
     */
    private $type;

    public function __construct(string $filename, Node $node, string $type)
    {
        $this->filename = $filename;
        $this->node = $node;
        $this->type = $type;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function getNode(): Node
    {
        return $this->node;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
