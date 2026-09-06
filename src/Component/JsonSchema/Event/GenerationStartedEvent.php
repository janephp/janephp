<?php

namespace Jane\Component\JsonSchema\Event;

use Jane\Component\JsonSchema\Registry\Registry;

/**
 * @experimental This event is part of the experimental generation events API (see ADR 0013)
 */
final class GenerationStartedEvent
{
    public function __construct(
        private readonly Registry $registry,
    ) {
    }

    public function getRegistry(): Registry
    {
        return $this->registry;
    }
}
