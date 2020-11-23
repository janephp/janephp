<?php

namespace PicturePark\API\Model;

class PermissionSetDeleteManyRequest
{
    /**
     * Permission set IDs.
     *
     * @var string[]|null
     */
    protected $permissionSetIds;
    /**
     * Permission set IDs.
     *
     * @return string[]|null
     */
    public function getPermissionSetIds() : ?array
    {
        return $this->permissionSetIds;
    }
    /**
     * Permission set IDs.
     *
     * @param string[]|null $permissionSetIds
     *
     * @return self
     */
    public function setPermissionSetIds(?array $permissionSetIds) : self
    {
        $this->permissionSetIds = $permissionSetIds;
        return $this;
    }
}