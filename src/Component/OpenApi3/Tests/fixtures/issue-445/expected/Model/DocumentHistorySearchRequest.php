<?php

namespace PicturePark\API\Model;

class DocumentHistorySearchRequest
{
    /**
     * Limits the start date of the search request. By default no limitation set.
     *
     * @var \DateTime
     */
    public \DateTime $from;
    /**
     * Limits the end date of the search request. By default no limitation set.
     *
     * @var \DateTime
     */
    public \DateTime $to;
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @var int
     */
    public int $limit = 30;
    /**
     * To get a large amount of data, page token returned from the response can be used to get all data.
     *
     * @var string|null
     */
    public ?string $pageToken;
    /**
     * Limits the search to a specific document ID. E.g. contentId
     *
     * @var string|null
     */
    public ?string $documentId;
    /**
     * The document version to search. Default to -1 to not limit to a specific document version.
     *
     * @var int
     */
    public int $documentVersion = -1;
    /**
     * Limits the search to a specific document type.
     *
     * @var string|null
     */
    public ?string $documentType;
    /**
     * Sorts the search results. Sorting on a not indexed field will throw an exception.
     *
     * @var list<SortInfo>|null
     */
    public ?array $sort;
}