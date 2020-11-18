<?php

namespace PicturePark\API\Model;

class ContentOwnershipTransferManyRequest
{
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
        $this->items = $items;
        return $this;
    }
}