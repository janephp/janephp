<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileSoftGREProfile
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
     * @var string
     */
    protected $ipMode;
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
     * Tunnel MTU size of SoftGRE profile
     *
     * @var int
     */
    protected $tunnelMtuSize;
    /**
     * ICMP Keep-Alive Period(secs)
     *
     * @var int
     */
    protected $keepAlivePeriod;
    /**
     * ICMP Keep-Alive Retry
     *
     * @var int
     */
    protected $keepAliveRetry;
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
     * Timestamp of being created
     *
     * @var int
     */
    protected $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    protected $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    protected $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    protected $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    protected $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    protected $modifierUsername;
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
     * @return string
     */
    public function getIpMode(): string
    {
        return $this->ipMode;
    }
    /**
     * @param string $ipMode
     *
     * @return self
     */
    public function setIpMode(string $ipMode): self
    {
        $this->initialized['ipMode'] = true;
        $this->ipMode = $ipMode;
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
     * Tunnel MTU size of SoftGRE profile
     *
     * @return int
     */
    public function getTunnelMtuSize(): int
    {
        return $this->tunnelMtuSize;
    }
    /**
     * Tunnel MTU size of SoftGRE profile
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
    /**
     * Timestamp of being created
     *
     * @return int
     */
    public function getCreateDateTime(): int
    {
        return $this->createDateTime;
    }
    /**
     * Timestamp of being created
     *
     * @param int $createDateTime
     *
     * @return self
     */
    public function setCreateDateTime(int $createDateTime): self
    {
        $this->initialized['createDateTime'] = true;
        $this->createDateTime = $createDateTime;
        return $this;
    }
    /**
     * Timestamp of being modified
     *
     * @return int
     */
    public function getModifiedDateTime(): int
    {
        return $this->modifiedDateTime;
    }
    /**
     * Timestamp of being modified
     *
     * @param int $modifiedDateTime
     *
     * @return self
     */
    public function setModifiedDateTime(int $modifiedDateTime): self
    {
        $this->initialized['modifiedDateTime'] = true;
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }
    /**
     * Creator ID
     *
     * @return string
     */
    public function getCreatorId(): string
    {
        return $this->creatorId;
    }
    /**
     * Creator ID
     *
     * @param string $creatorId
     *
     * @return self
     */
    public function setCreatorId(string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * Modifier ID
     *
     * @return string
     */
    public function getModifierId(): string
    {
        return $this->modifierId;
    }
    /**
     * Modifier ID
     *
     * @param string $modifierId
     *
     * @return self
     */
    public function setModifierId(string $modifierId): self
    {
        $this->initialized['modifierId'] = true;
        $this->modifierId = $modifierId;
        return $this;
    }
    /**
     * Creator Name
     *
     * @return string
     */
    public function getCreatorUsername(): string
    {
        return $this->creatorUsername;
    }
    /**
     * Creator Name
     *
     * @param string $creatorUsername
     *
     * @return self
     */
    public function setCreatorUsername(string $creatorUsername): self
    {
        $this->initialized['creatorUsername'] = true;
        $this->creatorUsername = $creatorUsername;
        return $this;
    }
    /**
     * Modifier Name
     *
     * @return string
     */
    public function getModifierUsername(): string
    {
        return $this->modifierUsername;
    }
    /**
     * Modifier Name
     *
     * @param string $modifierUsername
     *
     * @return self
     */
    public function setModifierUsername(string $modifierUsername): self
    {
        $this->initialized['modifierUsername'] = true;
        $this->modifierUsername = $modifierUsername;
        return $this;
    }
}