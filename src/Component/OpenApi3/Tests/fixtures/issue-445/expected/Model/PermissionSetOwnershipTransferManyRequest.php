<?php

namespace PicturePark\API\Model;

class PermissionSetOwnershipTransferManyRequest
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
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}