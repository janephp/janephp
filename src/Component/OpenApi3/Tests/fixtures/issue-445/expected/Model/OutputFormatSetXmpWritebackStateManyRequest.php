<?php

namespace PicturePark\API\Model;

class OutputFormatSetXmpWritebackStateManyRequest
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
     * XMP writeback state changes to be processed.
     *
     * @var OutputFormatSetXmpWritebackStateRequestItem[]|null
     */
    protected $items;
    /**
     * XMP writeback state changes to be processed.
     *
     * @return OutputFormatSetXmpWritebackStateRequestItem[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * XMP writeback state changes to be processed.
     *
     * @param OutputFormatSetXmpWritebackStateRequestItem[]|null $items
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