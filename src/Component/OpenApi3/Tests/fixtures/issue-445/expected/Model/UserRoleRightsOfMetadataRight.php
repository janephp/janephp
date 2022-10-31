<?php

namespace PicturePark\API\Model;

class UserRoleRightsOfMetadataRight
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['userRoleId'] = true;
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
        $this->initialized['rights'] = true;
        $this->rights = $rights;
        return $this;
    }
}