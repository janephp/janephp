<?php

namespace PicturePark\API\Model;

class PermissionSetUserPermissionRights
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['permissionSetId'] = true;
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
        $this->initialized['permissionSetRights'] = true;
        $this->permissionSetRights = $permissionSetRights;
        return $this;
    }
}