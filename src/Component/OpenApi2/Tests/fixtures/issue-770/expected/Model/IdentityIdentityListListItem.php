<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityIdentityListListItem
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
     * Identifier of the service
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
     * @var CommonGenericRef
     */
    protected $userTrafficProfile;
    /**
     * @var string
     */
    protected $firewallProfileId;
    /**
     * @var IdentityMaxDevices
     */
    protected $maxDevices;
    /**
     * vlan id
     *
     * @var int
     */
    protected $vlanId;
    /**
     * @var CommonGenericRef
     */
    protected $vlanPooling;
    /**
     * Time schedule policy
     *
     * @var string
     */
    protected $timeSchedulePolicy = 'ALLOW_ALL';
    /**
     * @var IdentityTimeScheduleList
     */
    protected $timeScheduleList;
    /**
     * identifier of the domain
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
     * Identifier of the service
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the service
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
     * @return CommonGenericRef
     */
    public function getUserTrafficProfile(): CommonGenericRef
    {
        return $this->userTrafficProfile;
    }
    /**
     * @param CommonGenericRef $userTrafficProfile
     *
     * @return self
     */
    public function setUserTrafficProfile(CommonGenericRef $userTrafficProfile): self
    {
        $this->initialized['userTrafficProfile'] = true;
        $this->userTrafficProfile = $userTrafficProfile;
        return $this;
    }
    /**
     * @return string
     */
    public function getFirewallProfileId(): string
    {
        return $this->firewallProfileId;
    }
    /**
     * @param string $firewallProfileId
     *
     * @return self
     */
    public function setFirewallProfileId(string $firewallProfileId): self
    {
        $this->initialized['firewallProfileId'] = true;
        $this->firewallProfileId = $firewallProfileId;
        return $this;
    }
    /**
     * @return IdentityMaxDevices
     */
    public function getMaxDevices(): IdentityMaxDevices
    {
        return $this->maxDevices;
    }
    /**
     * @param IdentityMaxDevices $maxDevices
     *
     * @return self
     */
    public function setMaxDevices(IdentityMaxDevices $maxDevices): self
    {
        $this->initialized['maxDevices'] = true;
        $this->maxDevices = $maxDevices;
        return $this;
    }
    /**
     * vlan id
     *
     * @return int
     */
    public function getVlanId(): int
    {
        return $this->vlanId;
    }
    /**
     * vlan id
     *
     * @param int $vlanId
     *
     * @return self
     */
    public function setVlanId(int $vlanId): self
    {
        $this->initialized['vlanId'] = true;
        $this->vlanId = $vlanId;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getVlanPooling(): CommonGenericRef
    {
        return $this->vlanPooling;
    }
    /**
     * @param CommonGenericRef $vlanPooling
     *
     * @return self
     */
    public function setVlanPooling(CommonGenericRef $vlanPooling): self
    {
        $this->initialized['vlanPooling'] = true;
        $this->vlanPooling = $vlanPooling;
        return $this;
    }
    /**
     * Time schedule policy
     *
     * @return string
     */
    public function getTimeSchedulePolicy(): string
    {
        return $this->timeSchedulePolicy;
    }
    /**
     * Time schedule policy
     *
     * @param string $timeSchedulePolicy
     *
     * @return self
     */
    public function setTimeSchedulePolicy(string $timeSchedulePolicy): self
    {
        $this->initialized['timeSchedulePolicy'] = true;
        $this->timeSchedulePolicy = $timeSchedulePolicy;
        return $this;
    }
    /**
     * @return IdentityTimeScheduleList
     */
    public function getTimeScheduleList(): IdentityTimeScheduleList
    {
        return $this->timeScheduleList;
    }
    /**
     * @param IdentityTimeScheduleList $timeScheduleList
     *
     * @return self
     */
    public function setTimeScheduleList(IdentityTimeScheduleList $timeScheduleList): self
    {
        $this->initialized['timeScheduleList'] = true;
        $this->timeScheduleList = $timeScheduleList;
        return $this;
    }
    /**
     * identifier of the domain
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * identifier of the domain
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