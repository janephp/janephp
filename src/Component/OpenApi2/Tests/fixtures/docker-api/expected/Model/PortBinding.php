<?php

namespace Docker\Api\Model;

class PortBinding
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
     * Host IP address that the container's port is mapped to.
     *
     * @var string
     */
    protected $hostIp;
    /**
     * Host port number that the container's port is mapped to.
     *
     * @var string
     */
    protected $hostPort;
    /**
     * Host IP address that the container's port is mapped to.
     *
     * @return string
     */
    public function getHostIp() : string
    {
        return $this->hostIp;
    }
    /**
     * Host IP address that the container's port is mapped to.
     *
     * @param string $hostIp
     *
     * @return self
     */
    public function setHostIp(string $hostIp) : self
    {
        $this->initialized['hostIp'] = true;
        $this->hostIp = $hostIp;
        return $this;
    }
    /**
     * Host port number that the container's port is mapped to.
     *
     * @return string
     */
    public function getHostPort() : string
    {
        return $this->hostPort;
    }
    /**
     * Host port number that the container's port is mapped to.
     *
     * @param string $hostPort
     *
     * @return self
     */
    public function setHostPort(string $hostPort) : self
    {
        $this->initialized['hostPort'] = true;
        $this->hostPort = $hostPort;
        return $this;
    }
}