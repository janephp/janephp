<?php

namespace PicturePark\API\Model;

class SchemaPermissionSetUpdateManyRequest
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
     * Schema permission sets update requests.
     *
     * @var SchemaPermissionSetUpdateRequestItem[]|null
     */
    protected $items;
    /**
     * Schema permission sets update requests.
     *
     * @return SchemaPermissionSetUpdateRequestItem[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Schema permission sets update requests.
     *
     * @param SchemaPermissionSetUpdateRequestItem[]|null $items
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