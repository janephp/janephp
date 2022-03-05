<?php

namespace Docker\Api\Model;

class PluginsInfo
{
    /**
     * Names of available volume-drivers, and network-driver plugins.
     *
     * @var string[]
     */
    protected $volume;
    /**
     * Names of available network-drivers, and network-driver plugins.
     *
     * @var string[]
     */
    protected $network;
    /**
     * Names of available authorization plugins.
     *
     * @var string[]
     */
    protected $authorization;
    /**
     * Names of available logging-drivers, and logging-driver plugins.
     *
     * @var string[]
     */
    protected $log;
    /**
     * Names of available volume-drivers, and network-driver plugins.
     *
     * @return string[]
     */
    public function getVolume() : array
    {
        return $this->volume;
    }
    /**
     * Names of available volume-drivers, and network-driver plugins.
     *
     * @param string[] $volume
     *
     * @return self
     */
    public function setVolume(array $volume) : self
    {
        $this->volume = $volume;
        return $this;
    }
    /**
     * Names of available network-drivers, and network-driver plugins.
     *
     * @return string[]
     */
    public function getNetwork() : array
    {
        return $this->network;
    }
    /**
     * Names of available network-drivers, and network-driver plugins.
     *
     * @param string[] $network
     *
     * @return self
     */
    public function setNetwork(array $network) : self
    {
        $this->network = $network;
        return $this;
    }
    /**
     * Names of available authorization plugins.
     *
     * @return string[]
     */
    public function getAuthorization() : array
    {
        return $this->authorization;
    }
    /**
     * Names of available authorization plugins.
     *
     * @param string[] $authorization
     *
     * @return self
     */
    public function setAuthorization(array $authorization) : self
    {
        $this->authorization = $authorization;
        return $this;
    }
    /**
     * Names of available logging-drivers, and logging-driver plugins.
     *
     * @return string[]
     */
    public function getLog() : array
    {
        return $this->log;
    }
    /**
     * Names of available logging-drivers, and logging-driver plugins.
     *
     * @param string[] $log
     *
     * @return self
     */
    public function setLog(array $log) : self
    {
        $this->log = $log;
        return $this;
    }
}