<?php

namespace Github\Model;

class ScimUserList
{
    /**
     * SCIM schema used.
     *
     * @var string[]
     */
    protected $schemas;
    /**
     * 
     *
     * @var int
     */
    protected $totalResults;
    /**
     * 
     *
     * @var int
     */
    protected $itemsPerPage;
    /**
     * 
     *
     * @var int
     */
    protected $startIndex;
    /**
     * 
     *
     * @var ScimUser[]
     */
    protected $resources;
    /**
     * SCIM schema used.
     *
     * @return string[]
     */
    public function getSchemas() : array
    {
        return $this->schemas;
    }
    /**
     * SCIM schema used.
     *
     * @param string[] $schemas
     *
     * @return self
     */
    public function setSchemas(array $schemas) : self
    {
        $this->schemas = $schemas;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalResults() : int
    {
        return $this->totalResults;
    }
    /**
     * 
     *
     * @param int $totalResults
     *
     * @return self
     */
    public function setTotalResults(int $totalResults) : self
    {
        $this->totalResults = $totalResults;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getItemsPerPage() : int
    {
        return $this->itemsPerPage;
    }
    /**
     * 
     *
     * @param int $itemsPerPage
     *
     * @return self
     */
    public function setItemsPerPage(int $itemsPerPage) : self
    {
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStartIndex() : int
    {
        return $this->startIndex;
    }
    /**
     * 
     *
     * @param int $startIndex
     *
     * @return self
     */
    public function setStartIndex(int $startIndex) : self
    {
        $this->startIndex = $startIndex;
        return $this;
    }
    /**
     * 
     *
     * @return ScimUser[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
    /**
     * 
     *
     * @param ScimUser[] $resources
     *
     * @return self
     */
    public function setResources(array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
}