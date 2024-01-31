<?php

namespace PicturePark\API\Model;

class ContentPermissionSetCreateManyRequest
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
     * Content permission set update requests.
     *
     * @var ContentPermissionSetCreateRequest[]|null
     */
    protected $items;
    /**
     * Content permission set update requests.
     *
     * @return ContentPermissionSetCreateRequest[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Content permission set update requests.
     *
     * @param ContentPermissionSetCreateRequest[]|null $items
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