<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseTriggerResponse extends \ArrayObject
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
     * @var TriggerInfo
     */
    protected $trigger;
    /**
     * @return TriggerInfo
     */
    public function getTrigger(): TriggerInfo
    {
        return $this->trigger;
    }
    /**
     * @param TriggerInfo $trigger
     *
     * @return self
     */
    public function setTrigger(TriggerInfo $trigger): self
    {
        $this->initialized['trigger'] = true;
        $this->trigger = $trigger;
        return $this;
    }
}