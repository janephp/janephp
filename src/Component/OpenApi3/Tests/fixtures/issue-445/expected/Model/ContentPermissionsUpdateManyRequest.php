<?php

namespace PicturePark\API\Model;

class ContentPermissionsUpdateManyRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Content permissions update items
     *
     * @var ContentPermissionsUpdateItem[]
     */
    protected $items;
    /**
     * Content permissions update items
     *
     * @return ContentPermissionsUpdateItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Content permissions update items
     *
     * @param ContentPermissionsUpdateItem[] $items
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