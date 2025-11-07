<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseListTriggers extends \ArrayObject
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
     * @var list<TriggerInfo>
     */
    protected $triggers;
    /**
     * @return list<TriggerInfo>
     */
    public function getTriggers(): array
    {
        return $this->triggers;
    }
    /**
     * @param list<TriggerInfo> $triggers
     *
     * @return self
     */
    public function setTriggers(array $triggers): self
    {
        $this->initialized['triggers'] = true;
        $this->triggers = $triggers;
        return $this;
    }
}