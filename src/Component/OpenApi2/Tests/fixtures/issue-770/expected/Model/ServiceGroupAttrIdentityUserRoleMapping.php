<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ServiceGroupAttrIdentityUserRoleMapping
{
    /**
     * Group attribute mapping UUID
     *
     * @var string
     */
    public string $id;
    /**
     * Group attribute
     *
     * @var string
     */
    public string $groupAttr;
    /**
     * Identity user role
     *
     * @var ServiceGroupAttrIdentityUserRoleMappingUserRole
     */
    public ServiceGroupAttrIdentityUserRoleMappingUserRole $userRole;
}