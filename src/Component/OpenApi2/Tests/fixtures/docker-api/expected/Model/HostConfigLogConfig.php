<?php

namespace Docker\Api\Model;

class HostConfigLogConfig
{
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
        $this->config = $config;
        return $this;
    }
}