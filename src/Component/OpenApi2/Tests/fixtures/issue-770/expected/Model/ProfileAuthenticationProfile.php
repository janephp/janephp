<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileAuthenticationProfile
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
     * Identifier of the authentication profile
     *
     * @var string
     */
    protected $id;
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * 3GPP support enabled or disabled
     *
     * @var bool
     */
    protected $gppSuppportEnabled;
    /**
     * Hotspot 2.0 support enabled or disabled
     *
     * @var bool
     */
    protected $h20SuppportEnabled;
    /**
     * Realm based authentication service mappings contains LDAP or AD service type
     *
     * @var bool
     */
    protected $isContainDirectoryService;
    /**
     * Hosted AAA server RADIUS settings & PLMN ID settings
     *
     * @var ProfileTtgCommonSetting
     */
    protected $ttgCommonSetting;
    /**
     * Realm based authentication service mappings
     *
     * @var list<ProfileRealmAuthServiceMapping>
     */
    protected $realmMappings;
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
     * Identifier of the authentication profile
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the authentication profile
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
     * 3GPP support enabled or disabled
     *
     * @return bool
     */
    public function getGppSuppportEnabled(): bool
    {
        return $this->gppSuppportEnabled;
    }
    /**
     * 3GPP support enabled or disabled
     *
     * @param bool $gppSuppportEnabled
     *
     * @return self
     */
    public function setGppSuppportEnabled(bool $gppSuppportEnabled): self
    {
        $this->initialized['gppSuppportEnabled'] = true;
        $this->gppSuppportEnabled = $gppSuppportEnabled;
        return $this;
    }
    /**
     * Hotspot 2.0 support enabled or disabled
     *
     * @return bool
     */
    public function getH20SuppportEnabled(): bool
    {
        return $this->h20SuppportEnabled;
    }
    /**
     * Hotspot 2.0 support enabled or disabled
     *
     * @param bool $h20SuppportEnabled
     *
     * @return self
     */
    public function setH20SuppportEnabled(bool $h20SuppportEnabled): self
    {
        $this->initialized['h20SuppportEnabled'] = true;
        $this->h20SuppportEnabled = $h20SuppportEnabled;
        return $this;
    }
    /**
     * Realm based authentication service mappings contains LDAP or AD service type
     *
     * @return bool
     */
    public function getIsContainDirectoryService(): bool
    {
        return $this->isContainDirectoryService;
    }
    /**
     * Realm based authentication service mappings contains LDAP or AD service type
     *
     * @param bool $isContainDirectoryService
     *
     * @return self
     */
    public function setIsContainDirectoryService(bool $isContainDirectoryService): self
    {
        $this->initialized['isContainDirectoryService'] = true;
        $this->isContainDirectoryService = $isContainDirectoryService;
        return $this;
    }
    /**
     * Hosted AAA server RADIUS settings & PLMN ID settings
     *
     * @return ProfileTtgCommonSetting
     */
    public function getTtgCommonSetting(): ProfileTtgCommonSetting
    {
        return $this->ttgCommonSetting;
    }
    /**
     * Hosted AAA server RADIUS settings & PLMN ID settings
     *
     * @param ProfileTtgCommonSetting $ttgCommonSetting
     *
     * @return self
     */
    public function setTtgCommonSetting(ProfileTtgCommonSetting $ttgCommonSetting): self
    {
        $this->initialized['ttgCommonSetting'] = true;
        $this->ttgCommonSetting = $ttgCommonSetting;
        return $this;
    }
    /**
     * Realm based authentication service mappings
     *
     * @return list<ProfileRealmAuthServiceMapping>
     */
    public function getRealmMappings(): array
    {
        return $this->realmMappings;
    }
    /**
     * Realm based authentication service mappings
     *
     * @param list<ProfileRealmAuthServiceMapping> $realmMappings
     *
     * @return self
     */
    public function setRealmMappings(array $realmMappings): self
    {
        $this->initialized['realmMappings'] = true;
        $this->realmMappings = $realmMappings;
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