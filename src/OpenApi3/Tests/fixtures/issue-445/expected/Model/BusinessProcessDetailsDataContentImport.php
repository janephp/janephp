<?php

namespace PicturePark\API\Model;

class BusinessProcessDetailsDataContentImport
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * Items that were imported.
     *
     * @var ContentImportResult[]|null
     */
    protected $items;
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * Items that were imported.
     *
     * @return ContentImportResult[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Items that were imported.
     *
     * @param ContentImportResult[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}