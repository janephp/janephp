<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class IdentityProvider implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    /**
     * Identity provider ID (has to match an existing IdP defined in IdentityServer)
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * Name of the identity provider as defined in IdentityServer
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * Display name of the identity provider as defined in IdentityServer
     *
     * @var string|null
     */
    public ?string $displayName;
    public function definedProperties(): array
    {
        return ['claimMapping' => 'claimMapping', 'groupClaimType' => 'groupClaimType', 'groupMapping' => 'groupMapping', 'fallbackUserRoleId' => 'fallbackUserRoleId', 'id' => 'id', 'name' => 'name', 'displayName' => 'displayName'];
    }
}