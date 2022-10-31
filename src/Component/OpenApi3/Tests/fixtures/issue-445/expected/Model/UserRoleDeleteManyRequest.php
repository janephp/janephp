<?php

namespace PicturePark\API\Model;

class UserRoleDeleteManyRequest
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
     * IDs of the user roles to delete.
     *
     * @var string[]
     */
    protected $ids;
    /**
     * IDs of the user roles to delete.
     *
     * @return string[]
     */
    public function getIds() : array
    {
        return $this->ids;
    }
    /**
     * IDs of the user roles to delete.
     *
     * @param string[] $ids
     *
     * @return self
     */
    public function setIds(array $ids) : self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
}