<?php

namespace PicturePark\API\Model;

class SearchFieldCount
{
    /**
     * The number of fields created in the search index to store filter information for a schema.
     *
     * @var int
     */
    protected $indexedField;
    /**
     * The number of fields created in the search index to store search information for a schema.
     *
     * @var int
     */
    protected $simpleSearchField;
    /**
     * The number of fields created in the search index to store sorting information for a schema.
     *
     * @var int
     */
    protected $sortableField;
    /**
     * The number of fields created in the search index to store filter information for a schema.
     *
     * @return int
     */
    public function getIndexedField() : int
    {
        return $this->indexedField;
    }
    /**
     * The number of fields created in the search index to store filter information for a schema.
     *
     * @param int $indexedField
     *
     * @return self
     */
    public function setIndexedField(int $indexedField) : self
    {
        $this->indexedField = $indexedField;
        return $this;
    }
    /**
     * The number of fields created in the search index to store search information for a schema.
     *
     * @return int
     */
    public function getSimpleSearchField() : int
    {
        return $this->simpleSearchField;
    }
    /**
     * The number of fields created in the search index to store search information for a schema.
     *
     * @param int $simpleSearchField
     *
     * @return self
     */
    public function setSimpleSearchField(int $simpleSearchField) : self
    {
        $this->simpleSearchField = $simpleSearchField;
        return $this;
    }
    /**
     * The number of fields created in the search index to store sorting information for a schema.
     *
     * @return int
     */
    public function getSortableField() : int
    {
        return $this->sortableField;
    }
    /**
     * The number of fields created in the search index to store sorting information for a schema.
     *
     * @param int $sortableField
     *
     * @return self
     */
    public function setSortableField(int $sortableField) : self
    {
        $this->sortableField = $sortableField;
        return $this;
    }
}