<?php

namespace PicturePark\API\Model;

class IdentityProviderEditable
{
    /**
     * Mapping of identity provider claims to user attributes
     *
     * @var list<IdpClaimToUserAttributeMapping>|null
     */
    public ?array $claimMapping;
    /**
     * Name of the identity provider claim that holds group membership information
     *
     * @var string|null
     */
    public ?string $groupClaimType;
    /**
     * IdP (AD) group to user role ID mapping
     *
     * @var list<IdpGroupToUserRoleMapping>|null
     */
    public ?array $groupMapping;
    /**
     * Optional user role ID that will be assigned to a user is none of the group mappings produce a match
     *
     * @var string|null
     */
    public ?string $fallbackUserRoleId;
}