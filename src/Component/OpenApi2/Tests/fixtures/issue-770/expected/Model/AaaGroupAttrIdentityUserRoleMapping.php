<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaGroupAttrIdentityUserRoleMapping
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
     * Group attribute mapping UUID
     *
     * @var string
     */
    protected $id;
    /**
     * Group attribute
     *
     * @var string
     */
    protected $groupAttr;
    /**
     * Identity user role
     *
     * @var AaaGroupAttrIdentityUserRoleMappingUserRole
     */
    protected $userRole;
    /**
     * Group attribute mapping UUID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Group attribute mapping UUID
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
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
     * @return AaaGroupAttrIdentityUserRoleMappingUserRole
     */
    public function getUserRole(): AaaGroupAttrIdentityUserRoleMappingUserRole
    {
        return $this->userRole;
    }
    /**
     * Identity user role
     *
     * @param AaaGroupAttrIdentityUserRoleMappingUserRole $userRole
     *
     * @return self
     */
    public function setUserRole(AaaGroupAttrIdentityUserRoleMappingUserRole $userRole): self
    {
        $this->initialized['userRole'] = true;
        $this->userRole = $userRole;
        return $this;
    }
}