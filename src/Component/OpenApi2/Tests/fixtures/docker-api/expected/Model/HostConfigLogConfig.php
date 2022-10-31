<?php

namespace Docker\Api\Model;

class HostConfigLogConfig
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
    protected $type;
    /**
     * 
     *
     * @var string[]
     */
    protected $config;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getConfig() : iterable
    {
        return $this->config;
    }
    /**
     * 
     *
     * @param string[] $config
     *
     * @return self
     */
    public function setConfig(iterable $config) : self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
}