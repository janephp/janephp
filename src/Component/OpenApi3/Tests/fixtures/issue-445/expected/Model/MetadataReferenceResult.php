<?php

namespace PicturePark\API\Model;

class MetadataReferenceResult extends \ArrayObject
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
     * The total number of matching documents.
     *
     * @var int
     */
    protected $totalResults;
    /**
     * The matched documents.
     *
     * @var list<MetadataReference>
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
     * Indicates if any reference is originating from an item that the current user does not have access to.
     *
     * @var bool|null
     */
    protected $isReferencedByRestrictedItem;
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
        $this->initialized['totalResults'] = true;
        $this->totalResults = $totalResults;
        return $this;
    }
    /**
     * The matched documents.
     *
     * @return list<MetadataReference>
     */
    public function getResults() : array
    {
        return $this->results;
    }
    /**
     * The matched documents.
     *
     * @param list<MetadataReference> $results
     *
     * @return self
     */
    public function setResults(array $results) : self
    {
        $this->initialized['results'] = true;
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
        $this->initialized['elapsedMilliseconds'] = true;
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
        $this->initialized['pageToken'] = true;
        $this->pageToken = $pageToken;
        return $this;
    }
    /**
     * Indicates if any reference is originating from an item that the current user does not have access to.
     *
     * @return bool|null
     */
    public function getIsReferencedByRestrictedItem() : ?bool
    {
        return $this->isReferencedByRestrictedItem;
    }
    /**
     * Indicates if any reference is originating from an item that the current user does not have access to.
     *
     * @param bool|null $isReferencedByRestrictedItem
     *
     * @return self
     */
    public function setIsReferencedByRestrictedItem(?bool $isReferencedByRestrictedItem) : self
    {
        $this->initialized['isReferencedByRestrictedItem'] = true;
        $this->isReferencedByRestrictedItem = $isReferencedByRestrictedItem;
        return $this;
    }
}