<?php

namespace PicturePark\API\Model;

class AssignContentPermissionSetsAction extends BusinessRuleAction
{
    /**
     * IDs of the permission sets to assign.
     *
     * @var mixed|null
     */
    protected $permissionSetIds;
    /**
     * Indicates whether the already assigned permissions should be replaced or merged.
     *
     * @var bool
     */
    protected $replace;
    /**
     * IDs of the permission sets to assign.
     *
     * @return mixed
     */
    public function getPermissionSetIds()
    {
        return $this->permissionSetIds;
    }
    /**
     * IDs of the permission sets to assign.
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
    /**
     * Indicates whether the already assigned permissions should be replaced or merged.
     *
     * @return bool
     */
    public function getReplace() : bool
    {
        return $this->replace;
    }
    /**
     * Indicates whether the already assigned permissions should be replaced or merged.
     *
     * @param bool $replace
     *
     * @return self
     */
    public function setReplace(bool $replace) : self
    {
        $this->replace = $replace;
        return $this;
    }
}