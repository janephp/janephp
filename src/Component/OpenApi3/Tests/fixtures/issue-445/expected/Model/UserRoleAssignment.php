<?php

namespace PicturePark\API\Model;

class UserRoleAssignment
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
    public function setUserRole($userRole): self
    {
        $this->initialized['userRole'] = true;
        $this->userRole = $userRole;
        return $this;
    }
    /**
     * Marks user roles that were assigned automatically to a federated user based on group mapping of a federated identity provider.
     *
     * @return bool
     */
    public function getIsFederated(): bool
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
    public function setIsFederated(bool $isFederated): self
    {
        $this->initialized['isFederated'] = true;
        $this->isFederated = $isFederated;
        return $this;
    }
}