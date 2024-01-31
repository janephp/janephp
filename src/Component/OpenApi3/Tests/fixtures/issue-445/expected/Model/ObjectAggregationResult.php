<?php

namespace PicturePark\API\Model;

class ObjectAggregationResult
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
     * How long did the search and aggregation took.
     *
     * @var int
     */
    protected $elapsedMilliseconds;
    /**
     * Results of the aggregation.
     *
     * @var AggregationResult[]
     */
    protected $aggregationResults;
    /**
     * Search string used to query the data
     *
     * @var string|null
     */
    protected $searchString;
    /**
     * Flag to notify if the SearchString was modified compared to the original requested one.
     *
     * @var bool
     */
    protected $isSearchStringRewritten;
    /**
     * Additional information regarding the query execution and reason of the matched documents. Multiple items are returned if multiple queries were performed.
     *
     * @var QueryDebugInformation[]|null
     */
    protected $queryDebugInformation;
    /**
     * How long did the search and aggregation took.
     *
     * @return int
     */
    public function getElapsedMilliseconds() : int
    {
        return $this->elapsedMilliseconds;
    }
    /**
     * How long did the search and aggregation took.
     *
     * @param int $elapsedMilliseconds
     *
     * @return self
     */
    public function setElapsedMilliseconds(int $elapsedMilliseconds) : self
    {
        $this->initialized['elapsedMilliseconds'] = true;
        $this->elapsedMilliseconds = $elapsedMilliseconds;
        return $this;
    }
    /**
     * Results of the aggregation.
     *
     * @return AggregationResult[]
     */
    public function getAggregationResults() : array
    {
        return $this->aggregationResults;
    }
    /**
     * Results of the aggregation.
     *
     * @param AggregationResult[] $aggregationResults
     *
     * @return self
     */
    public function setAggregationResults(array $aggregationResults) : self
    {
        $this->initialized['aggregationResults'] = true;
        $this->aggregationResults = $aggregationResults;
        return $this;
    }
    /**
     * Search string used to query the data
     *
     * @return string|null
     */
    public function getSearchString() : ?string
    {
        return $this->searchString;
    }
    /**
     * Search string used to query the data
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
     * Flag to notify if the SearchString was modified compared to the original requested one.
     *
     * @return bool
     */
    public function getIsSearchStringRewritten() : bool
    {
        return $this->isSearchStringRewritten;
    }
    /**
     * Flag to notify if the SearchString was modified compared to the original requested one.
     *
     * @param bool $isSearchStringRewritten
     *
     * @return self
     */
    public function setIsSearchStringRewritten(bool $isSearchStringRewritten) : self
    {
        $this->initialized['isSearchStringRewritten'] = true;
        $this->isSearchStringRewritten = $isSearchStringRewritten;
        return $this;
    }
    /**
     * Additional information regarding the query execution and reason of the matched documents. Multiple items are returned if multiple queries were performed.
     *
     * @return QueryDebugInformation[]|null
     */
    public function getQueryDebugInformation() : ?array
    {
        return $this->queryDebugInformation;
    }
    /**
     * Additional information regarding the query execution and reason of the matched documents. Multiple items are returned if multiple queries were performed.
     *
     * @param QueryDebugInformation[]|null $queryDebugInformation
     *
     * @return self
     */
    public function setQueryDebugInformation(?array $queryDebugInformation) : self
    {
        $this->initialized['queryDebugInformation'] = true;
        $this->queryDebugInformation = $queryDebugInformation;
        return $this;
    }
}