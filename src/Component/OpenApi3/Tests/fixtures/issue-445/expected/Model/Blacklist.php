<?php

namespace PicturePark\API\Model;

class Blacklist
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
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}