<?php

namespace PicturePark\API\Model;

class ListItemSearchAndAggregationBaseRequest
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
     * An optional search filter. Limits the document result set.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
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
     * Broadens the search to include all schema descendant list items.
     *
     * @var bool
     */
    public bool $includeAllSchemaChildren;
    /**
     * Limits the aggregation to the list items that have or not have broken references. By default it includes both.
     *
     * @var string
     */
    public string $brokenDependenciesFilter = 'All';
    /**
     * Limits the search among the list items of the provided schemas.
     *
     * @var list<string>|null
     */
    public ?array $schemaIds;
    /**
     * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
     * If not specified, all metadata languages defined in the system are used.
     *
     * @var list<string>|null
     */
    public ?array $searchLanguages;
    /**
     * Limits the aggregation to the list items that have the specified life cycle state. Defaults to ActiveOnly.
     *
     * @var string
     */
    public string $lifeCycleFilter = 'ActiveOnly';
}