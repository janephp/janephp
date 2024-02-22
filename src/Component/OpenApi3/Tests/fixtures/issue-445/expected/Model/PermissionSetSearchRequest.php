<?php

namespace PicturePark\API\Model;

class PermissionSetSearchRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The string used to query the data. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    protected $searchString;
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied in the specified order.
     *
     * @var list<string>|null
     */
    protected $searchBehaviors;
    /**
     * 
     *
     * @var list<SortInfo>|null
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
     * 
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * Filters based on the PermissionSetRight of the user.
     *
     * @var mixed|null
     */
    protected $rightFilter;
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the result.
    Warning! It severely affects performance.
    *
    * @var bool
    */
    protected $debugMode = false;
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages defined in the system are used.
    *
    * @var list<string>|null
    */
    protected $searchLanguages;
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
        $this->initialized['searchString'] = true;
        $this->searchString = $searchString;
        return $this;
    }
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied in the specified order.
     *
     * @return list<string>|null
     */
    public function getSearchBehaviors() : ?array
    {
        return $this->searchBehaviors;
    }
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied in the specified order.
     *
     * @param list<string>|null $searchBehaviors
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
     * 
     *
     * @return list<SortInfo>|null
     */
    public function getSort() : ?array
    {
        return $this->sort;
    }
    /**
     * 
     *
     * @param list<SortInfo>|null $sort
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
     * 
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * 
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
     * Filters based on the PermissionSetRight of the user.
     *
     * @return mixed
     */
    public function getRightFilter()
    {
        return $this->rightFilter;
    }
    /**
     * Filters based on the PermissionSetRight of the user.
     *
     * @param mixed $rightFilter
     *
     * @return self
     */
    public function setRightFilter($rightFilter) : self
    {
        $this->initialized['rightFilter'] = true;
        $this->rightFilter = $rightFilter;
        return $this;
    }
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the result.
    Warning! It severely affects performance.
    *
    * @return bool
    */
    public function getDebugMode() : bool
    {
        return $this->debugMode;
    }
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the result.
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
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages defined in the system are used.
    *
    * @return list<string>|null
    */
    public function getSearchLanguages() : ?array
    {
        return $this->searchLanguages;
    }
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages defined in the system are used.
    *
    * @param list<string>|null $searchLanguages
    *
    * @return self
    */
    public function setSearchLanguages(?array $searchLanguages) : self
    {
        $this->initialized['searchLanguages'] = true;
        $this->searchLanguages = $searchLanguages;
        return $this;
    }
}