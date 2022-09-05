<?php

namespace PicturePark\API\Model;

class UnassignContentPermissionSetsAction extends BusinessRuleAction
{
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
        $this->permissionSetIds = $permissionSetIds;
        return $this;
    }
}