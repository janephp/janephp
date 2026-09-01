<?php

namespace PicturePark\API\Model;

class Channel
{
    /**
     * ID of channel.
     *
     * @var string
     */
    public string $id;
    /**
     * Numeric sort order of the channel. Channels are returned ordered by this field.
     *
     * @var int
     */
    public int $sortOrder;
    /**
     * The search index ID where the channel requests the content from. Only RootContentSearchIndex is supported.
     *
     * @var string
     */
    public string $searchIndexId;
    /**
     * An optional search filter. Limits the content document result set on each search and aggregation request.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
    /**
     * Language specific names.
     *
     * @var array<string, string>
     */
    public iterable $names;
    /**
     * Default sort order specified for the channel to sort the results of a content search.
     *
     * @var list<SortInfo>
     */
    public array $sort;
    /**
     * Fields to be used for sorting in content browser when displaying the channel. The information is only set and consumed by the client, not by the server.
     *
     * @var list<SortField>
     */
    public array $sortFields;
    /**
     * An optional list of aggregators. These aggregations are added by default on each aggregation requests.
     *
     * @var list<AggregatorBase>
     */
    public array $aggregations;
    /**
     * An Optional list of fields. These fields extend the list of simple search fields outside the bounds of any schema field configuration.
     *
     * @var list<string>
     */
    public array $extendedSimpleSearchFields;
    /**
     * User roles granted access to the channel.
     *
     * @var list<string>
     */
    public array $grantedUserRoleIds;
    /**
     * Display pattern to use for rendering details when 0 results are returned
     *
     * @var array<string, string>
     */
    public iterable $missingResultsDisplayPatterns;
    /**
     * Audit information.
     *
     * @var UserAudit
     */
    public UserAudit $audit;
    /**
     * Grants rights to all the users to view the channel.
     *
     * @var bool
     */
    public bool $viewForAll;
}