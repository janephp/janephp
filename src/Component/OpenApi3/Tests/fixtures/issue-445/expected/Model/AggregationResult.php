<?php

namespace PicturePark\API\Model;

class AggregationResult
{
    /**
     * Name of the aggregation.
     *
     * @var string
     */
    public string $name;
    /**
     * When there are lots of unique terms, Elastic Search only returns the top terms; this number is the sum of the document counts for all buckets that are not part of the response.
     *
     * @var int|null
     */
    public ?int $sumOtherDocCount;
    /**
     * Items returned for the aggregation. Each item consists of a bucket with the matched value and the number of matches.
     * Optionally inner aggregations for further drill down can be available.
     *
     * @var list<AggregationResultItem>|null
     */
    public ?array $aggregationResultItems;
}