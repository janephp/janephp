<?php

namespace PicturePark\API\Model;

class UserRoleCreateManyRequest
{
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
        $this->items = $items;
        return $this;
    }
}