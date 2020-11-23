<?php

namespace PicturePark\API\Model;

class ListItemCreateManyRequest
{
    /**
     * Allows creating list items that refer to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    protected $allowMissingDependencies;
    /**
     * Items to be created.
     *
     * @var ListItemCreateRequest[]
     */
    protected $items;
    /**
     * Allows creating list items that refer to list items or contents that don't exist in the system.
     *
     * @return bool
     */
    public function getAllowMissingDependencies() : bool
    {
        return $this->allowMissingDependencies;
    }
    /**
     * Allows creating list items that refer to list items or contents that don't exist in the system.
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
     * Items to be created.
     *
     * @return ListItemCreateRequest[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Items to be created.
     *
     * @param ListItemCreateRequest[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}