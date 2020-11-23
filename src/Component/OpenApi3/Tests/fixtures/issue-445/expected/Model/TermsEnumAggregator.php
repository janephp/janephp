<?php

namespace PicturePark\API\Model;

class TermsEnumAggregator
{
    /**
     * The slug name of the aggregation. It must be unique per aggregation request.
     *
     * @var string
     */
    protected $name;
    /**
     * Language specific field names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * An optional aggregator list for nested aggregations.
     *
     * @var AggregatorBase[]|null
     */
    protected $aggregators;
    /**
     * An optional filter to limit the data set the aggregation is operation on.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * Type of the enum target of the relation. It is used to resolve the enum translation.
     *
     * @var string
     */
    protected $enumType;
    /**
     * The slug name of the aggregation. It must be unique per aggregation request.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The slug name of the aggregation. It must be unique per aggregation request.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Language specific field names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific field names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * An optional aggregator list for nested aggregations.
     *
     * @return AggregatorBase[]|null
     */
    public function getAggregators() : ?array
    {
        return $this->aggregators;
    }
    /**
     * An optional aggregator list for nested aggregations.
     *
     * @param AggregatorBase[]|null $aggregators
     *
     * @return self
     */
    public function setAggregators(?array $aggregators) : self
    {
        $this->aggregators = $aggregators;
        return $this;
    }
    /**
     * An optional filter to limit the data set the aggregation is operation on.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional filter to limit the data set the aggregation is operation on.
     *
     * @param mixed $filter
     *
     * @return self
     */
    public function setFilter($filter) : self
    {
        $this->filter = $filter;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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
    /**
     * Type of the enum target of the relation. It is used to resolve the enum translation.
     *
     * @return string
     */
    public function getEnumType() : string
    {
        return $this->enumType;
    }
    /**
     * Type of the enum target of the relation. It is used to resolve the enum translation.
     *
     * @param string $enumType
     *
     * @return self
     */
    public function setEnumType(string $enumType) : self
    {
        $this->enumType = $enumType;
        return $this;
    }
}