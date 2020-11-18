<?php

namespace PicturePark\API\Model;

class Blacklist
{
    /**
     * Blacklist entries.
     *
     * @var BlacklistItem[]
     */
    protected $items;
    /**
     * Blacklist entries.
     *
     * @return BlacklistItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Blacklist entries.
     *
     * @param BlacklistItem[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}