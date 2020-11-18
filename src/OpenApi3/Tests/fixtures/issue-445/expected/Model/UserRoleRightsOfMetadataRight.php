<?php

namespace PicturePark\API\Model;

class UserRoleRightsOfMetadataRight
{
    /**
     * The user role id.
     *
     * @var string|null
     */
    protected $userRoleId;
    /**
     * A permission container which can hold content, metadata or permission set rights.
     *
     * @var string[]|null
     */
    protected $rights;
    /**
     * The user role id.
     *
     * @return string|null
     */
    public function getUserRoleId() : ?string
    {
        return $this->userRoleId;
    }
    /**
     * The user role id.
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
    /**
     * A permission container which can hold content, metadata or permission set rights.
     *
     * @return string[]|null
     */
    public function getRights() : ?array
    {
        return $this->rights;
    }
    /**
     * A permission container which can hold content, metadata or permission set rights.
     *
     * @param string[]|null $rights
     *
     * @return self
     */
    public function setRights(?array $rights) : self
    {
        $this->rights = $rights;
        return $this;
    }
}