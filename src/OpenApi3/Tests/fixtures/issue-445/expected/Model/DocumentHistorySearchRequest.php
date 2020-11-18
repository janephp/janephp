<?php

namespace PicturePark\API\Model;

class DocumentHistorySearchRequest
{
    /**
     * Limits the start date of the search request. By default no limitation set.
     *
     * @var \DateTime
     */
    protected $from;
    /**
     * Limits the end date of the search request. By default no limitation set.
     *
     * @var \DateTime
     */
    protected $to;
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @var int
     */
    protected $limit = 30;
    /**
     * To get a large amount of data, page token returned from the response can be used to get all data.
     *
     * @var string|null
     */
    protected $pageToken;
    /**
     * Limits the search to a specific document ID. E.g. contentId
     *
     * @var string|null
     */
    protected $documentId;
    /**
     * The document version to search. Default to -1 to not limit to a specific document version.
     *
     * @var int
     */
    protected $documentVersion = -1;
    /**
     * Limits the search to a specific document type.
     *
     * @var string|null
     */
    protected $documentType;
    /**
     * Sorts the search results. Sorting on a not indexed field will throw an exception.
     *
     * @var SortInfo[]|null
     */
    protected $sort;
    /**
     * Limits the start date of the search request. By default no limitation set.
     *
     * @return \DateTime
     */
    public function getFrom() : \DateTime
    {
        return $this->from;
    }
    /**
     * Limits the start date of the search request. By default no limitation set.
     *
     * @param \DateTime $from
     *
     * @return self
     */
    public function setFrom(\DateTime $from) : self
    {
        $this->from = $from;
        return $this;
    }
    /**
     * Limits the end date of the search request. By default no limitation set.
     *
     * @return \DateTime
     */
    public function getTo() : \DateTime
    {
        return $this->to;
    }
    /**
     * Limits the end date of the search request. By default no limitation set.
     *
     * @param \DateTime $to
     *
     * @return self
     */
    public function setTo(\DateTime $to) : self
    {
        $this->to = $to;
        return $this;
    }
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit) : self
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * To get a large amount of data, page token returned from the response can be used to get all data.
     *
     * @return string|null
     */
    public function getPageToken() : ?string
    {
        return $this->pageToken;
    }
    /**
     * To get a large amount of data, page token returned from the response can be used to get all data.
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
     * Limits the search to a specific document ID. E.g. contentId
     *
     * @return string|null
     */
    public function getDocumentId() : ?string
    {
        return $this->documentId;
    }
    /**
     * Limits the search to a specific document ID. E.g. contentId
     *
     * @param string|null $documentId
     *
     * @return self
     */
    public function setDocumentId(?string $documentId) : self
    {
        $this->documentId = $documentId;
        return $this;
    }
    /**
     * The document version to search. Default to -1 to not limit to a specific document version.
     *
     * @return int
     */
    public function getDocumentVersion() : int
    {
        return $this->documentVersion;
    }
    /**
     * The document version to search. Default to -1 to not limit to a specific document version.
     *
     * @param int $documentVersion
     *
     * @return self
     */
    public function setDocumentVersion(int $documentVersion) : self
    {
        $this->documentVersion = $documentVersion;
        return $this;
    }
    /**
     * Limits the search to a specific document type.
     *
     * @return string|null
     */
    public function getDocumentType() : ?string
    {
        return $this->documentType;
    }
    /**
     * Limits the search to a specific document type.
     *
     * @param string|null $documentType
     *
     * @return self
     */
    public function setDocumentType(?string $documentType) : self
    {
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * Sorts the search results. Sorting on a not indexed field will throw an exception.
     *
     * @return SortInfo[]|null
     */
    public function getSort() : ?array
    {
        return $this->sort;
    }
    /**
     * Sorts the search results. Sorting on a not indexed field will throw an exception.
     *
     * @param SortInfo[]|null $sort
     *
     * @return self
     */
    public function setSort(?array $sort) : self
    {
        $this->sort = $sort;
        return $this;
    }
}