<?php

namespace PicturePark\API\Model;

class MetadataReferencesPagingRequest extends \ArrayObject
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
     * Limits the number of the returned schemas. Defaults to 0.
     *
     * @var int
     */
    protected $limit;
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @var string|null
     */
    protected $pageToken;
    /**
     * Set to true to check if any incoming references are originating from an item the current user does not have full access to.
     *
     * @var bool
     */
    protected $fetchReferencedByRestrictedItem;
    /**
     * Limits the number of the returned schemas. Defaults to 0.
     *
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }
    /**
     * Limits the number of the returned schemas. Defaults to 0.
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit) : self
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
    public function getPageToken() : ?string
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
    public function setPageToken(?string $pageToken) : self
    {
        $this->initialized['pageToken'] = true;
        $this->pageToken = $pageToken;
        return $this;
    }
    /**
     * Set to true to check if any incoming references are originating from an item the current user does not have full access to.
     *
     * @return bool
     */
    public function getFetchReferencedByRestrictedItem() : bool
    {
        return $this->fetchReferencedByRestrictedItem;
    }
    /**
     * Set to true to check if any incoming references are originating from an item the current user does not have full access to.
     *
     * @param bool $fetchReferencedByRestrictedItem
     *
     * @return self
     */
    public function setFetchReferencedByRestrictedItem(bool $fetchReferencedByRestrictedItem) : self
    {
        $this->initialized['fetchReferencedByRestrictedItem'] = true;
        $this->fetchReferencedByRestrictedItem = $fetchReferencedByRestrictedItem;
        return $this;
    }
}