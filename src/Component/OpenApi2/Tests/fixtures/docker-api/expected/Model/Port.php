<?php

namespace Docker\Api\Model;

class Port
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
     * Host IP address that the container's port is mapped to
     *
     * @var string
     */
    protected $iP;
    /**
     * Port on the container
     *
     * @var int
     */
    protected $privatePort;
    /**
     * Port exposed on the host
     *
     * @var int
     */
    protected $publicPort;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * Host IP address that the container's port is mapped to
     *
     * @return string
     */
    public function getIP() : string
    {
        return $this->iP;
    }
    /**
     * Host IP address that the container's port is mapped to
     *
     * @param string $iP
     *
     * @return self
     */
    public function setIP(string $iP) : self
    {
        $this->initialized['iP'] = true;
        $this->iP = $iP;
        return $this;
    }
    /**
     * Port on the container
     *
     * @return int
     */
    public function getPrivatePort() : int
    {
        return $this->privatePort;
    }
    /**
     * Port on the container
     *
     * @param int $privatePort
     *
     * @return self
     */
    public function setPrivatePort(int $privatePort) : self
    {
        $this->initialized['privatePort'] = true;
        $this->privatePort = $privatePort;
        return $this;
    }
    /**
     * Port exposed on the host
     *
     * @return int
     */
    public function getPublicPort() : int
    {
        return $this->publicPort;
    }
    /**
     * Port exposed on the host
     *
     * @param int $publicPort
     *
     * @return self
     */
    public function setPublicPort(int $publicPort) : self
    {
        $this->initialized['publicPort'] = true;
        $this->publicPort = $publicPort;
        return $this;
    }
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
}