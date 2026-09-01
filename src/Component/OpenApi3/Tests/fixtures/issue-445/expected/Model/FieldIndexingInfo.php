<?php

namespace PicturePark\API\Model;

class FieldIndexingInfo
{
    /**
     * The field ID.
     *
     * @var string
     */
    public string $id;
    /**
     * Field is stored for filtering.
     *
     * @var bool
     */
    public bool $index;
    /**
     * Field is stored for simple search.
     *
     * @var bool
     */
    public bool $simpleSearch;
    /**
     * Field is stored for sorting.
     *
     * @var bool
     */
    public bool $sortable;
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @var float
     */
    public float $boost = 1;
    /**
     * Indexing information of schema's fields related to this field (if existing).
     *
     * @var SchemaIndexingInfo|null
     */
    public ?SchemaIndexingInfo $relatedSchemaIndexing;
}