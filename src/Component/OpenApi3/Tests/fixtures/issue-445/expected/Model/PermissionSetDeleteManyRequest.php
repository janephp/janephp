<?php

namespace PicturePark\API\Model;

class PermissionSetDeleteManyRequest
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
     * Permission set IDs.
     *
     * @var list<string>|null
     */
    protected $permissionSetIds;
    /**
     * Permission set IDs.
     *
     * @return list<string>|null
     */
    public function getPermissionSetIds() : ?array
    {
        return $this->permissionSetIds;
    }
    /**
     * Permission set IDs.
     *
     * @param list<string>|null $permissionSetIds
     *
     * @return self
     */
    public function setPermissionSetIds(?array $permissionSetIds) : self
    {
        $this->initialized['permissionSetIds'] = true;
        $this->permissionSetIds = $permissionSetIds;
        return $this;
    }
}