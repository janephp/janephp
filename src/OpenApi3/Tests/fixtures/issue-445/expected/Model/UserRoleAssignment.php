<?php

namespace PicturePark\API\Model;

class UserRoleAssignment
{
    /**
     * User role assigned.
     *
     * @var mixed|null
     */
    protected $userRole;
    /**
     * Marks user roles that were assigned automatically to a federated user based on group mapping of a federated identity provider.
     *
     * @var bool
     */
    protected $isFederated;
    /**
     * User role assigned.
     *
     * @return mixed
     */
    public function getUserRole()
    {
        return $this->userRole;
    }
    /**
     * User role assigned.
     *
     * @param mixed $userRole
     *
     * @return self
     */
    public function setUserRole($userRole) : self
    {
        $this->userRole = $userRole;
        return $this;
    }
    /**
     * Marks user roles that were assigned automatically to a federated user based on group mapping of a federated identity provider.
     *
     * @return bool
     */
    public function getIsFederated() : bool
    {
        return $this->isFederated;
    }
    /**
     * Marks user roles that were assigned automatically to a federated user based on group mapping of a federated identity provider.
     *
     * @param bool $isFederated
     *
     * @return self
     */
    public function setIsFederated(bool $isFederated) : self
    {
        $this->isFederated = $isFederated;
        return $this;
    }
}