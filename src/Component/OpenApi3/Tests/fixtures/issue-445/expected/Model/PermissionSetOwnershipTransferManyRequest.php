<?php

namespace PicturePark\API\Model;

class PermissionSetOwnershipTransferManyRequest
{
    /**
     * Permission set ownership transfer requests.
     *
     * @var PermissionSetOwnershipTransferItem[]|null
     */
    protected $items;
    /**
     * Permission set ownership transfer requests.
     *
     * @return PermissionSetOwnershipTransferItem[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Permission set ownership transfer requests.
     *
     * @param PermissionSetOwnershipTransferItem[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}