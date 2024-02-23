<?php

namespace PicturePark\API\Model;

class ImportTransferPartialRequest
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
     * 
     *
     * @var list<FileTransferCreateItem>|null
     */
    protected $items;
    /**
     * 
     *
     * @return list<FileTransferCreateItem>|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param list<FileTransferCreateItem>|null $items
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