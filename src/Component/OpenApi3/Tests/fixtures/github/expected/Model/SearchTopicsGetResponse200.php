<?php

namespace Github\Model;

class SearchTopicsGetResponse200 extends \ArrayObject
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
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @var bool
     */
    protected $incompleteResults;
    /**
     * 
     *
     * @var TopicSearchResultItem[]
     */
    protected $items;
    /**
     * 
     *
     * @return int
     */
    public function getTotalCount() : int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount) : self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIncompleteResults() : bool
    {
        return $this->incompleteResults;
    }
    /**
     * 
     *
     * @param bool $incompleteResults
     *
     * @return self
     */
    public function setIncompleteResults(bool $incompleteResults) : self
    {
        $this->initialized['incompleteResults'] = true;
        $this->incompleteResults = $incompleteResults;
        return $this;
    }
    /**
     * 
     *
     * @return TopicSearchResultItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param TopicSearchResultItem[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}