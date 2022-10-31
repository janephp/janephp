<?php

namespace Docker\Api\Model;

class PluginConfigLinux
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
     * @var string[]
     */
    protected $capabilities;
    /**
     * 
     *
     * @var bool
     */
    protected $allowAllDevices;
    /**
     * 
     *
     * @var PluginDevice[]
     */
    protected $devices;
    /**
     * 
     *
     * @return string[]
     */
    public function getCapabilities() : array
    {
        return $this->capabilities;
    }
    /**
     * 
     *
     * @param string[] $capabilities
     *
     * @return self
     */
    public function setCapabilities(array $capabilities) : self
    {
        $this->initialized['capabilities'] = true;
        $this->capabilities = $capabilities;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAllowAllDevices() : bool
    {
        return $this->allowAllDevices;
    }
    /**
     * 
     *
     * @param bool $allowAllDevices
     *
     * @return self
     */
    public function setAllowAllDevices(bool $allowAllDevices) : self
    {
        $this->initialized['allowAllDevices'] = true;
        $this->allowAllDevices = $allowAllDevices;
        return $this;
    }
    /**
     * 
     *
     * @return PluginDevice[]
     */
    public function getDevices() : array
    {
        return $this->devices;
    }
    /**
     * 
     *
     * @param PluginDevice[] $devices
     *
     * @return self
     */
    public function setDevices(array $devices) : self
    {
        $this->initialized['devices'] = true;
        $this->devices = $devices;
        return $this;
    }
}