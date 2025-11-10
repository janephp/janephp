<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityModifyIdentityUserRole
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
     * ID
     *
     * @var string
     */
    protected $id;
    /**
     * Domain Id
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
     * ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID
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
     * Domain Id
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain Id
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
}