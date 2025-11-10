<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileDnsServerProfile
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Primary ip of DNS server service
     *
     * @var string
     */
    protected $primaryIp;
    /**
     * Secondary ip of DNS server service
     *
     * @var string
     */
    protected $secondaryIp;
    /**
     * Tertiary ip of DNS server service
     *
     * @var string
     */
    protected $tertiaryIp;
    /**
     * Tenant UUID
     *
     * @var string
     */
    protected $mvnoId;
    /**
     * Domain UUID
     *
     * @var string
     */
    protected $domainId;
    /**
     * Profile Id
     *
     * @var string
     */
    protected $id;
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
     * Primary ip of DNS server service
     *
     * @return string
     */
    public function getPrimaryIp(): string
    {
        return $this->primaryIp;
    }
    /**
     * Primary ip of DNS server service
     *
     * @param string $primaryIp
     *
     * @return self
     */
    public function setPrimaryIp(string $primaryIp): self
    {
        $this->initialized['primaryIp'] = true;
        $this->primaryIp = $primaryIp;
        return $this;
    }
    /**
     * Secondary ip of DNS server service
     *
     * @return string
     */
    public function getSecondaryIp(): string
    {
        return $this->secondaryIp;
    }
    /**
     * Secondary ip of DNS server service
     *
     * @param string $secondaryIp
     *
     * @return self
     */
    public function setSecondaryIp(string $secondaryIp): self
    {
        $this->initialized['secondaryIp'] = true;
        $this->secondaryIp = $secondaryIp;
        return $this;
    }
    /**
     * Tertiary ip of DNS server service
     *
     * @return string
     */
    public function getTertiaryIp(): string
    {
        return $this->tertiaryIp;
    }
    /**
     * Tertiary ip of DNS server service
     *
     * @param string $tertiaryIp
     *
     * @return self
     */
    public function setTertiaryIp(string $tertiaryIp): self
    {
        $this->initialized['tertiaryIp'] = true;
        $this->tertiaryIp = $tertiaryIp;
        return $this;
    }
    /**
     * Tenant UUID
     *
     * @return string
     */
    public function getMvnoId(): string
    {
        return $this->mvnoId;
    }
    /**
     * Tenant UUID
     *
     * @param string $mvnoId
     *
     * @return self
     */
    public function setMvnoId(string $mvnoId): self
    {
        $this->initialized['mvnoId'] = true;
        $this->mvnoId = $mvnoId;
        return $this;
    }
    /**
     * Domain UUID
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain UUID
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