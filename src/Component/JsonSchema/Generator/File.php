<?php

namespace Jane\Component\JsonSchema\Generator;

use PhpParser\Node;

/**
 * File generated.
 *
 * Simply a correspondence between a filename and a AST
 */
class File
{
    public function __construct(
        /** Relative path of the file generated */
        private readonly string $filename,
        /** Ast generated */
        private readonly Node $node,
        /** Type of generation (model / normalizer / ...) */
        private readonly string $type,
    ) {
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
