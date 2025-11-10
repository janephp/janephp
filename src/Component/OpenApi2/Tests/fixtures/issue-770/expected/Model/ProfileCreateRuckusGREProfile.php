<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateRuckusGREProfile
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
     * Profile Id
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Ruckus Tunnel Mode of RuckusGRE profile
     *
     * @var string
     */
    protected $tunnelMode;
    /**
     * Tunnel Encryption of the RuckusGRE profile
     *
     * @var string
     */
    protected $tunnelEncryption;
    /**
     * WAN Interface MTU of the RuckusGRE profile
     *
     * @var string
     */
    protected $tunnelMtuAutoEnabled;
    /**
     * Tunnel MTU size of RuckusGRE profile
     *
     * @var int
     */
    protected $tunnelMtuSize = 1500;
    /**
     * Tunnel Failover Keep-Alive Period
     *
     * @var int
     */
    protected $keepAlivePeriod = 10;
    /**
     * Tunnel Failover Keep-Alive Retry
     *
     * @var int
     */
    protected $keepAliveRetry = 6;
    /**
     * Tunnel Failover
     *
     * @var bool
     */
    protected $dualTunnel;
    /**
     * Domain id of the RuckusGRE profile
     *
     * @var string
     */
    protected $domainId;
    /**
     * Profile Id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Profile Id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Ruckus Tunnel Mode of RuckusGRE profile
     *
     * @return string
     */
    public function getTunnelMode(): string
    {
        return $this->tunnelMode;
    }
    /**
     * Ruckus Tunnel Mode of RuckusGRE profile
     *
     * @param string $tunnelMode
     *
     * @return self
     */
    public function setTunnelMode(string $tunnelMode): self
    {
        $this->initialized['tunnelMode'] = true;
        $this->tunnelMode = $tunnelMode;
        return $this;
    }
    /**
     * Tunnel Encryption of the RuckusGRE profile
     *
     * @return string
     */
    public function getTunnelEncryption(): string
    {
        return $this->tunnelEncryption;
    }
    /**
     * Tunnel Encryption of the RuckusGRE profile
     *
     * @param string $tunnelEncryption
     *
     * @return self
     */
    public function setTunnelEncryption(string $tunnelEncryption): self
    {
        $this->initialized['tunnelEncryption'] = true;
        $this->tunnelEncryption = $tunnelEncryption;
        return $this;
    }
    /**
     * WAN Interface MTU of the RuckusGRE profile
     *
     * @return string
     */
    public function getTunnelMtuAutoEnabled(): string
    {
        return $this->tunnelMtuAutoEnabled;
    }
    /**
     * WAN Interface MTU of the RuckusGRE profile
     *
     * @param string $tunnelMtuAutoEnabled
     *
     * @return self
     */
    public function setTunnelMtuAutoEnabled(string $tunnelMtuAutoEnabled): self
    {
        $this->initialized['tunnelMtuAutoEnabled'] = true;
        $this->tunnelMtuAutoEnabled = $tunnelMtuAutoEnabled;
        return $this;
    }
    /**
     * Tunnel MTU size of RuckusGRE profile
     *
     * @return int
     */
    public function getTunnelMtuSize(): int
    {
        return $this->tunnelMtuSize;
    }
    /**
     * Tunnel MTU size of RuckusGRE profile
     *
     * @param int $tunnelMtuSize
     *
     * @return self
     */
    public function setTunnelMtuSize(int $tunnelMtuSize): self
    {
        $this->initialized['tunnelMtuSize'] = true;
        $this->tunnelMtuSize = $tunnelMtuSize;
        return $this;
    }
    /**
     * Tunnel Failover Keep-Alive Period
     *
     * @return int
     */
    public function getKeepAlivePeriod(): int
    {
        return $this->keepAlivePeriod;
    }
    /**
     * Tunnel Failover Keep-Alive Period
     *
     * @param int $keepAlivePeriod
     *
     * @return self
     */
    public function setKeepAlivePeriod(int $keepAlivePeriod): self
    {
        $this->initialized['keepAlivePeriod'] = true;
        $this->keepAlivePeriod = $keepAlivePeriod;
        return $this;
    }
    /**
     * Tunnel Failover Keep-Alive Retry
     *
     * @return int
     */
    public function getKeepAliveRetry(): int
    {
        return $this->keepAliveRetry;
    }
    /**
     * Tunnel Failover Keep-Alive Retry
     *
     * @param int $keepAliveRetry
     *
     * @return self
     */
    public function setKeepAliveRetry(int $keepAliveRetry): self
    {
        $this->initialized['keepAliveRetry'] = true;
        $this->keepAliveRetry = $keepAliveRetry;
        return $this;
    }
    /**
     * Tunnel Failover
     *
     * @return bool
     */
    public function getDualTunnel(): bool
    {
        return $this->dualTunnel;
    }
    /**
     * Tunnel Failover
     *
     * @param bool $dualTunnel
     *
     * @return self
     */
    public function setDualTunnel(bool $dualTunnel): self
    {
        $this->initialized['dualTunnel'] = true;
        $this->dualTunnel = $dualTunnel;
        return $this;
    }
    /**
     * Domain id of the RuckusGRE profile
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain id of the RuckusGRE profile
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
}