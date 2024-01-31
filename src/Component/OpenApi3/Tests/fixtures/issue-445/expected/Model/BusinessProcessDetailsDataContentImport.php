<?php

namespace PicturePark\API\Model;

class BusinessProcessDetailsDataContentImport extends BusinessProcessDetailsDataBase
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
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}