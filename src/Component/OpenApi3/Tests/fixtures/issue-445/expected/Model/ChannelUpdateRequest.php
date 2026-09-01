<?php

namespace PicturePark\API\Model;

class ChannelUpdateRequest
{
    /**
     * Default sort order specified for the channel to sort the results of a content search.
     *
     * @var list<SortInfo>|null
     */
    public ?array $sort;
    /**
     * Order in which the channels should be displayed.
     *
     * @var int
     */
    public int $sortOrder;
    /**
     * Fields to be used for sorting in content browser when displaying the channel. The information is only set and consumed by the client, not by the server.
     *
     * @var list<SortField>
     */
    public array $sortFields;
    /**
     * A custom dictionary type to distinguish language specific class properties.
     *
     * @var array<string, string>
     */
    public iterable $names;
    /**
     * Language specific names.
     *
     * @var string|null
     */
    public ?string $searchIndexId;
    /**
     * User roles granted access to the channel.
     *
     * @var list<string>|null
     */
    public ?array $grantedUserRoleIds;
    /**
     * An optional list of aggregators. These aggregations are added by default on each aggregation requests.
     *
     * @var list<AggregatorBase>|null
     */
    public ?array $aggregations;
    /**
     * An optional search filter. Limits the content document result set on each search and aggregation request.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
    /**
     * An Optional list of fields. These fields extend the list of simple search fields outside the bounds of any schema field configuration.
     *
     * @var list<string>|null
     */
    public ?array $extendedSimpleSearchFields;
    /**
     * Display pattern to use for rendering details when 0 results are returned
     *
     * @var array<string, string>|null
     */
    public ?iterable $missingResultsDisplayPatterns;
    /**
     * Grants rights to all the users to view the channel.
     *
     * @var bool
     */
    public bool $viewForAll;
}