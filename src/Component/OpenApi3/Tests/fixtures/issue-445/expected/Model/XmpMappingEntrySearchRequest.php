<?php

namespace PicturePark\API\Model;

class XmpMappingEntrySearchRequest
{
    /**
     * Enable debug mode to get as result of the Searched additional debug information. Warning! Severely affects performance.
     *
     * @var bool
     */
    public bool $debugMode = false;
    /**
     * Special filters used to filter down independently the aggregations' values and the search results on specific conditions.
     * For the search results, the aggregation filters are used to create a Filter that is put in AND with the eventual existing Filter of the search request to nail down the search results. The filters generated
     * by the aggregation filters are put in OR each other if they have the same AggregationName, and then such groups are put in AND.
     * For the aggregation values, only the original Filter of the search request is used to nail down the data to be considered for the aggregations. Then, on top of that, for each aggregator in the search request, a Filter is created to filter down the
     * aggregation results of that aggregation: depending if the AggregationName of the AggregationFilter matches the AggregationName of the Aggregator, the filter is put in OR (if it matches) or in AND (if it does not match it).
     * Moreover, an AggregationFilter ensures that the related value is returned in the AggregationResults also if the top aggregation values returned by default do not contain it.
     *
     * @var list<AggregationFilter>|null
     */
    public ?array $aggregationFilters;
    /**
     * List of aggregators that defines how the items should be aggregated.
     *
     * @var list<AggregatorBase>|null
     */
    public ?array $aggregators;
    /**
     * An optional search filter. Limits the document result set.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
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
     * Fields and respective directions requested to sort the search results. Sorting on a not indexed field will throw an exception.
     *
     * @var list<SortInfo>|null
     */
    public ?array $sort;
}