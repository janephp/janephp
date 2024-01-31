<?php

namespace Docker\Api\Model;

class PluginInterfaceType
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
    protected $prefix;
    /**
     * 
     *
     * @var string
     */
    protected $capability;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @return string
     */
    public function getPrefix() : string
    {
        return $this->prefix;
    }
    /**
     * 
     *
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix(string $prefix) : self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCapability() : string
    {
        return $this->capability;
    }
    /**
     * 
     *
     * @param string $capability
     *
     * @return self
     */
    public function setCapability(string $capability) : self
    {
        $this->initialized['capability'] = true;
        $this->capability = $capability;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}