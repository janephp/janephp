<?php

namespace Docker\Api\Model;

class ServiceEndpointVirtualIPsItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $networkID;
    /**
     * 
     *
     * @var string
     */
    protected $addr;
    /**
     * 
     *
     * @return string
     */
    public function getNetworkID() : string
    {
        return $this->networkID;
    }
    /**
     * 
     *
     * @param string $networkID
     *
     * @return self
     */
    public function setNetworkID(string $networkID) : self
    {
        $this->initialized['networkID'] = true;
        $this->networkID = $networkID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAddr() : string
    {
        return $this->addr;
    }
    /**
     * 
     *
     * @param string $addr
     *
     * @return self
     */
    public function setAddr(string $addr) : self
    {
        $this->initialized['addr'] = true;
        $this->addr = $addr;
        return $this;
    }
}