<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaGroupAttrIdentityUserRoleMappingUserRole
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
     * Identity user role UUID
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * Identity user role
     *
     * @var AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile
     */
    protected $userTrafficProfile;
    /**
     * @var string
     */
    protected $firewallProfileId;
    /**
     * Identity user role UUID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identity user role UUID
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
     * Identity user role
     *
     * @return AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile
     */
    public function getUserTrafficProfile(): AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile
    {
        return $this->userTrafficProfile;
    }
    /**
     * Identity user role
     *
     * @param AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile $userTrafficProfile
     *
     * @return self
     */
    public function setUserTrafficProfile(AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile $userTrafficProfile): self
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
}