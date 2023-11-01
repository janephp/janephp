<?php

namespace PicturePark\API\Model;

class SchemaPermissionSetCreateManyRequest
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
     * Schema permission sets create requests.
     *
     * @var SchemaPermissionSetCreateRequest[]|null
     */
    protected $items;
    /**
     * Schema permission sets create requests.
     *
     * @return SchemaPermissionSetCreateRequest[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Schema permission sets create requests.
     *
     * @param SchemaPermissionSetCreateRequest[]|null $items
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