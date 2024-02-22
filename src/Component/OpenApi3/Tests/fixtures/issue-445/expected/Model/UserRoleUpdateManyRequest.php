<?php

namespace PicturePark\API\Model;

class UserRoleUpdateManyRequest
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
     * New value for user roles with specified IDs.
     *
     * @var list<UserRole>
     */
    protected $items;
    /**
     * New value for user roles with specified IDs.
     *
     * @return list<UserRole>
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * New value for user roles with specified IDs.
     *
     * @param list<UserRole> $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}