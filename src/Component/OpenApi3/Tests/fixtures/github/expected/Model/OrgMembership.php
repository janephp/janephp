<?php

namespace Github\Model;

class OrgMembership extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $role;
    /**
     * 
     *
     * @var string
     */
    protected $organizationUrl;
    /**
     * Organization Simple
     *
     * @var OrganizationSimple
     */
    protected $organization;
    /**
     * 
     *
     * @var OrgMembershipUser|null
     */
    protected $user;
    /**
     * 
     *
     * @var OrgMembershipPermissions
     */
    protected $permissions;
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * 
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role) : self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganizationUrl() : string
    {
        return $this->organizationUrl;
    }
    /**
     * 
     *
     * @param string $organizationUrl
     *
     * @return self
     */
    public function setOrganizationUrl(string $organizationUrl) : self
    {
        $this->initialized['organizationUrl'] = true;
        $this->organizationUrl = $organizationUrl;
        return $this;
    }
    /**
     * Organization Simple
     *
     * @return OrganizationSimple
     */
    public function getOrganization() : OrganizationSimple
    {
        return $this->organization;
    }
    /**
     * Organization Simple
     *
     * @param OrganizationSimple $organization
     *
     * @return self
     */
    public function setOrganization(OrganizationSimple $organization) : self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
     * 
     *
     * @return OrgMembershipUser|null
     */
    public function getUser() : ?OrgMembershipUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param OrgMembershipUser|null $user
     *
     * @return self
     */
    public function setUser(?OrgMembershipUser $user) : self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return OrgMembershipPermissions
     */
    public function getPermissions() : OrgMembershipPermissions
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param OrgMembershipPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(OrgMembershipPermissions $permissions) : self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
}