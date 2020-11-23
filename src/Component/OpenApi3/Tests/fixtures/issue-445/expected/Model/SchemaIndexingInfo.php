<?php

namespace PicturePark\API\Model;

class SchemaIndexingInfo
{
    /**
     * A collection of indexing information for the fields of a schema
     *
     * @var FieldIndexingInfo[]|null
     */
    protected $fields;
    /**
     * A collection of indexing information for the fields of a schema
     *
     * @return FieldIndexingInfo[]|null
     */
    public function getFields() : ?array
    {
        return $this->fields;
    }
    /**
     * A collection of indexing information for the fields of a schema
     *
     * @param FieldIndexingInfo[]|null $fields
     *
     * @return self
     */
    public function setFields(?array $fields) : self
    {
        $this->fields = $fields;
        return $this;
    }
}