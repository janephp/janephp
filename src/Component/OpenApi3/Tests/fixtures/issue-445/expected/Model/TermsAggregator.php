<?php

namespace PicturePark\API\Model;

class TermsAggregator extends AggregatorBase
{
    /**
     * The field's ID to execute the aggregation on. Only not analyzed fields are supported.
     *
     * @var string
     */
    protected $field;
    /**
     * It defines how many term buckets should be returned out of the overall terms list.
     *
     * @var int|null
     */
    protected $size;
    /**
     * Includes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @var string[]|null
     */
    protected $includes;
    /**
     * Excludes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @var string[]|null
     */
    protected $excludes;
    /**
     * Limits the possible returned aggregation values by using a query string filter. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    protected $searchString;
    /**
     * Search fields to be used to search the SearchString value into. If no search field is specified, the Field value is used.
     *
     * @var string[]|null
     */
    protected $searchFields;
    /**
     * The field's ID to execute the aggregation on. Only not analyzed fields are supported.
     *
     * @return string
     */
    public function getField() : string
    {
        return $this->field;
    }
    /**
     * The field's ID to execute the aggregation on. Only not analyzed fields are supported.
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * It defines how many term buckets should be returned out of the overall terms list.
     *
     * @return int|null
     */
    public function getSize() : ?int
    {
        return $this->size;
    }
    /**
     * It defines how many term buckets should be returned out of the overall terms list.
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * Includes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @return string[]|null
     */
    public function getIncludes() : ?array
    {
        return $this->includes;
    }
    /**
     * Includes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @param string[]|null $includes
     *
     * @return self
     */
    public function setIncludes(?array $includes) : self
    {
        $this->includes = $includes;
        return $this;
    }
    /**
     * Excludes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @return string[]|null
     */
    public function getExcludes() : ?array
    {
        return $this->excludes;
    }
    /**
     * Excludes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @param string[]|null $excludes
     *
     * @return self
     */
    public function setExcludes(?array $excludes) : self
    {
        $this->excludes = $excludes;
        return $this;
    }
    /**
     * Limits the possible returned aggregation values by using a query string filter. The Lucene query string syntax is supported.
     *
     * @return string|null
     */
    public function getSearchString() : ?string
    {
        return $this->searchString;
    }
    /**
     * Limits the possible returned aggregation values by using a query string filter. The Lucene query string syntax is supported.
     *
     * @param string|null $searchString
     *
     * @return self
     */
    public function setSearchString(?string $searchString) : self
    {
        $this->searchString = $searchString;
        return $this;
    }
    /**
     * Search fields to be used to search the SearchString value into. If no search field is specified, the Field value is used.
     *
     * @return string[]|null
     */
    public function getSearchFields() : ?array
    {
        return $this->searchFields;
    }
    /**
     * Search fields to be used to search the SearchString value into. If no search field is specified, the Field value is used.
     *
     * @param string[]|null $searchFields
     *
     * @return self
     */
    public function setSearchFields(?array $searchFields) : self
    {
        $this->searchFields = $searchFields;
        return $this;
    }
}