<?php

namespace Docker\Api\Model;

class EventActor
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The ID of the object emitting the event
     *
     * @var string
     */
    protected $iD;
    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @var array<string, string>
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
        $this->initialized['iD'] = true;
        $this->iD = $iD;
        return $this;
    }
    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @return array<string, string>
     */
    public function getAttributes() : iterable
    {
        return $this->attributes;
    }
    /**
     * Various key/value attributes of the object, depending on its type.
     *
     * @param array<string, string> $attributes
     *
     * @return self
     */
    public function setAttributes(iterable $attributes) : self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
}