<?php

namespace Docker\Api\Model;

class PluginSettings
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
     * @var list<PluginMount>
     */
    protected $mounts;
    /**
     * 
     *
     * @var list<string>
     */
    protected $env;
    /**
     * 
     *
     * @var list<string>
     */
    protected $args;
    /**
     * 
     *
     * @var list<PluginDevice>
     */
    protected $devices;
    /**
     * 
     *
     * @return list<PluginMount>
     */
    public function getMounts() : array
    {
        return $this->mounts;
    }
    /**
     * 
     *
     * @param list<PluginMount> $mounts
     *
     * @return self
     */
    public function setMounts(array $mounts) : self
    {
        $this->initialized['mounts'] = true;
        $this->mounts = $mounts;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getEnv() : array
    {
        return $this->env;
    }
    /**
     * 
     *
     * @param list<string> $env
     *
     * @return self
     */
    public function setEnv(array $env) : self
    {
        $this->initialized['env'] = true;
        $this->env = $env;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getArgs() : array
    {
        return $this->args;
    }
    /**
     * 
     *
     * @param list<string> $args
     *
     * @return self
     */
    public function setArgs(array $args) : self
    {
        $this->initialized['args'] = true;
        $this->args = $args;
        return $this;
    }
    /**
     * 
     *
     * @return list<PluginDevice>
     */
    public function getDevices() : array
    {
        return $this->devices;
    }
    /**
     * 
     *
     * @param list<PluginDevice> $devices
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