<?php

namespace PicturePark\API\Model;

class UserRoleCreateManyRequest
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
     * Multiple user creation requests.
     *
     * @var UserRoleCreateRequest[]
     */
    protected $items;
    /**
     * Multiple user creation requests.
     *
     * @return UserRoleCreateRequest[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Multiple user creation requests.
     *
     * @param UserRoleCreateRequest[] $items
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