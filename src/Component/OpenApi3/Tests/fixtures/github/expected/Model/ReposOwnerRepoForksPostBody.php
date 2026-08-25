<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ReposOwnerRepoForksPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
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
    public function getOrganization(): string
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
    public function setOrganization(string $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['organization' => ['organization', 'getOrganization', 'setOrganization']];
    }
}