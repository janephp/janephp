<?php

namespace PicturePark\API\Model;

class OutputFormatSetXmpWritebackStateManyRequest
{
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
        $this->items = $items;
        return $this;
    }
}