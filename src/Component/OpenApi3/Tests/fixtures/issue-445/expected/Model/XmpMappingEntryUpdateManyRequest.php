<?php

namespace PicturePark\API\Model;

class XmpMappingEntryUpdateManyRequest
{
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
        $this->items = $items;
        return $this;
    }
}