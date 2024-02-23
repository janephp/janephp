<?php

namespace PicturePark\API\Model;

class PermissionSetOwnershipTransferManyRequest
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
     * Permission set ownership transfer requests.
     *
     * @var list<PermissionSetOwnershipTransferItem>|null
     */
    protected $items;
    /**
     * Permission set ownership transfer requests.
     *
     * @return list<PermissionSetOwnershipTransferItem>|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Permission set ownership transfer requests.
     *
     * @param list<PermissionSetOwnershipTransferItem>|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}