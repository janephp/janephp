<?php

namespace PicturePark\API\Model;

class ContentOwnershipTransferManyRequest
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
     * List of Content Permissions ownership transfer items.
     *
     * @var ContentOwnershipTransferItem[]
     */
    protected $items;
    /**
     * List of Content Permissions ownership transfer items.
     *
     * @return ContentOwnershipTransferItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * List of Content Permissions ownership transfer items.
     *
     * @param ContentOwnershipTransferItem[] $items
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