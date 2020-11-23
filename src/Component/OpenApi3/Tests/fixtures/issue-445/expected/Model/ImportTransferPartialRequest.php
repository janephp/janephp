<?php

namespace PicturePark\API\Model;

class ImportTransferPartialRequest
{
    /**
     * 
     *
     * @var FileTransferCreateItem[]|null
     */
    protected $items;
    /**
     * 
     *
     * @return FileTransferCreateItem[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param FileTransferCreateItem[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}