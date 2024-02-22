<?php

namespace PicturePark\API\Model;

class BusinessProcessSearchRequest
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
     * An optional search filter. Limits the document result set.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    protected $searchString;
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied.
     *
     * @var list<string>|null
     */
    protected $searchBehaviors;
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the BusinessProcessSearchResult.
    Warning! It severely affects performance.
    *
    * @var bool
    */
    protected $debugMode = false;
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
     * @return list<string>|null
     */
    public function getSearchBehaviors() : ?array
    {
        return $this->searchBehaviors;
    }
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied.
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
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the BusinessProcessSearchResult.
    Warning! It severely affects performance.
    *
    * @return bool
    */
    public function getDebugMode() : bool
    {
        return $this->debugMode;
    }
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the BusinessProcessSearchResult.
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
}