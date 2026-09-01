<?php

namespace PicturePark\API\Model;

class PermissionSetSearchRequest
{
    /**
     * The string used to query the data. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    public ?string $searchString;
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied in the specified order.
     *
     * @var list<string>|null
     */
    public ?array $searchBehaviors;
    /**
     * @var list<SortInfo>|null
     */
    public ?array $sort;
    /**
     * Limits the number of the returned schemas. Defaults to 30.
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
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
    /**
     * Filters based on the PermissionSetRight of the user.
     *
     * @var string|null
     */
    public ?string $rightFilter;
    /**
     * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the result.
     * Warning! It severely affects performance.
     *
     * @var bool
     */
    public bool $debugMode = false;
    /**
     * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
     * If not specified, all metadata languages defined in the system are used.
     *
     * @var list<string>|null
     */
    public ?array $searchLanguages;
}