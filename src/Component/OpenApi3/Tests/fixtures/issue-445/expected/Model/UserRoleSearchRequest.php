<?php

namespace PicturePark\API\Model;

class UserRoleSearchRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
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
     * @var list<string>|null
     */
    protected $searchBehaviors;
    /**
     * Fields and respective directions requested to sort the search results.
     *
     * @var list<SortInfo>|null
     */
    protected $sort;
    /**
     * Limits the document count of the result set. Defaults to 30.
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
     * Filter applied to user roles.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * Enable debug mode to get as result of the Searched additional debug information. Warning! It severely affects performance.
     *
     * @var bool
     */
    protected $debugMode = false;
    /**
     * Which languages to search against when using the search string.
     *
     * @var list<string>|null
     */
    protected $searchLanguages;
    /**
     * Defines if the user roles with system user role Administrator is returned.
     *
     * @var bool
     */
    protected $includeAdministratorSystemUserRole;
    /**
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @return string|null
     */
    public function getSearchString(): ?string
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
    public function setSearchString(?string $searchString): self
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
    public function getSearchBehaviors(): ?array
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
    public function setSearchBehaviors(?array $searchBehaviors): self
    {
        $this->initialized['searchBehaviors'] = true;
        $this->searchBehaviors = $searchBehaviors;
        return $this;
    }
    /**
     * Fields and respective directions requested to sort the search results.
     *
     * @return list<SortInfo>|null
     */
    public function getSort(): ?array
    {
        return $this->sort;
    }
    /**
     * Fields and respective directions requested to sort the search results.
     *
     * @param list<SortInfo>|null $sort
     *
     * @return self
     */
    public function setSort(?array $sort): self
    {
        $this->initialized['sort'] = true;
        $this->sort = $sort;
        return $this;
    }
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): self
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
    public function getPageToken(): ?string
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
    public function setPageToken(?string $pageToken): self
    {
        $this->initialized['pageToken'] = true;
        $this->pageToken = $pageToken;
        return $this;
    }
    /**
     * Filter applied to user roles.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * Filter applied to user roles.
     *
     * @param mixed $filter
     *
     * @return self
     */
    public function setFilter($filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    /**
     * Enable debug mode to get as result of the Searched additional debug information. Warning! It severely affects performance.
     *
     * @return bool
     */
    public function getDebugMode(): bool
    {
        return $this->debugMode;
    }
    /**
     * Enable debug mode to get as result of the Searched additional debug information. Warning! It severely affects performance.
     *
     * @param bool $debugMode
     *
     * @return self
     */
    public function setDebugMode(bool $debugMode): self
    {
        $this->initialized['debugMode'] = true;
        $this->debugMode = $debugMode;
        return $this;
    }
    /**
     * Which languages to search against when using the search string.
     *
     * @return list<string>|null
     */
    public function getSearchLanguages(): ?array
    {
        return $this->searchLanguages;
    }
    /**
     * Which languages to search against when using the search string.
     *
     * @param list<string>|null $searchLanguages
     *
     * @return self
     */
    public function setSearchLanguages(?array $searchLanguages): self
    {
        $this->initialized['searchLanguages'] = true;
        $this->searchLanguages = $searchLanguages;
        return $this;
    }
    /**
     * Defines if the user roles with system user role Administrator is returned.
     *
     * @return bool
     */
    public function getIncludeAdministratorSystemUserRole(): bool
    {
        return $this->includeAdministratorSystemUserRole;
    }
    /**
     * Defines if the user roles with system user role Administrator is returned.
     *
     * @param bool $includeAdministratorSystemUserRole
     *
     * @return self
     */
    public function setIncludeAdministratorSystemUserRole(bool $includeAdministratorSystemUserRole): self
    {
        $this->initialized['includeAdministratorSystemUserRole'] = true;
        $this->includeAdministratorSystemUserRole = $includeAdministratorSystemUserRole;
        return $this;
    }
}