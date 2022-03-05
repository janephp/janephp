<?php

namespace Docker\Api\Model;

class PluginInterfaceType
{
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
        $this->version = $version;
        return $this;
    }
}