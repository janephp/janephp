<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcUserDefinedProfile
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
     * Identifier of the User Defined Application
     *
     * @var string
     */
    protected $id;
    /**
     * AppId for Application Policy's User defined rule type
     *
     * @var int
     */
    protected $appId;
    /**
     * Tenant Id
     *
     * @var string
     */
    protected $tenantId;
    /**
     * Identifier of the System (root) domain or partner managed domain to which the User Defined Application belongs
     *
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $name;
    /**
     * Type of the User Defined Application
     *
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $destIp;
    /**
     * @var string
     */
    protected $netmask;
    /**
     * Destination Port of User Defined Application
     *
     * @var int
     */
    protected $destPort;
    /**
     * Protocol of User Defined Application
     *
     * @var string
     */
    protected $protocol;
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
     * Identifier of the User Defined Application
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the User Defined Application
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
     * AppId for Application Policy's User defined rule type
     *
     * @return int
     */
    public function getAppId(): int
    {
        return $this->appId;
    }
    /**
     * AppId for Application Policy's User defined rule type
     *
     * @param int $appId
     *
     * @return self
     */
    public function setAppId(int $appId): self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;
        return $this;
    }
    /**
     * Tenant Id
     *
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }
    /**
     * Tenant Id
     *
     * @param string $tenantId
     *
     * @return self
     */
    public function setTenantId(string $tenantId): self
    {
        $this->initialized['tenantId'] = true;
        $this->tenantId = $tenantId;
        return $this;
    }
    /**
     * Identifier of the System (root) domain or partner managed domain to which the User Defined Application belongs
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Identifier of the System (root) domain or partner managed domain to which the User Defined Application belongs
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
     * Type of the User Defined Application
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of the User Defined Application
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getDestIp(): string
    {
        return $this->destIp;
    }
    /**
     * @param string $destIp
     *
     * @return self
     */
    public function setDestIp(string $destIp): self
    {
        $this->initialized['destIp'] = true;
        $this->destIp = $destIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getNetmask(): string
    {
        return $this->netmask;
    }
    /**
     * @param string $netmask
     *
     * @return self
     */
    public function setNetmask(string $netmask): self
    {
        $this->initialized['netmask'] = true;
        $this->netmask = $netmask;
        return $this;
    }
    /**
     * Destination Port of User Defined Application
     *
     * @return int
     */
    public function getDestPort(): int
    {
        return $this->destPort;
    }
    /**
     * Destination Port of User Defined Application
     *
     * @param int $destPort
     *
     * @return self
     */
    public function setDestPort(int $destPort): self
    {
        $this->initialized['destPort'] = true;
        $this->destPort = $destPort;
        return $this;
    }
    /**
     * Protocol of User Defined Application
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * Protocol of User Defined Application
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
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