<?php

namespace Jane\Component\JsonSchema\Event;

use Jane\Component\JsonSchema\Registry\Schema;

/**
 * @experimental This event is part of the experimental generation events API (see ADR 0013)
 */
final class SchemaEndedEvent
{
    public function __construct(
        private readonly Schema $schema,
    ) {
    }

    public function getSchema(): Schema
    {
        return $this->schema;
    }
}
