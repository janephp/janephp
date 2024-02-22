<?php

namespace PicturePark\API\Model;

class XmpMappingEntryUpdateManyRequest
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
     * Items to update.
     *
     * @var list<XmpMappingEntry>|null
     */
    protected $items;
    /**
     * Items to update.
     *
     * @return list<XmpMappingEntry>|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Items to update.
     *
     * @param list<XmpMappingEntry>|null $items
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