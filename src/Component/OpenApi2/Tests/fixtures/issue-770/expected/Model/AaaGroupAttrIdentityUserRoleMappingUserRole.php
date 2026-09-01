<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AaaGroupAttrIdentityUserRoleMappingUserRole
{
    /**
     * Identity user role UUID
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * Identity user role
     *
     * @var AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile
     */
    public AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile $userTrafficProfile;
    /**
     * @var string
     */
    public string $firewallProfileId;
}