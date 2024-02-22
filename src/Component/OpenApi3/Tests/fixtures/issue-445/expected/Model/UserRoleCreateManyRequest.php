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
     * @var list<UserRoleCreateRequest>
     */
    protected $items;
    /**
     * Multiple user creation requests.
     *
     * @return list<UserRoleCreateRequest>
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Multiple user creation requests.
     *
     * @param list<UserRoleCreateRequest> $items
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