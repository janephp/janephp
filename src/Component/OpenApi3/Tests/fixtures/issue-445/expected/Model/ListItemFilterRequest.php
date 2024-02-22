<?php

namespace PicturePark\API\Model;

class ListItemFilterRequest
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
     * An optional filter to limit the list items.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * Broadens the search to include all schema descendant list items.
     *
     * @var bool
     */
    protected $includeAllSchemaChildren;
    /**
     * Limits the search among the list items of the provided schemas.
     *
     * @var list<string>|null
     */
    protected $schemaIds;
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages defined in the system are used.
    *
    * @var list<string>|null
    */
    protected $searchLanguages;
    /**
     * Limits the search to the list items that have or not have broken references. By default it includes both.
     *
     * @var mixed
     */
    protected $brokenDependenciesFilter = 'All';
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
     * An optional filter to limit the list items.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional filter to limit the list items.
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
        $this->initialized['includeAllSchemaChildren'] = true;
        $this->includeAllSchemaChildren = $includeAllSchemaChildren;
        return $this;
    }
    /**
     * Limits the search among the list items of the provided schemas.
     *
     * @return list<string>|null
     */
    public function getSchemaIds() : ?array
    {
        return $this->schemaIds;
    }
    /**
     * Limits the search among the list items of the provided schemas.
     *
     * @param list<string>|null $schemaIds
     *
     * @return self
     */
    public function setSchemaIds(?array $schemaIds) : self
    {
        $this->initialized['schemaIds'] = true;
        $this->schemaIds = $schemaIds;
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
    /**
     * Limits the search to the list items that have or not have broken references. By default it includes both.
     *
     * @return mixed
     */
    public function getBrokenDependenciesFilter()
    {
        return $this->brokenDependenciesFilter;
    }
    /**
     * Limits the search to the list items that have or not have broken references. By default it includes both.
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
}