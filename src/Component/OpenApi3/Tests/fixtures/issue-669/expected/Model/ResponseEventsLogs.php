<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseEventsLogs extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<EventsLogs>
     */
    protected $events;
    /**
     * @return list<EventsLogs>
     */
    public function getEvents(): array
    {
        return $this->events;
    }
    /**
     * @param list<EventsLogs> $events
     *
     * @return self
     */
    public function setEvents(array $events): self
    {
        $this->initialized['events'] = true;
        $this->events = $events;
        return $this;
    }
}