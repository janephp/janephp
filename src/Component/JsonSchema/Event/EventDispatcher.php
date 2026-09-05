<?php

namespace Jane\Component\JsonSchema\Event;

/**
 * @experimental This dispatcher is part of the experimental generation events API (see ADR 0013)
 */
final class EventDispatcher
{
    /** @var array<class-string, list<callable>> */
    private array $listeners = [];

    public function addSubscriber(GenerationSubscriberInterface $subscriber): void
    {
        foreach ($subscriber->getSubscribedEvents() as $eventClass => $listeners) {
            foreach ($listeners as $listener) {
                $this->listeners[$eventClass][] = \is_string($listener) ? [$subscriber, $listener] : $listener;
            }
        }
    }

    public function dispatch(object $event): object
    {
        if ([] === $this->listeners) {
            return $event;
        }

        foreach ($this->listeners[$event::class] ?? [] as $listener) {
            $listener($event);
        }

        return $event;
    }
}
