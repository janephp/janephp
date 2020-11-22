<?php

namespace Github\Model;

class SearchTopicsGetResponse200
{
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
        $this->items = $items;
        return $this;
    }
}