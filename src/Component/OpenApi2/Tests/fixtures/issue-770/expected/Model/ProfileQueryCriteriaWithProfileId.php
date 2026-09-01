<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileQueryCriteriaWithProfileId
{
    /**
     * Filters used to select specific resource scope
     *
     * @var list<CommonQueryCriteriaFiltersItem>
     */
    public array $filters;
    /**
     * "AND" condition for multiple filters
     *
     * @var list<ProfileQueryCriteriaWithProfileIdExtraFiltersItem>
     */
    public array $extraFilters;
    /**
     * "NOT" condition for multiple filters
     *
     * @var list<CommonQueryCriteriaExtraNotFiltersItem>
     */
    public array $extraNotFilters;
    /**
     * Specified feature required information
     *
     * @var CommonQueryCriteriaOptions
     */
    public CommonQueryCriteriaOptions $options;
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