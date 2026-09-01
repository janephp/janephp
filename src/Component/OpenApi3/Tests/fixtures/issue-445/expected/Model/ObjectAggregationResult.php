<?php

namespace PicturePark\API\Model;

class ObjectAggregationResult
{
    /**
     * How long did the search and aggregation took.
     *
     * @var int
     */
    public int $elapsedMilliseconds;
    /**
     * Results of the aggregation.
     *
     * @var list<AggregationResult>
     */
    public array $aggregationResults;
    /**
     * Search string used to query the data
     *
     * @var string|null
     */
    public ?string $searchString;
    /**
     * Flag to notify if the SearchString was modified compared to the original requested one.
     *
     * @var bool
     */
    public bool $isSearchStringRewritten;
    /**
     * Additional information regarding the query execution and reason of the matched documents. Multiple items are returned if multiple queries were performed.
     *
     * @var list<QueryDebugInformation>|null
     */
    public ?array $queryDebugInformation;
}