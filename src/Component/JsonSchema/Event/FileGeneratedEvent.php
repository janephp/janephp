<?php

namespace Jane\Component\JsonSchema\Event;

use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Registry\Schema;

/**
 * @experimental This event is part of the experimental generation events API (see ADR 0013)
 */
final class FileGeneratedEvent
{
    public function __construct(
        private readonly Schema $schema,
        private readonly File $file,
    ) {
    }

    public function getSchema(): Schema
    {
        return $this->schema;
    }

    public function getFile(): File
    {
        return $this->file;
    }
}
