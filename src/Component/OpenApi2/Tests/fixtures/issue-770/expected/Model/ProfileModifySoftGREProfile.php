<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileModifySoftGREProfile
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
     * Primary gateway address of the SoftGRE profile
     *
     * @var string
     */
    protected $primaryGateway;
    /**
     * Secondary gateway address of the SoftGRE profile
     *
     * @var string
     */
    protected $secondaryGateway;
    /**
     * WAN Interface MTU of the SoftGRE profile
     *
     * @var string
     */
    protected $tunnelMtuAutoEnabled;
    /**
     * Tunnel MTU size of SoftGRE profile. IPV4:850-1500, IPV6:1384-1500. Default 1500.
     *
     * @var int
     */
    protected $tunnelMtuSize = 1500;
    /**
     * ICMP Keep-Alive Period(secs)
     *
     * @var int
     */
    protected $keepAlivePeriod = 10;
    /**
     * ICMP Keep-Alive Retry
     *
     * @var int
     */
    protected $keepAliveRetry = 5;
    /**
     * Force Disassociate Client
     *
     * @var bool
     */
    protected $forceDisassociateClient;
    /**
     * Domain id of the SoftGRE profile
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
     * Primary gateway address of the SoftGRE profile
     *
     * @return string
     */
    public function getPrimaryGateway(): string
    {
        return $this->primaryGateway;
    }
    /**
     * Primary gateway address of the SoftGRE profile
     *
     * @param string $primaryGateway
     *
     * @return self
     */
    public function setPrimaryGateway(string $primaryGateway): self
    {
        $this->initialized['primaryGateway'] = true;
        $this->primaryGateway = $primaryGateway;
        return $this;
    }
    /**
     * Secondary gateway address of the SoftGRE profile
     *
     * @return string
     */
    public function getSecondaryGateway(): string
    {
        return $this->secondaryGateway;
    }
    /**
     * Secondary gateway address of the SoftGRE profile
     *
     * @param string $secondaryGateway
     *
     * @return self
     */
    public function setSecondaryGateway(string $secondaryGateway): self
    {
        $this->initialized['secondaryGateway'] = true;
        $this->secondaryGateway = $secondaryGateway;
        return $this;
    }
    /**
     * WAN Interface MTU of the SoftGRE profile
     *
     * @return string
     */
    public function getTunnelMtuAutoEnabled(): string
    {
        return $this->tunnelMtuAutoEnabled;
    }
    /**
     * WAN Interface MTU of the SoftGRE profile
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
     * Tunnel MTU size of SoftGRE profile. IPV4:850-1500, IPV6:1384-1500. Default 1500.
     *
     * @return int
     */
    public function getTunnelMtuSize(): int
    {
        return $this->tunnelMtuSize;
    }
    /**
     * Tunnel MTU size of SoftGRE profile. IPV4:850-1500, IPV6:1384-1500. Default 1500.
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
     * ICMP Keep-Alive Period(secs)
     *
     * @return int
     */
    public function getKeepAlivePeriod(): int
    {
        return $this->keepAlivePeriod;
    }
    /**
     * ICMP Keep-Alive Period(secs)
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
     * ICMP Keep-Alive Retry
     *
     * @return int
     */
    public function getKeepAliveRetry(): int
    {
        return $this->keepAliveRetry;
    }
    /**
     * ICMP Keep-Alive Retry
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
     * Force Disassociate Client
     *
     * @return bool
     */
    public function getForceDisassociateClient(): bool
    {
        return $this->forceDisassociateClient;
    }
    /**
     * Force Disassociate Client
     *
     * @param bool $forceDisassociateClient
     *
     * @return self
     */
    public function setForceDisassociateClient(bool $forceDisassociateClient): self
    {
        $this->initialized['forceDisassociateClient'] = true;
        $this->forceDisassociateClient = $forceDisassociateClient;
        return $this;
    }
    /**
     * Domain id of the SoftGRE profile
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain id of the SoftGRE profile
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