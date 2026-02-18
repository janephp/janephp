<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseExistingCheckState extends \ArrayObject
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
     * @var State
     */
    protected $state;
    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }
    /**
     * @param State $state
     *
     * @return self
     */
    public function setState(State $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
}