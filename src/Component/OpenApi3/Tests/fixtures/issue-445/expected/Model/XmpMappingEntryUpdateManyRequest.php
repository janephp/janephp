<?php

namespace PicturePark\API\Model;

class XmpMappingEntryUpdateManyRequest
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
     * Items to update.
     *
     * @var XmpMappingEntry[]|null
     */
    protected $items;
    /**
     * Items to update.
     *
     * @return XmpMappingEntry[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Items to update.
     *
     * @param XmpMappingEntry[]|null $items
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