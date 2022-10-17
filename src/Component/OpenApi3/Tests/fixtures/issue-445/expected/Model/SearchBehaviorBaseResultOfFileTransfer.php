<?php

namespace PicturePark\API\Model;

class SearchBehaviorBaseResultOfFileTransfer extends \ArrayObject
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
     * @var FileTransfer[]
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
     * The search string used to query the data.
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
     * @return FileTransfer[]
     */
    public function getResults() : array
    {
        return $this->results;
    }
    /**
     * The matched documents.
     *
     * @param FileTransfer[] $results
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
    /**
     * The search string used to query the data.
     *
     * @return string|null
     */
    public function getSearchString() : ?string
    {
        return $this->searchString;
    }
    /**
     * The search string used to query the data.
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
        $this->queryDebugInformation = $queryDebugInformation;
        return $this;
    }
}