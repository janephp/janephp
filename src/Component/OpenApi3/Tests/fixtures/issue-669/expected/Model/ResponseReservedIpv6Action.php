<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseReservedIpv6Action extends \ArrayObject
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
     * @var ResponseReservedIpv6ActionAction
     */
    protected $action;
    /**
     * @return ResponseReservedIpv6ActionAction
     */
    public function getAction(): ResponseReservedIpv6ActionAction
    {
        return $this->action;
    }
    /**
     * @param ResponseReservedIpv6ActionAction $action
     *
     * @return self
     */
    public function setAction(ResponseReservedIpv6ActionAction $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
}