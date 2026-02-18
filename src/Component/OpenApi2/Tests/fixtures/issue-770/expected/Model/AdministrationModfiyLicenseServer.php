<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationModfiyLicenseServer
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
     * @var bool
     */
    protected $useCloud;
    /**
     * @var string
     */
    protected $ipAddress;
    /**
     * @var int
     */
    protected $port;
    /**
     * @return bool
     */
    public function getUseCloud(): bool
    {
        return $this->useCloud;
    }
    /**
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
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
    /**
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
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
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