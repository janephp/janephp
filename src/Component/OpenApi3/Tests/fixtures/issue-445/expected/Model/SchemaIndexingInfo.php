<?php

namespace PicturePark\API\Model;

class SchemaIndexingInfo
{
    /**
     * A collection of indexing information for the fields of a schema
     *
     * @var list<FieldIndexingInfo>|null
     */
    public ?array $fields;
}