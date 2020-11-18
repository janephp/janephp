<?php

namespace PicturePark\API\Model;

class IdpGroupToUserRoleMapping
{
    /**
     * Name of the group on external identity provider
     *
     * @var string|null
     */
    protected $group;
    /**
     * User role ID as defined in CP
     *
     * @var string|null
     */
    protected $userRoleId;
    /**
     * Name of the group on external identity provider
     *
     * @return string|null
     */
    public function getGroup() : ?string
    {
        return $this->group;
    }
    /**
     * Name of the group on external identity provider
     *
     * @param string|null $group
     *
     * @return self
     */
    public function setGroup(?string $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * User role ID as defined in CP
     *
     * @return string|null
     */
    public function getUserRoleId() : ?string
    {
        return $this->userRoleId;
    }
    /**
     * User role ID as defined in CP
     *
     * @param string|null $userRoleId
     *
     * @return self
     */
    public function setUserRoleId(?string $userRoleId) : self
    {
        $this->userRoleId = $userRoleId;
        return $this;
    }
}