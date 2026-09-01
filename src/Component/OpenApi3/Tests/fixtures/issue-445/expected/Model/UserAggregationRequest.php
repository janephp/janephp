<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserAggregationRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
     * Return only users in certain life cycle state(s).
     *
     * @var string
     */
    public string $lifeCycleFilter;
    /**
     * Return only users with certain user rights.
     *
     * @var list<string>|null
     */
    public ?array $userRightsFilter;
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
     * Includes the service user in result.
     *
     * @var bool
     */
    public bool $includeServiceUser;
    /**
     * Restricts the results to users that are editable for calling user.
     * If set to true, IncludeServiceUser is ignored.
     *
     * @var bool
     */
    public bool $editableOnly;
    /**
     * List of aggregators that defines how the items should be aggregated.
     *
     * @var list<AggregatorBase>
     */
    public array $aggregators;
    public function definedProperties(): array
    {
        return ['searchString' => 'searchString', 'searchBehaviors' => 'searchBehaviors', 'filter' => 'filter', 'lifeCycleFilter' => 'lifeCycleFilter', 'userRightsFilter' => 'userRightsFilter', 'aggregationFilters' => 'aggregationFilters', 'includeServiceUser' => 'includeServiceUser', 'editableOnly' => 'editableOnly', 'aggregators' => 'aggregators'];
    }
}