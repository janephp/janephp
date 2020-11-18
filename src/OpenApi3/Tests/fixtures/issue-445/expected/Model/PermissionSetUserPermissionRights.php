<?php

namespace PicturePark\API\Model;

class PermissionSetUserPermissionRights
{
    /**
     * Permission set ID.
     *
     * @var string|null
     */
    protected $permissionSetId;
    /**
     * List of rights on the permission set specified by PermissionSetId
     *
     * @var string[]|null
     */
    protected $permissionSetRights;
    /**
     * Permission set ID.
     *
     * @return string|null
     */
    public function getPermissionSetId() : ?string
    {
        return $this->permissionSetId;
    }
    /**
     * Permission set ID.
     *
     * @param string|null $permissionSetId
     *
     * @return self
     */
    public function setPermissionSetId(?string $permissionSetId) : self
    {
        $this->permissionSetId = $permissionSetId;
        return $this;
    }
    /**
     * List of rights on the permission set specified by PermissionSetId
     *
     * @return string[]|null
     */
    public function getPermissionSetRights() : ?array
    {
        return $this->permissionSetRights;
    }
    /**
     * List of rights on the permission set specified by PermissionSetId
     *
     * @param string[]|null $permissionSetRights
     *
     * @return self
     */
    public function setPermissionSetRights(?array $permissionSetRights) : self
    {
        $this->permissionSetRights = $permissionSetRights;
        return $this;
    }
}