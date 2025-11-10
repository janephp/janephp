<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationLicenseServer
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * use cloud license server
     *
     * @var bool
     */
    protected $useCloud;
    /**
     * local license server IP address
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * local license server port
     *
     * @var int
     */
    protected $port;
    /**
     * use cloud license server
     *
     * @return bool
     */
    public function getUseCloud(): bool
    {
        return $this->useCloud;
    }
    /**
     * use cloud license server
     *
     * @param bool $useCloud
     *
     * @return self
     */
    public function setUseCloud(bool $useCloud): self
    {
        $this->initialized['useCloud'] = true;
        $this->useCloud = $useCloud;
        return $this;
    }
    /**
     * local license server IP address
     *
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
    /**
     * local license server IP address
     *
     * @param string $ipAddress
     *
     * @return self
     */
    public function setIpAddress(string $ipAddress): self
    {
        $this->initialized['ipAddress'] = true;
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * local license server port
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * local license server port
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port): self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
}