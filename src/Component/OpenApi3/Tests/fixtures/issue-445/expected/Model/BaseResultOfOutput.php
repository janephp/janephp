<?php

namespace PicturePark\API\Model;

class BaseResultOfOutput
{
    /**
     * The total number of matching documents.
     *
     * @var int
     */
    protected $totalResults;
    /**
     * The matched documents.
     *
     * @var Output[]
     */
    protected $results;
    /**
     * The search execution time in milliseconds.
     *
     * @var int
     */
    protected $elapsedMilliseconds;
    /**
     * An optional token to access the next page of results for those endpoints that support backend scrolling logic.
     *
     * @var string|null
     */
    protected $pageToken;
    /**
     * The total number of matching documents.
     *
     * @return int
     */
    public function getTotalResults() : int
    {
        return $this->totalResults;
    }
    /**
     * The total number of matching documents.
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
     * The matched documents.
     *
     * @return Output[]
     */
    public function getResults() : array
    {
        return $this->results;
    }
    /**
     * The matched documents.
     *
     * @param Output[] $results
     *
     * @return self
     */
    public function setResults(array $results) : self
    {
        $this->results = $results;
        return $this;
    }
    /**
     * The search execution time in milliseconds.
     *
     * @return int
     */
    public function getElapsedMilliseconds() : int
    {
        return $this->elapsedMilliseconds;
    }
    /**
     * The search execution time in milliseconds.
     *
     * @param int $elapsedMilliseconds
     *
     * @return self
     */
    public function setElapsedMilliseconds(int $elapsedMilliseconds) : self
    {
        $this->elapsedMilliseconds = $elapsedMilliseconds;
        return $this;
    }
    /**
     * An optional token to access the next page of results for those endpoints that support backend scrolling logic.
     *
     * @return string|null
     */
    public function getPageToken() : ?string
    {
        return $this->pageToken;
    }
    /**
     * An optional token to access the next page of results for those endpoints that support backend scrolling logic.
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
}