<?php

namespace PicturePark\API\Model;

class XmpMappingEntryCreateManyRequest
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
     * Mappings to create.
     *
     * @var list<XmpMappingEntryCreateRequest>|null
     */
    protected $items;
    /**
     * Mappings to create.
     *
     * @return list<XmpMappingEntryCreateRequest>|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Mappings to create.
     *
     * @param list<XmpMappingEntryCreateRequest>|null $items
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