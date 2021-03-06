<?php

namespace PicturePark\API\Model;

class PermissionSetUpdateRequestOfMetadataRight
{
    /**
     * Language specific permission set names.
     *
     * @var mixed
     */
    protected $names;
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @var UserRoleRightsOfMetadataRight[]|null
     */
    protected $userRolesRights;
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @var UserRoleRightsOfPermissionSetRight[]|null
     */
    protected $userRolesPermissionSetRights;
    /**
     * Language specific permission set names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific permission set names.
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
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @return UserRoleRightsOfMetadataRight[]|null
     */
    public function getUserRolesRights() : ?array
    {
        return $this->userRolesRights;
    }
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @param UserRoleRightsOfMetadataRight[]|null $userRolesRights
     *
     * @return self
     */
    public function setUserRolesRights(?array $userRolesRights) : self
    {
        $this->userRolesRights = $userRolesRights;
        return $this;
    }
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @return UserRoleRightsOfPermissionSetRight[]|null
     */
    public function getUserRolesPermissionSetRights() : ?array
    {
        return $this->userRolesPermissionSetRights;
    }
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @param UserRoleRightsOfPermissionSetRight[]|null $userRolesPermissionSetRights
     *
     * @return self
     */
    public function setUserRolesPermissionSetRights(?array $userRolesPermissionSetRights) : self
    {
        $this->userRolesPermissionSetRights = $userRolesPermissionSetRights;
        return $this;
    }
}