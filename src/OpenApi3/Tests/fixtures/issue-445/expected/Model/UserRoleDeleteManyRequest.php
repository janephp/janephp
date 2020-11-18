<?php

namespace PicturePark\API\Model;

class UserRoleDeleteManyRequest
{
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
        $this->ids = $ids;
        return $this;
    }
}