<?php

namespace Docker\Api\Model;

class EventActor
{
    /**
     * The ID of the object emitting the event
     *
     * @var string
     */
    public string $iD;
    /**
     * Various key/value attributes of the object, depending on its type.
     * 
     *
     * @var array<string, string>
     */
    public iterable $attributes;
}