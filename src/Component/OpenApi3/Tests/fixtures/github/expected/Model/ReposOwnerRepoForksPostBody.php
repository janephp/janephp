<?php

namespace Github\Model;

class ReposOwnerRepoForksPostBody
{
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
        $this->organization = $organization;
        return $this;
    }
}