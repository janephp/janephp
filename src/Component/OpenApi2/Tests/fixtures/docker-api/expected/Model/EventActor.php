<?php

namespace Docker\Api\Model;

class EventActor
{
    /**
     * The ID of the object emitting the event
     *
     * @var string
     */
    protected $iD;
    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @var string[]
     */
    protected $attributes;
    /**
     * The ID of the object emitting the event
     *
     * @return string
     */
    public function getID() : string
    {
        return $this->iD;
    }
    /**
     * The ID of the object emitting the event
     *
     * @param string $iD
     *
     * @return self
     */
    public function setID(string $iD) : self
    {
        $this->iD = $iD;
        return $this;
    }
    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @return string[]
     */
    public function getAttributes() : iterable
    {
        return $this->attributes;
    }
    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @param string[] $attributes
     *
     * @return self
     */
    public function setAttributes(iterable $attributes) : self
    {
        $this->attributes = $attributes;
        return $this;
    }
}