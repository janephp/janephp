<?php

namespace PicturePark\API\Model;

class ContentCreateManyRequest
{
    /**
     * Allows creating contents that refer to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    protected $allowMissingDependencies;
    /**
     * Items to be created.
     *
     * @var ContentCreateRequest[]
     */
    protected $items;
    /**
     * Allows creating contents that refer to list items or contents that don't exist in the system.
     *
     * @return bool
     */
    public function getAllowMissingDependencies() : bool
    {
        return $this->allowMissingDependencies;
    }
    /**
     * Allows creating contents that refer to list items or contents that don't exist in the system.
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
     * @return ContentCreateRequest[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Items to be created.
     *
     * @param ContentCreateRequest[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}