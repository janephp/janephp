<?php

namespace PicturePark\API\Model;

class ContentMetadataUpdateManyRequest
{
    /**
     * Allows storing references to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    protected $allowMissingDependencies;
    /**
     * Update items
     *
     * @var ContentMetadataUpdateItem[]
     */
    protected $items;
    /**
     * Allows storing references to list items or contents that don't exist in the system.
     *
     * @return bool
     */
    public function getAllowMissingDependencies() : bool
    {
        return $this->allowMissingDependencies;
    }
    /**
     * Allows storing references to list items or contents that don't exist in the system.
     *
     * @param bool $allowMissingDependencies
     *
     * @return self
     */
    public function setAllowMissingDependencies(bool $allowMissingDependencies) : self
    {
        $this->allowMissingDependencies = $allowMissingDependencies;
        return $this;
    }
    /**
     * Update items
     *
     * @return ContentMetadataUpdateItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Update items
     *
     * @param ContentMetadataUpdateItem[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}