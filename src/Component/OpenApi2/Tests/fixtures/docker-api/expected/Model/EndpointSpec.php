<?php

namespace Docker\Api\Model;

class EndpointSpec
{
    /**
     * The mode of resolution to use for internal load balancing between tasks.
     *
     * @var string
     */
    protected $mode = 'vip';
    /**
    * List of exposed ports that this service is accessible on from the
    outside. Ports can only be provided if `vip` resolution mode is used.
    
    *
    * @var EndpointPortConfig[]
    */
    protected $ports;
    /**
     * The mode of resolution to use for internal load balancing between tasks.
     *
     * @return string
     */
    public function getMode() : string
    {
        return $this->mode;
    }
    /**
     * The mode of resolution to use for internal load balancing between tasks.
     *
     * @param string $mode
     *
     * @return self
     */
    public function setMode(string $mode) : self
    {
        $this->mode = $mode;
        return $this;
    }
    /**
    * List of exposed ports that this service is accessible on from the
    outside. Ports can only be provided if `vip` resolution mode is used.
    
    *
    * @return EndpointPortConfig[]
    */
    public function getPorts() : array
    {
        return $this->ports;
    }
    /**
    * List of exposed ports that this service is accessible on from the
    outside. Ports can only be provided if `vip` resolution mode is used.
    
    *
    * @param EndpointPortConfig[] $ports
    *
    * @return self
    */
    public function setPorts(array $ports) : self
    {
        $this->ports = $ports;
        return $this;
    }
}