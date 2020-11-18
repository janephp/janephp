<?php

namespace PicturePark\API\Model;

class ContentPermissionSetCreateManyRequest
{
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
        $this->items = $items;
        return $this;
    }
}