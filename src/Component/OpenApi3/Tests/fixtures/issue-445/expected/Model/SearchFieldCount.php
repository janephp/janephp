<?php

namespace PicturePark\API\Model;

class SearchFieldCount
{
    /**
     * The number of fields created in the search index to store filter information for a schema.
     *
     * @var int
     */
    public int $indexedField;
    /**
     * The number of fields created in the search index to store search information for a schema.
     *
     * @var int
     */
    public int $simpleSearchField;
    /**
     * The number of fields created in the search index to store sorting information for a schema.
     *
     * @var int
     */
    public int $sortableField;
}