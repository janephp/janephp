<?php

namespace Docker\Api\Model;

class NetworkContainer
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
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $endpointID;
    /**
     * 
     *
     * @var string
     */
    protected $macAddress;
    /**
     * 
     *
     * @var string
     */
    protected $iPv4Address;
    /**
     * 
     *
     * @var string
     */
    protected $iPv6Address;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEndpointID() : string
    {
        return $this->endpointID;
    }
    /**
     * 
     *
     * @param string $endpointID
     *
     * @return self
     */
    public function setEndpointID(string $endpointID) : self
    {
        $this->initialized['endpointID'] = true;
        $this->endpointID = $endpointID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMacAddress() : string
    {
        return $this->macAddress;
    }
    /**
     * 
     *
     * @param string $macAddress
     *
     * @return self
     */
    public function setMacAddress(string $macAddress) : self
    {
        $this->initialized['macAddress'] = true;
        $this->macAddress = $macAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIPv4Address() : string
    {
        return $this->iPv4Address;
    }
    /**
     * 
     *
     * @param string $iPv4Address
     *
     * @return self
     */
    public function setIPv4Address(string $iPv4Address) : self
    {
        $this->initialized['iPv4Address'] = true;
        $this->iPv4Address = $iPv4Address;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIPv6Address() : string
    {
        return $this->iPv6Address;
    }
    /**
     * 
     *
     * @param string $iPv6Address
     *
     * @return self
     */
    public function setIPv6Address(string $iPv6Address) : self
    {
        $this->initialized['iPv6Address'] = true;
        $this->iPv6Address = $iPv6Address;
        return $this;
    }
}