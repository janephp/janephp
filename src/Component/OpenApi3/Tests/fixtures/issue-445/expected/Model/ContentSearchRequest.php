<?php

namespace PicturePark\API\Model;

class ContentSearchRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    * Limits the simple search fields to the fields available in the specified channel. Defaults to RootChannel.
    For the ContentAggregationOnChannelRequest only, the existing aggregation saved on the channel are retrieved and used to perform the aggregation.
    *
    * @var string|null
    */
    protected $channelId;
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages defined in the system are used.
    *
    * @var string[]|null
    */
    protected $searchLanguages;
    /**
     * Limit the search to the contents belonging to the specified collection.
     *
     * @var string|null
     */
    protected $collectionId;
    /**
     * Limits the aggregation to the contents that have the specified life cycle state. Defaults to ActiveOnly.
     *
     * @var mixed
     */
    protected $lifeCycleFilter = 'ActiveOnly';
    /**
     * Limits the aggregation to the contents that have or not have broken references. By default it includes both.
     *
     * @var mixed
     */
    protected $brokenDependenciesFilter = 'All';
    /**
     * Type of search to be performed: search only in metadata, only in the extracted fulltext from the file or both. Default to Metadata.
     *
     * @var mixed
     */
    protected $searchType = 'Metadata';
    /**
     * Limits the display values included in the search response. Defaults to all display values.
     *
     * @var string[]|null
     */
    protected $displayPatternIds;
    /**
     * Sorts the search results. Sorting on a field not marked as Sortable in the Content schema will throw an exception.
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
     * Limits the contents to the ones the user has the specified ContentRights.
     *
     * @var string[]|null
     */
    protected $rightsFilter;
    /**
    * Returns the aggregated document counts to the ones the user has the specified ContentRights.
    Produces the rightsAggregationCounts on the ContentSearchResult. View will be ignored as the totalResults already gives this information.
    *
    * @var string[]|null
    */
    protected $rightsAggregations;
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the ContentSearchResult.
    Warning! It severely affects performance.
    *
    * @var bool
    */
    protected $debugMode = false;
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
        $this->initialized['searchString'] = true;
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
        $this->initialized['searchBehaviors'] = true;
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
        $this->initialized['filter'] = true;
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
        $this->initialized['aggregationFilters'] = true;
        $this->aggregationFilters = $aggregationFilters;
        return $this;
    }
    /**
    * Limits the simple search fields to the fields available in the specified channel. Defaults to RootChannel.
    For the ContentAggregationOnChannelRequest only, the existing aggregation saved on the channel are retrieved and used to perform the aggregation.
    *
    * @return string|null
    */
    public function getChannelId() : ?string
    {
        return $this->channelId;
    }
    /**
    * Limits the simple search fields to the fields available in the specified channel. Defaults to RootChannel.
    For the ContentAggregationOnChannelRequest only, the existing aggregation saved on the channel are retrieved and used to perform the aggregation.
    *
    * @param string|null $channelId
    *
    * @return self
    */
    public function setChannelId(?string $channelId) : self
    {
        $this->initialized['channelId'] = true;
        $this->channelId = $channelId;
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
        $this->initialized['searchLanguages'] = true;
        $this->searchLanguages = $searchLanguages;
        return $this;
    }
    /**
     * Limit the search to the contents belonging to the specified collection.
     *
     * @return string|null
     */
    public function getCollectionId() : ?string
    {
        return $this->collectionId;
    }
    /**
     * Limit the search to the contents belonging to the specified collection.
     *
     * @param string|null $collectionId
     *
     * @return self
     */
    public function setCollectionId(?string $collectionId) : self
    {
        $this->initialized['collectionId'] = true;
        $this->collectionId = $collectionId;
        return $this;
    }
    /**
     * Limits the aggregation to the contents that have the specified life cycle state. Defaults to ActiveOnly.
     *
     * @return mixed
     */
    public function getLifeCycleFilter()
    {
        return $this->lifeCycleFilter;
    }
    /**
     * Limits the aggregation to the contents that have the specified life cycle state. Defaults to ActiveOnly.
     *
     * @param mixed $lifeCycleFilter
     *
     * @return self
     */
    public function setLifeCycleFilter($lifeCycleFilter) : self
    {
        $this->initialized['lifeCycleFilter'] = true;
        $this->lifeCycleFilter = $lifeCycleFilter;
        return $this;
    }
    /**
     * Limits the aggregation to the contents that have or not have broken references. By default it includes both.
     *
     * @return mixed
     */
    public function getBrokenDependenciesFilter()
    {
        return $this->brokenDependenciesFilter;
    }
    /**
     * Limits the aggregation to the contents that have or not have broken references. By default it includes both.
     *
     * @param mixed $brokenDependenciesFilter
     *
     * @return self
     */
    public function setBrokenDependenciesFilter($brokenDependenciesFilter) : self
    {
        $this->initialized['brokenDependenciesFilter'] = true;
        $this->brokenDependenciesFilter = $brokenDependenciesFilter;
        return $this;
    }
    /**
     * Type of search to be performed: search only in metadata, only in the extracted fulltext from the file or both. Default to Metadata.
     *
     * @return mixed
     */
    public function getSearchType()
    {
        return $this->searchType;
    }
    /**
     * Type of search to be performed: search only in metadata, only in the extracted fulltext from the file or both. Default to Metadata.
     *
     * @param mixed $searchType
     *
     * @return self
     */
    public function setSearchType($searchType) : self
    {
        $this->initialized['searchType'] = true;
        $this->searchType = $searchType;
        return $this;
    }
    /**
     * Limits the display values included in the search response. Defaults to all display values.
     *
     * @return string[]|null
     */
    public function getDisplayPatternIds() : ?array
    {
        return $this->displayPatternIds;
    }
    /**
     * Limits the display values included in the search response. Defaults to all display values.
     *
     * @param string[]|null $displayPatternIds
     *
     * @return self
     */
    public function setDisplayPatternIds(?array $displayPatternIds) : self
    {
        $this->initialized['displayPatternIds'] = true;
        $this->displayPatternIds = $displayPatternIds;
        return $this;
    }
    /**
     * Sorts the search results. Sorting on a field not marked as Sortable in the Content schema will throw an exception.
     *
     * @return SortInfo[]|null
     */
    public function getSort() : ?array
    {
        return $this->sort;
    }
    /**
     * Sorts the search results. Sorting on a field not marked as Sortable in the Content schema will throw an exception.
     *
     * @param SortInfo[]|null $sort
     *
     * @return self
     */
    public function setSort(?array $sort) : self
    {
        $this->initialized['sort'] = true;
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
        $this->initialized['limit'] = true;
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
        $this->initialized['pageToken'] = true;
        $this->pageToken = $pageToken;
        return $this;
    }
    /**
     * Limits the contents to the ones the user has the specified ContentRights.
     *
     * @return string[]|null
     */
    public function getRightsFilter() : ?array
    {
        return $this->rightsFilter;
    }
    /**
     * Limits the contents to the ones the user has the specified ContentRights.
     *
     * @param string[]|null $rightsFilter
     *
     * @return self
     */
    public function setRightsFilter(?array $rightsFilter) : self
    {
        $this->initialized['rightsFilter'] = true;
        $this->rightsFilter = $rightsFilter;
        return $this;
    }
    /**
    * Returns the aggregated document counts to the ones the user has the specified ContentRights.
    Produces the rightsAggregationCounts on the ContentSearchResult. View will be ignored as the totalResults already gives this information.
    *
    * @return string[]|null
    */
    public function getRightsAggregations() : ?array
    {
        return $this->rightsAggregations;
    }
    /**
    * Returns the aggregated document counts to the ones the user has the specified ContentRights.
    Produces the rightsAggregationCounts on the ContentSearchResult. View will be ignored as the totalResults already gives this information.
    *
    * @param string[]|null $rightsAggregations
    *
    * @return self
    */
    public function setRightsAggregations(?array $rightsAggregations) : self
    {
        $this->initialized['rightsAggregations'] = true;
        $this->rightsAggregations = $rightsAggregations;
        return $this;
    }
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the ContentSearchResult.
    Warning! It severely affects performance.
    *
    * @return bool
    */
    public function getDebugMode() : bool
    {
        return $this->debugMode;
    }
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the ContentSearchResult.
    Warning! It severely affects performance.
    *
    * @param bool $debugMode
    *
    * @return self
    */
    public function setDebugMode(bool $debugMode) : self
    {
        $this->initialized['debugMode'] = true;
        $this->debugMode = $debugMode;
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
        $this->initialized['aggregators'] = true;
        $this->aggregators = $aggregators;
        return $this;
    }
}