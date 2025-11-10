<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileUserTrafficProfile
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
     * Identifier of the user traffic profile
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
     * Default action
     *
     * @var string
     */
    protected $defaultAction = 'ALLOW';
    /**
     * @var ProfileUplinkRateLimiting
     */
    protected $uplinkRateLimiting;
    /**
     * @var ProfileDownlinkRateLimiting
     */
    protected $downlinkRateLimiting;
    /**
     * Traffic access control list
     *
     * @var list<ProfileIpAclRules>
     */
    protected $ipAclRules;
    /**
     * Application Policy UUID (for 5.0 and Earlier Firmware Versions)
     *
     * @var string
     */
    protected $appPolicyId;
    /**
     * Application Policy UUID
     *
     * @var string
     */
    protected $qmAppPolicyId;
    /**
     * URL Filtering Policy UUID
     *
     * @var string
     */
    protected $urlFilteringPolicyId;
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
     * Whether the UTP is factory default or not
     *
     * @var bool
     */
    protected $isFactoryDefault;
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
     * Identifier of the user traffic profile
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the user traffic profile
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
     * Default action
     *
     * @return string
     */
    public function getDefaultAction(): string
    {
        return $this->defaultAction;
    }
    /**
     * Default action
     *
     * @param string $defaultAction
     *
     * @return self
     */
    public function setDefaultAction(string $defaultAction): self
    {
        $this->initialized['defaultAction'] = true;
        $this->defaultAction = $defaultAction;
        return $this;
    }
    /**
     * @return ProfileUplinkRateLimiting
     */
    public function getUplinkRateLimiting(): ProfileUplinkRateLimiting
    {
        return $this->uplinkRateLimiting;
    }
    /**
     * @param ProfileUplinkRateLimiting $uplinkRateLimiting
     *
     * @return self
     */
    public function setUplinkRateLimiting(ProfileUplinkRateLimiting $uplinkRateLimiting): self
    {
        $this->initialized['uplinkRateLimiting'] = true;
        $this->uplinkRateLimiting = $uplinkRateLimiting;
        return $this;
    }
    /**
     * @return ProfileDownlinkRateLimiting
     */
    public function getDownlinkRateLimiting(): ProfileDownlinkRateLimiting
    {
        return $this->downlinkRateLimiting;
    }
    /**
     * @param ProfileDownlinkRateLimiting $downlinkRateLimiting
     *
     * @return self
     */
    public function setDownlinkRateLimiting(ProfileDownlinkRateLimiting $downlinkRateLimiting): self
    {
        $this->initialized['downlinkRateLimiting'] = true;
        $this->downlinkRateLimiting = $downlinkRateLimiting;
        return $this;
    }
    /**
     * Traffic access control list
     *
     * @return list<ProfileIpAclRules>
     */
    public function getIpAclRules(): array
    {
        return $this->ipAclRules;
    }
    /**
     * Traffic access control list
     *
     * @param list<ProfileIpAclRules> $ipAclRules
     *
     * @return self
     */
    public function setIpAclRules(array $ipAclRules): self
    {
        $this->initialized['ipAclRules'] = true;
        $this->ipAclRules = $ipAclRules;
        return $this;
    }
    /**
     * Application Policy UUID (for 5.0 and Earlier Firmware Versions)
     *
     * @return string
     */
    public function getAppPolicyId(): string
    {
        return $this->appPolicyId;
    }
    /**
     * Application Policy UUID (for 5.0 and Earlier Firmware Versions)
     *
     * @param string $appPolicyId
     *
     * @return self
     */
    public function setAppPolicyId(string $appPolicyId): self
    {
        $this->initialized['appPolicyId'] = true;
        $this->appPolicyId = $appPolicyId;
        return $this;
    }
    /**
     * Application Policy UUID
     *
     * @return string
     */
    public function getQmAppPolicyId(): string
    {
        return $this->qmAppPolicyId;
    }
    /**
     * Application Policy UUID
     *
     * @param string $qmAppPolicyId
     *
     * @return self
     */
    public function setQmAppPolicyId(string $qmAppPolicyId): self
    {
        $this->initialized['qmAppPolicyId'] = true;
        $this->qmAppPolicyId = $qmAppPolicyId;
        return $this;
    }
    /**
     * URL Filtering Policy UUID
     *
     * @return string
     */
    public function getUrlFilteringPolicyId(): string
    {
        return $this->urlFilteringPolicyId;
    }
    /**
     * URL Filtering Policy UUID
     *
     * @param string $urlFilteringPolicyId
     *
     * @return self
     */
    public function setUrlFilteringPolicyId(string $urlFilteringPolicyId): self
    {
        $this->initialized['urlFilteringPolicyId'] = true;
        $this->urlFilteringPolicyId = $urlFilteringPolicyId;
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
     * Whether the UTP is factory default or not
     *
     * @return bool
     */
    public function getIsFactoryDefault(): bool
    {
        return $this->isFactoryDefault;
    }
    /**
     * Whether the UTP is factory default or not
     *
     * @param bool $isFactoryDefault
     *
     * @return self
     */
    public function setIsFactoryDefault(bool $isFactoryDefault): self
    {
        $this->initialized['isFactoryDefault'] = true;
        $this->isFactoryDefault = $isFactoryDefault;
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