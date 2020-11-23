<?php

namespace PicturePark\API\Model;

class ListItemSearchRequest
{
    /**
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    protected $searchString;
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied.
     *
     * @var string[]|null
     */
    protected $searchBehaviors;
    /**
     * An optional search filter. Limits the document result set.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
    * Special filters used to filter down independently the aggregations' values and the search results on specific conditions.
    For the search results, the aggregation filters are used to create a Filter that is put in AND with the eventual existing Filter of the search request to nail down the search results. The filters generated
    by the aggregation filters are put in OR each other if they have the same AggregationName, and then such groups are put in AND.
    For the aggregation values, only the original Filter of the search request is used to nail down the data to be considered for the aggregations. Then, on top of that, for each aggregator in the search request, a Filter is created to filter down the
    aggregation results of that aggregation: depending if the AggregationName of the AggregationFilter matches the AggregationName of the Aggregator, the filter is put in OR (if it matches) or in AND (if it does not match it).
    Moreover, an AggregationFilter ensures that the related value is returned in the AggregationResults also if the top aggregation values returned by default do not contain it.
    *
    * @var AggregationFilter[]|null
    */
    protected $aggregationFilters;
    /**
     * Broadens the search to include all schema descendant list items.
     *
     * @var bool
     */
    protected $includeAllSchemaChildren;
    /**
     * Limits the aggregation to the list items that have or not have broken references. By default it includes both.
     *
     * @var mixed
     */
    protected $brokenDependenciesFilter = 'All';
    /**
     * Limits the search among the list items of the provided schemas.
     *
     * @var string[]|null
     */
    protected $schemaIds;
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages defined in the system are used.
    *
    * @var string[]|null
    */
    protected $searchLanguages;
    /**
     * Limits the aggregation to the list items that have the specified life cycle state. Defaults to ActiveOnly.
     *
     * @var mixed
     */
    protected $lifeCycleFilter = 'ActiveOnly';
    /**
     * Fields and respective directions requested to sort the search results. Sorting on a not indexed field will throw an exception.
     *
     * @var SortInfo[]|null
     */
    protected $sort;
    /**
     * Limits the document count of the result set.
     *
     * @var int
     */
    protected $limit = 30;
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @var string|null
     */
    protected $pageToken;
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the ListItemSearchResult.
    Warning! It severely affects performance.
    *
    * @var bool
    */
    protected $debugMode = false;
    /**
     * List of enums that control which parts of the list item are resolved and returned.
     *
     * @var string[]|null
     */
    protected $resolveBehaviors;
    /**
     * List of aggregators that defines how the items should be aggregated.
     *
     * @var AggregatorBase[]|null
     */
    protected $aggregators;
    /**
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @return string|null
     */
    public function getSearchString() : ?string
    {
        return $this->searchString;
    }
    /**
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
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
     * An optional list of search behaviors. All the passed behaviors will be applied.
     *
     * @return string[]|null
     */
    public function getSearchBehaviors() : ?array
    {
        return $this->searchBehaviors;
    }
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied.
     *
     * @param string[]|null $searchBehaviors
     *
     * @return self
     */
    public function setSearchBehaviors(?array $searchBehaviors) : self
    {
        $this->searchBehaviors = $searchBehaviors;
        return $this;
    }
    /**
     * An optional search filter. Limits the document result set.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional search filter. Limits the document result set.
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
    * Special filters used to filter down independently the aggregations' values and the search results on specific conditions.
    For the search results, the aggregation filters are used to create a Filter that is put in AND with the eventual existing Filter of the search request to nail down the search results. The filters generated
    by the aggregation filters are put in OR each other if they have the same AggregationName, and then such groups are put in AND.
    For the aggregation values, only the original Filter of the search request is used to nail down the data to be considered for the aggregations. Then, on top of that, for each aggregator in the search request, a Filter is created to filter down the
    aggregation results of that aggregation: depending if the AggregationName of the AggregationFilter matches the AggregationName of the Aggregator, the filter is put in OR (if it matches) or in AND (if it does not match it).
    Moreover, an AggregationFilter ensures that the related value is returned in the AggregationResults also if the top aggregation values returned by default do not contain it.
    *
    * @return AggregationFilter[]|null
    */
    public function getAggregationFilters() : ?array
    {
        return $this->aggregationFilters;
    }
    /**
    * Special filters used to filter down independently the aggregations' values and the search results on specific conditions.
    For the search results, the aggregation filters are used to create a Filter that is put in AND with the eventual existing Filter of the search request to nail down the search results. The filters generated
    by the aggregation filters are put in OR each other if they have the same AggregationName, and then such groups are put in AND.
    For the aggregation values, only the original Filter of the search request is used to nail down the data to be considered for the aggregations. Then, on top of that, for each aggregator in the search request, a Filter is created to filter down the
    aggregation results of that aggregation: depending if the AggregationName of the AggregationFilter matches the AggregationName of the Aggregator, the filter is put in OR (if it matches) or in AND (if it does not match it).
    Moreover, an AggregationFilter ensures that the related value is returned in the AggregationResults also if the top aggregation values returned by default do not contain it.
    *
    * @param AggregationFilter[]|null $aggregationFilters
    *
    * @return self
    */
    public function setAggregationFilters(?array $aggregationFilters) : self
    {
        $this->aggregationFilters = $aggregationFilters;
        return $this;
    }
    /**
     * Broadens the search to include all schema descendant list items.
     *
     * @return bool
     */
    public function getIncludeAllSchemaChildren() : bool
    {
        return $this->includeAllSchemaChildren;
    }
    /**
     * Broadens the search to include all schema descendant list items.
     *
     * @param bool $includeAllSchemaChildren
     *
     * @return self
     */
    public function setIncludeAllSchemaChildren(bool $includeAllSchemaChildren) : self
    {
        $this->includeAllSchemaChildren = $includeAllSchemaChildren;
        return $this;
    }
    /**
     * Limits the aggregation to the list items that have or not have broken references. By default it includes both.
     *
     * @return mixed
     */
    public function getBrokenDependenciesFilter()
    {
        return $this->brokenDependenciesFilter;
    }
    /**
     * Limits the aggregation to the list items that have or not have broken references. By default it includes both.
     *
     * @param mixed $brokenDependenciesFilter
     *
     * @return self
     */
    public function setBrokenDependenciesFilter($brokenDependenciesFilter) : self
    {
        $this->brokenDependenciesFilter = $brokenDependenciesFilter;
        return $this;
    }
    /**
     * Limits the search among the list items of the provided schemas.
     *
     * @return string[]|null
     */
    public function getSchemaIds() : ?array
    {
        return $this->schemaIds;
    }
    /**
     * Limits the search among the list items of the provided schemas.
     *
     * @param string[]|null $schemaIds
     *
     * @return self
     */
    public function setSchemaIds(?array $schemaIds) : self
    {
        $this->schemaIds = $schemaIds;
        return $this;
    }
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages defined in the system are used.
    *
    * @return string[]|null
    */
    public function getSearchLanguages() : ?array
    {
        return $this->searchLanguages;
    }
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages defined in the system are used.
    *
    * @param string[]|null $searchLanguages
    *
    * @return self
    */
    public function setSearchLanguages(?array $searchLanguages) : self
    {
        $this->searchLanguages = $searchLanguages;
        return $this;
    }
    /**
     * Limits the aggregation to the list items that have the specified life cycle state. Defaults to ActiveOnly.
     *
     * @return mixed
     */
    public function getLifeCycleFilter()
    {
        return $this->lifeCycleFilter;
    }
    /**
     * Limits the aggregation to the list items that have the specified life cycle state. Defaults to ActiveOnly.
     *
     * @param mixed $lifeCycleFilter
     *
     * @return self
     */
    public function setLifeCycleFilter($lifeCycleFilter) : self
    {
        $this->lifeCycleFilter = $lifeCycleFilter;
        return $this;
    }
    /**
     * Fields and respective directions requested to sort the search results. Sorting on a not indexed field will throw an exception.
     *
     * @return SortInfo[]|null
     */
    public function getSort() : ?array
    {
        return $this->sort;
    }
    /**
     * Fields and respective directions requested to sort the search results. Sorting on a not indexed field will throw an exception.
     *
     * @param SortInfo[]|null $sort
     *
     * @return self
     */
    public function setSort(?array $sort) : self
    {
        $this->sort = $sort;
        return $this;
    }
    /**
     * Limits the document count of the result set.
     *
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }
    /**
     * Limits the document count of the result set.
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit) : self
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @return string|null
     */
    public function getPageToken() : ?string
    {
        return $this->pageToken;
    }
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @param string|null $pageToken
     *
     * @return self
     */
    public function setPageToken(?string $pageToken) : self
    {
        $this->pageToken = $pageToken;
        return $this;
    }
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the ListItemSearchResult.
    Warning! It severely affects performance.
    *
    * @return bool
    */
    public function getDebugMode() : bool
    {
        return $this->debugMode;
    }
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the ListItemSearchResult.
    Warning! It severely affects performance.
    *
    * @param bool $debugMode
    *
    * @return self
    */
    public function setDebugMode(bool $debugMode) : self
    {
        $this->debugMode = $debugMode;
        return $this;
    }
    /**
     * List of enums that control which parts of the list item are resolved and returned.
     *
     * @return string[]|null
     */
    public function getResolveBehaviors() : ?array
    {
        return $this->resolveBehaviors;
    }
    /**
     * List of enums that control which parts of the list item are resolved and returned.
     *
     * @param string[]|null $resolveBehaviors
     *
     * @return self
     */
    public function setResolveBehaviors(?array $resolveBehaviors) : self
    {
        $this->resolveBehaviors = $resolveBehaviors;
        return $this;
    }
    /**
     * List of aggregators that defines how the items should be aggregated.
     *
     * @return AggregatorBase[]|null
     */
    public function getAggregators() : ?array
    {
        return $this->aggregators;
    }
    /**
     * List of aggregators that defines how the items should be aggregated.
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
}