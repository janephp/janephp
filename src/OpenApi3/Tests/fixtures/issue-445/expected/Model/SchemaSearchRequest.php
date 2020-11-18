<?php

namespace PicturePark\API\Model;

class SchemaSearchRequest
{
    /**
     * The string used to query the data. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    protected $searchString;
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied in the specified order.
     *
     * @var string[]|null
     */
    protected $searchBehaviors;
    /**
     * Sorts the search results. Currently only sorting on the Names property is allowed.
     *
     * @var SortInfo[]|null
     */
    protected $sort;
    /**
     * Limits the number of the returned schemas. Defaults to 30.
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
     * An optional filter to limit the schemas.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the SchemaSearchResult.
    Warning! It severely affects performance.
    *
    * @var bool
    */
    protected $debugMode = false;
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages in the system are used.
    *
    * @var string[]|null
    */
    protected $searchLanguages;
    /**
     * Limits the schemas to the ones the user has the specified MetadataRights.
     *
     * @var string[]|null
     */
    protected $rightsFilter;
    /**
     * The string used to query the data. The Lucene query string syntax is supported.
     *
     * @return string|null
     */
    public function getSearchString() : ?string
    {
        return $this->searchString;
    }
    /**
     * The string used to query the data. The Lucene query string syntax is supported.
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
     * An optional list of search behaviors. All the passed behaviors will be applied in the specified order.
     *
     * @return string[]|null
     */
    public function getSearchBehaviors() : ?array
    {
        return $this->searchBehaviors;
    }
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied in the specified order.
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
     * Sorts the search results. Currently only sorting on the Names property is allowed.
     *
     * @return SortInfo[]|null
     */
    public function getSort() : ?array
    {
        return $this->sort;
    }
    /**
     * Sorts the search results. Currently only sorting on the Names property is allowed.
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
     * Limits the number of the returned schemas. Defaults to 30.
     *
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }
    /**
     * Limits the number of the returned schemas. Defaults to 30.
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
     * An optional filter to limit the schemas.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional filter to limit the schemas.
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
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the SchemaSearchResult.
    Warning! It severely affects performance.
    *
    * @return bool
    */
    public function getDebugMode() : bool
    {
        return $this->debugMode;
    }
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the SchemaSearchResult.
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
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages in the system are used.
    *
    * @return string[]|null
    */
    public function getSearchLanguages() : ?array
    {
        return $this->searchLanguages;
    }
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages in the system are used.
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
     * Limits the schemas to the ones the user has the specified MetadataRights.
     *
     * @return string[]|null
     */
    public function getRightsFilter() : ?array
    {
        return $this->rightsFilter;
    }
    /**
     * Limits the schemas to the ones the user has the specified MetadataRights.
     *
     * @param string[]|null $rightsFilter
     *
     * @return self
     */
    public function setRightsFilter(?array $rightsFilter) : self
    {
        $this->rightsFilter = $rightsFilter;
        return $this;
    }
}