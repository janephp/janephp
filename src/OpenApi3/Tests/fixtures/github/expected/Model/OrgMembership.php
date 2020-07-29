<?php

namespace Github\Model;

class OrgMembership
{
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
        $this->permissions = $permissions;
        return $this;
    }
}