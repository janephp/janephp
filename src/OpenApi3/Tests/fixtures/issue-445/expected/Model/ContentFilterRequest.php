<?php

namespace PicturePark\API\Model;

class ContentFilterRequest
{
    /**
     * Limits the simple search fields to the fields available in the specified channel.
     *
     * @var string|null
     */
    protected $channelId;
    /**
     * Only searches the specified language values. Defaults to all metadata languages of the language configuration.
     *
     * @var string[]|null
     */
    protected $searchLanguages;
    /**
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    protected $searchString;
    /**
     * Type of search to be performed: against metadata, extracted fulltext from documents or both. Default to Metadata.
     *
     * @var mixed
     */
    protected $searchType;
    /**
     * The collection id.
     *
     * @var string|null
     */
    protected $collectionId;
    /**
     * An optional search filter. Limits the content document result set.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * Limits the content document result set to that life cycle state. Defaults to ActiveOnly.
     *
     * @var mixed
     */
    protected $lifeCycleFilter;
    /**
     * Filter the content document result set to those that have or not have broken references
     *
     * @var mixed
     */
    protected $brokenDependenciesFilter;
    /**
     * Limits the content document result set to specific ContentRights the user has
     *
     * @var string[]|null
     */
    protected $rightsFilter;
    /**
     * Limits the simple search fields to the fields available in the specified channel.
     *
     * @return string|null
     */
    public function getChannelId() : ?string
    {
        return $this->channelId;
    }
    /**
     * Limits the simple search fields to the fields available in the specified channel.
     *
     * @param string|null $channelId
     *
     * @return self
     */
    public function setChannelId(?string $channelId) : self
    {
        $this->channelId = $channelId;
        return $this;
    }
    /**
     * Only searches the specified language values. Defaults to all metadata languages of the language configuration.
     *
     * @return string[]|null
     */
    public function getSearchLanguages() : ?array
    {
        return $this->searchLanguages;
    }
    /**
     * Only searches the specified language values. Defaults to all metadata languages of the language configuration.
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
     * Type of search to be performed: against metadata, extracted fulltext from documents or both. Default to Metadata.
     *
     * @return mixed
     */
    public function getSearchType()
    {
        return $this->searchType;
    }
    /**
     * Type of search to be performed: against metadata, extracted fulltext from documents or both. Default to Metadata.
     *
     * @param mixed $searchType
     *
     * @return self
     */
    public function setSearchType($searchType) : self
    {
        $this->searchType = $searchType;
        return $this;
    }
    /**
     * The collection id.
     *
     * @return string|null
     */
    public function getCollectionId() : ?string
    {
        return $this->collectionId;
    }
    /**
     * The collection id.
     *
     * @param string|null $collectionId
     *
     * @return self
     */
    public function setCollectionId(?string $collectionId) : self
    {
        $this->collectionId = $collectionId;
        return $this;
    }
    /**
     * An optional search filter. Limits the content document result set.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional search filter. Limits the content document result set.
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
     * Limits the content document result set to that life cycle state. Defaults to ActiveOnly.
     *
     * @return mixed
     */
    public function getLifeCycleFilter()
    {
        return $this->lifeCycleFilter;
    }
    /**
     * Limits the content document result set to that life cycle state. Defaults to ActiveOnly.
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
     * Filter the content document result set to those that have or not have broken references
     *
     * @return mixed
     */
    public function getBrokenDependenciesFilter()
    {
        return $this->brokenDependenciesFilter;
    }
    /**
     * Filter the content document result set to those that have or not have broken references
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
     * Limits the content document result set to specific ContentRights the user has
     *
     * @return string[]|null
     */
    public function getRightsFilter() : ?array
    {
        return $this->rightsFilter;
    }
    /**
     * Limits the content document result set to specific ContentRights the user has
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