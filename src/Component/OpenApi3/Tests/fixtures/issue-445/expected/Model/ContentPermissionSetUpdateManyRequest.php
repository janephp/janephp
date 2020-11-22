<?php

namespace PicturePark\API\Model;

class ContentPermissionSetUpdateManyRequest
{
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
        $this->items = $items;
        return $this;
    }
}