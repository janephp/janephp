<?php

namespace Docker\Api\Model;

class PortBinding
{
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
        $this->hostPort = $hostPort;
        return $this;
    }
}