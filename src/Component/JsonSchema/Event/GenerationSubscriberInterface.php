<?php

namespace Jane\Component\JsonSchema\Event;

/**
 * A subscriber registering listeners for generation events.
 *
 * Listeners are invoked in subscription order (no priority system for now) and
 * receive the event as their single argument.
 *
 * @experimental This interface is part of the experimental generation events API (see ADR 0013)
 */
interface GenerationSubscriberInterface
{
    /**
     * @return array<class-string, list<callable|string>> Event class to listeners map; a string listener
     *                                                    is a method name on the subscriber itself
     */
    public function getSubscribedEvents(): array;
}
