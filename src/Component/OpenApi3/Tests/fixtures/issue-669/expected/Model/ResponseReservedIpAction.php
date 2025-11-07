<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseReservedIpAction extends \ArrayObject
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
     * @var ResponseReservedIpActionAction
     */
    protected $action;
    /**
     * @return ResponseReservedIpActionAction
     */
    public function getAction(): ResponseReservedIpActionAction
    {
        return $this->action;
    }
    /**
     * @param ResponseReservedIpActionAction $action
     *
     * @return self
     */
    public function setAction(ResponseReservedIpActionAction $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
}