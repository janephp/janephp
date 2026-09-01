<?php

namespace PicturePark\API\Model;

class TransferSearchRequest
{
    /**
     * Limits the search by using a query string filter. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    public ?string $searchString;
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied.
     *
     * @var list<string>|null
     */
    public ?array $searchBehaviors;
    /**
     * Limits the document count of the result set.
     *
     * @var int
     */
    public int $limit = 30;
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @var string|null
     */
    public ?string $pageToken;
    /**
     * An optional search filter. Limits the document result set.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
    /**
     * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the TransferSearchResult.
     * Warning! It severely affects performance.
     *
     * @var bool
     */
    public bool $debugMode = false;
}