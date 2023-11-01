<?php

namespace PicturePark\API\Model;

class ListItemUpdateManyRequest
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
     * Allows updating list items with references to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    protected $allowMissingDependencies;
    /**
     * Items to be updated.
     *
     * @var ListItemUpdateItem[]
     */
    protected $items;
    /**
     * Allows updating list items with references to list items or contents that don't exist in the system.
     *
     * @return bool
     */
    public function getAllowMissingDependencies() : bool
    {
        return $this->allowMissingDependencies;
    }
    /**
     * Allows updating list items with references to list items or contents that don't exist in the system.
     *
     * @param bool $allowMissingDependencies
     *
     * @return self
     */
    public function setAllowMissingDependencies(bool $allowMissingDependencies) : self
    {
        $this->initialized['allowMissingDependencies'] = true;
        $this->allowMissingDependencies = $allowMissingDependencies;
        return $this;
    }
    /**
     * Items to be updated.
     *
     * @return ListItemUpdateItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Items to be updated.
     *
     * @param ListItemUpdateItem[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}