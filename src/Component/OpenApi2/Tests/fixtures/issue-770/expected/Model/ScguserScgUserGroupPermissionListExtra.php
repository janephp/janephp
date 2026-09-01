<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserScgUserGroupPermissionListExtra
{
    /**
     * whether or not current user is a 'Super Admin' that possesses all 6 permission categories with 'FULL_ACCESS'
     *
     * @var bool
     */
    public bool $isSuperAdmin;
    /**
     * whether or not current user is a 'Super Admin of Partner Domain' that possesses all 6 permission categories with 'FULL_ACCESS'
     *
     * @var bool
     */
    public bool $isSuperAdminOfDomain;
}