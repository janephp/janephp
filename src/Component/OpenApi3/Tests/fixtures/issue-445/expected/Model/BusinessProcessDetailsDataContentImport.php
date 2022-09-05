<?php

namespace PicturePark\API\Model;

class BusinessProcessDetailsDataContentImport extends BusinessProcessDetailsDataBase
{
    /**
     * Items that were imported.
     *
     * @var ContentImportResult[]|null
     */
    protected $items;
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