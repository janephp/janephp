<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserScgUserGroupPermissionListExtra
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * whether or not current user is a 'Super Admin' that possesses all 6 permission categories with 'FULL_ACCESS'
     *
     * @var bool
     */
    protected $isSuperAdmin;
    /**
     * whether or not current user is a 'Super Admin of Partner Domain' that possesses all 6 permission categories with 'FULL_ACCESS'
     *
     * @var bool
     */
    protected $isSuperAdminOfDomain;
    /**
     * whether or not current user is a 'Super Admin' that possesses all 6 permission categories with 'FULL_ACCESS'
     *
     * @return bool
     */
    public function getIsSuperAdmin(): bool
    {
        return $this->isSuperAdmin;
    }
    /**
     * whether or not current user is a 'Super Admin' that possesses all 6 permission categories with 'FULL_ACCESS'
     *
     * @param bool $isSuperAdmin
     *
     * @return self
     */
    public function setIsSuperAdmin(bool $isSuperAdmin): self
    {
        $this->initialized['isSuperAdmin'] = true;
        $this->isSuperAdmin = $isSuperAdmin;
        return $this;
    }
    /**
     * whether or not current user is a 'Super Admin of Partner Domain' that possesses all 6 permission categories with 'FULL_ACCESS'
     *
     * @return bool
     */
    public function getIsSuperAdminOfDomain(): bool
    {
        return $this->isSuperAdminOfDomain;
    }
    /**
     * whether or not current user is a 'Super Admin of Partner Domain' that possesses all 6 permission categories with 'FULL_ACCESS'
     *
     * @param bool $isSuperAdminOfDomain
     *
     * @return self
     */
    public function setIsSuperAdminOfDomain(bool $isSuperAdminOfDomain): self
    {
        $this->initialized['isSuperAdminOfDomain'] = true;
        $this->isSuperAdminOfDomain = $isSuperAdminOfDomain;
        return $this;
    }
}