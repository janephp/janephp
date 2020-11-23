<?php

namespace PicturePark\API\Model;

class XmpMappingEntryCreateManyRequest
{
    /**
     * Mappings to create.
     *
     * @var XmpMappingEntryCreateRequest[]|null
     */
    protected $items;
    /**
     * Mappings to create.
     *
     * @return XmpMappingEntryCreateRequest[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Mappings to create.
     *
     * @param XmpMappingEntryCreateRequest[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}