<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaGroupAttrIdentityUserRoleMapping
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
     * @var AaaGroupAttrIdentityUserRoleMappingUserRole
     */
    public AaaGroupAttrIdentityUserRoleMappingUserRole $userRole;
}