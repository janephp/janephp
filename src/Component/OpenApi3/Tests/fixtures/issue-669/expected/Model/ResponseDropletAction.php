<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseDropletAction extends \ArrayObject
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
     * @var Action
     */
    protected $action;
    /**
     * @return Action
     */
    public function getAction(): Action
    {
        return $this->action;
    }
    /**
     * @param Action $action
     *
     * @return self
     */
    public function setAction(Action $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
}