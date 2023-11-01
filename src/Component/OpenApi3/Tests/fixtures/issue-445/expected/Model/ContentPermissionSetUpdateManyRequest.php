<?php

namespace PicturePark\API\Model;

class ContentPermissionSetUpdateManyRequest
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
     * Content permission sets update requests.
     *
     * @var ContentPermissionSetUpdateRequestItem[]|null
     */
    protected $items;
    /**
     * Content permission sets update requests.
     *
     * @return ContentPermissionSetUpdateRequestItem[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Content permission sets update requests.
     *
     * @param ContentPermissionSetUpdateRequestItem[]|null $items
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