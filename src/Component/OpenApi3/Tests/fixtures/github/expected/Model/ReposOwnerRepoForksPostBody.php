<?php

namespace Github\Model;

class ReposOwnerRepoForksPostBody extends \ArrayObject
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
     * Optional parameter to specify the organization name if forking into an organization.
     *
     * @var string
     */
    protected $organization;
    /**
     * Optional parameter to specify the organization name if forking into an organization.
     *
     * @return string
     */
    public function getOrganization() : string
    {
        return $this->organization;
    }
    /**
     * Optional parameter to specify the organization name if forking into an organization.
     *
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization(string $organization) : self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
}