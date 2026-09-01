<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApQueryQueryCriteria
{
    /**
     * Filters used to select specific resource scope
     *
     * @var list<ApQueryQueryCriteriaFiltersItem>
     */
    public array $filters;
    /**
     * "AND" condition for multiple filters
     *
     * @var list<ApQueryQueryCriteriaExtraFiltersItem>
     */
    public array $extraFilters;
    /**
     * "NOT" condition for multiple filters
     *
     * @var list<ApQueryQueryCriteriaExtraNotFiltersItem>
     */
    public array $extraNotFilters;
    /**
     * specified feature required informaion
     *
     * @var ApQueryQueryCriteriaOptions
     */
    public ApQueryQueryCriteriaOptions $options;
    /**
     * @var CommonTimeRange
     */
    public CommonTimeRange $extraTimeRange;
    /**
     * @var CommonFullTextSearch
     */
    public CommonFullTextSearch $fullTextSearch;
    /**
     * Get specific columns only
     *
     * @var list<string>
     */
    public array $attributes;
    /**
     * About sorting
     *
     * @var CommonQueryCriteriaSortInfo
     */
    public CommonQueryCriteriaSortInfo $sortInfo;
    /**
     * Page number to get
     *
     * @var int
     */
    public int $page;
    /**
     * Size of one page
     *
     * @var int
     */
    public int $limit;
    /**
     * Whether to expand domains into sub domains/ zones or not
     *
     * @var bool
     */
    public bool $expandDomains;
    /**
     * Add backward compatibility for UI framework
     *
     * @var string
     */
    public string $criteria;
    /**
     * Add backward compatibility for UI framework
     *
     * @var string
     */
    public string $query;
}