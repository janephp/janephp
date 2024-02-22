<?php

namespace PicturePark\API\Model;

class ContentPermissionsUpdateManyRequest
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
     * Content permissions update items
     *
     * @var list<ContentPermissionsUpdateItem>
     */
    protected $items;
    /**
     * Content permissions update items
     *
     * @return list<ContentPermissionsUpdateItem>
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Content permissions update items
     *
     * @param list<ContentPermissionsUpdateItem> $items
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