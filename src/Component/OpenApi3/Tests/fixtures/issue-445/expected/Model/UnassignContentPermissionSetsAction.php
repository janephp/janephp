<?php

namespace PicturePark\API\Model;

class UnassignContentPermissionSetsAction extends BusinessRuleAction
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
     * IDs of the permission sets to unassign.
     *
     * @var mixed|null
     */
    protected $permissionSetIds;
    /**
     * IDs of the permission sets to unassign.
     *
     * @return mixed
     */
    public function getPermissionSetIds()
    {
        return $this->permissionSetIds;
    }
    /**
     * IDs of the permission sets to unassign.
     *
     * @param mixed $permissionSetIds
     *
     * @return self
     */
    public function setPermissionSetIds($permissionSetIds) : self
    {
        $this->initialized['permissionSetIds'] = true;
        $this->permissionSetIds = $permissionSetIds;
        return $this;
    }
}