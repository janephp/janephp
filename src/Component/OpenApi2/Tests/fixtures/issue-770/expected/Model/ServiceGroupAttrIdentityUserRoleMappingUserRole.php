<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceGroupAttrIdentityUserRoleMappingUserRole
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
     * @var ServiceGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile
     */
    public ServiceGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile $userTrafficProfile;
    /**
     * @var string
     */
    public string $firewallProfileId;
}