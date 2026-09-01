<?php

namespace PicturePark\API\Model;

class AggregationResultItem
{
    /**
     * Value matched.
     *
     * @var string
     */
    public string $name;
    /**
     * Number of items matched.
     *
     * @var int
     */
    public int $count;
    /**
     * Ready to use filter to filter the data based on the aggregation result values.
     * It can be passed as one of the aggregation filters of an aggregation query: it returns documents meeting the aggregation condition.
     *
     * @var AggregationFilter|null
     */
    public ?AggregationFilter $filter;
    /**
     * True if the current result item matches on of the aggregation filters sent in the query.
     *
     * @var bool
     */
    public bool $active;
    /**
     * Inner aggregation results, if inner aggregations were provided in the query.
     *
     * @var list<AggregationResult>|null
     */
    public ?array $aggregationResults;
}