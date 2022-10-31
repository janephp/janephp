<?php

namespace PicturePark\API\Model;

class AssignContentPermissionSetsAction extends BusinessRuleAction
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
        $this->initialized['permissionSetIds'] = true;
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
        $this->initialized['replace'] = true;
        $this->replace = $replace;
        return $this;
    }
}