<?php

namespace PicturePark\API\Model;

class IdentityProviderEditable
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Mapping of identity provider claims to user attributes
     *
     * @var IdpClaimToUserAttributeMapping[]|null
     */
    protected $claimMapping;
    /**
     * Name of the identity provider claim that holds group membership information
     *
     * @var string|null
     */
    protected $groupClaimType;
    /**
     * IdP (AD) group to user role ID mapping
     *
     * @var IdpGroupToUserRoleMapping[]|null
     */
    protected $groupMapping;
    /**
     * Optional user role ID that will be assigned to a user is none of the group mappings produce a match
     *
     * @var string|null
     */
    protected $fallbackUserRoleId;
    /**
     * Mapping of identity provider claims to user attributes
     *
     * @return IdpClaimToUserAttributeMapping[]|null
     */
    public function getClaimMapping() : ?array
    {
        return $this->claimMapping;
    }
    /**
     * Mapping of identity provider claims to user attributes
     *
     * @param IdpClaimToUserAttributeMapping[]|null $claimMapping
     *
     * @return self
     */
    public function setClaimMapping(?array $claimMapping) : self
    {
        $this->initialized['claimMapping'] = true;
        $this->claimMapping = $claimMapping;
        return $this;
    }
    /**
     * Name of the identity provider claim that holds group membership information
     *
     * @return string|null
     */
    public function getGroupClaimType() : ?string
    {
        return $this->groupClaimType;
    }
    /**
     * Name of the identity provider claim that holds group membership information
     *
     * @param string|null $groupClaimType
     *
     * @return self
     */
    public function setGroupClaimType(?string $groupClaimType) : self
    {
        $this->initialized['groupClaimType'] = true;
        $this->groupClaimType = $groupClaimType;
        return $this;
    }
    /**
     * IdP (AD) group to user role ID mapping
     *
     * @return IdpGroupToUserRoleMapping[]|null
     */
    public function getGroupMapping() : ?array
    {
        return $this->groupMapping;
    }
    /**
     * IdP (AD) group to user role ID mapping
     *
     * @param IdpGroupToUserRoleMapping[]|null $groupMapping
     *
     * @return self
     */
    public function setGroupMapping(?array $groupMapping) : self
    {
        $this->initialized['groupMapping'] = true;
        $this->groupMapping = $groupMapping;
        return $this;
    }
    /**
     * Optional user role ID that will be assigned to a user is none of the group mappings produce a match
     *
     * @return string|null
     */
    public function getFallbackUserRoleId() : ?string
    {
        return $this->fallbackUserRoleId;
    }
    /**
     * Optional user role ID that will be assigned to a user is none of the group mappings produce a match
     *
     * @param string|null $fallbackUserRoleId
     *
     * @return self
     */
    public function setFallbackUserRoleId(?string $fallbackUserRoleId) : self
    {
        $this->initialized['fallbackUserRoleId'] = true;
        $this->fallbackUserRoleId = $fallbackUserRoleId;
        return $this;
    }
}