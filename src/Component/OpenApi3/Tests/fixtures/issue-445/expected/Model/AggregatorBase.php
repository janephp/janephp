<?php

namespace PicturePark\API\Model;

class AggregatorBase
{
    /**
     * The slug name of the aggregation. It must be unique per aggregation request.
     *
     * @var string
     */
    public string $name;
    /**
     * Language specific field names.
     *
     * @var array<string, string>|null
     */
    public ?iterable $names;
    /**
     * An optional aggregator list for nested aggregations.
     *
     * @var list<AggregatorBase>|null
     */
    public ?array $aggregators;
    /**
     * An optional filter to limit the data set the aggregation is operation on.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
    /**
     * @var string
     */
    public string $kind;
}