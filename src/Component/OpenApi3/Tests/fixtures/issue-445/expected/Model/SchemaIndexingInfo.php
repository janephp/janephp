<?php

namespace PicturePark\API\Model;

class SchemaIndexingInfo
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
     * A collection of indexing information for the fields of a schema
     *
     * @var list<FieldIndexingInfo>|null
     */
    protected $fields;
    /**
     * A collection of indexing information for the fields of a schema
     *
     * @return list<FieldIndexingInfo>|null
     */
    public function getFields() : ?array
    {
        return $this->fields;
    }
    /**
     * A collection of indexing information for the fields of a schema
     *
     * @param list<FieldIndexingInfo>|null $fields
     *
     * @return self
     */
    public function setFields(?array $fields) : self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
}