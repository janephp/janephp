<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaModifyGroupAttrIdentityUserRoleMapping
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
     * Group attribute
     *
     * @var string
     */
    protected $groupAttr;
    /**
     * Identity user role
     *
     * @var AaaModifyGroupAttrIdentityUserRoleMappingUserRole
     */
    protected $userRole;
    /**
     * Group attribute
     *
     * @return string
     */
    public function getGroupAttr(): string
    {
        return $this->groupAttr;
    }
    /**
     * Group attribute
     *
     * @param string $groupAttr
     *
     * @return self
     */
    public function setGroupAttr(string $groupAttr): self
    {
        $this->initialized['groupAttr'] = true;
        $this->groupAttr = $groupAttr;
        return $this;
    }
    /**
     * Identity user role
     *
     * @return AaaModifyGroupAttrIdentityUserRoleMappingUserRole
     */
    public function getUserRole(): AaaModifyGroupAttrIdentityUserRoleMappingUserRole
    {
        return $this->userRole;
    }
    /**
     * Identity user role
     *
     * @param AaaModifyGroupAttrIdentityUserRoleMappingUserRole $userRole
     *
     * @return self
     */
    public function setUserRole(AaaModifyGroupAttrIdentityUserRoleMappingUserRole $userRole): self
    {
        $this->initialized['userRole'] = true;
        $this->userRole = $userRole;
        return $this;
    }
}