<?php

namespace Jane\Component\JsonSchema\Event;

use Jane\Component\JsonSchema\Registry\Registry;

/**
 * @experimental This event is part of the experimental generation events API (see ADR 0013)
 */
final class GenerationEndedEvent
{
    public function __construct(
        private readonly Registry $registry,
        private readonly float $elapsedSeconds,
    ) {
    }

    public function getRegistry(): Registry
    {
        return $this->registry;
    }

    public function getElapsedSeconds(): float
    {
        return $this->elapsedSeconds;
    }
}
