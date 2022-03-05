<?php

namespace Docker\Api\Model;

class ServiceEndpointVirtualIPsItem
{
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
        $this->addr = $addr;
        return $this;
    }
}