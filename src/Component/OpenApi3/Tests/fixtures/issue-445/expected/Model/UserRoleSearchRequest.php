<?php

namespace PicturePark\API\Model;

class UserRoleSearchRequest
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
     * Fields and respective directions requested to sort the search results.
     *
     * @var list<SortInfo>|null
     */
    public ?array $sort;
    /**
     * Limits the document count of the result set. Defaults to 30.
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
     * Filter applied to user roles.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
    /**
     * Enable debug mode to get as result of the Searched additional debug information. Warning! It severely affects performance.
     *
     * @var bool
     */
    public bool $debugMode = false;
    /**
     * Which languages to search against when using the search string.
     *
     * @var list<string>|null
     */
    public ?array $searchLanguages;
    /**
     * Defines if the user roles with system user role Administrator is returned.
     *
     * @var bool
     */
    public bool $includeAdministratorSystemUserRole;
}