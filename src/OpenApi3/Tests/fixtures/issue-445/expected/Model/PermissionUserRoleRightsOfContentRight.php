<?php

namespace PicturePark\API\Model;

class PermissionUserRoleRightsOfContentRight
{
    /**
     * The user role ID.
     *
     * @var string|null
     */
    protected $userRoleId;
    /**
     * Language specific user role names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
    * List of rights: they can be content, metadata or permission set rights, depending on the type defined on the class
    (ContentRight, MetadataRight, PermissionSetRight).
    *
    * @var string[]|null
    */
    protected $rights;
    /**
     * The user role ID.
     *
     * @return string|null
     */
    public function getUserRoleId() : ?string
    {
        return $this->userRoleId;
    }
    /**
     * The user role ID.
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
     * Language specific user role names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific user role names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
    * List of rights: they can be content, metadata or permission set rights, depending on the type defined on the class
    (ContentRight, MetadataRight, PermissionSetRight).
    *
    * @return string[]|null
    */
    public function getRights() : ?array
    {
        return $this->rights;
    }
    /**
    * List of rights: they can be content, metadata or permission set rights, depending on the type defined on the class
    (ContentRight, MetadataRight, PermissionSetRight).
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