<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonQueryCriteria
{
    /**
     * @var mixed
     */
    public $filters;
    /**
     * @var mixed
     */
    public $extraFilters;
    /**
     * @var mixed
     */
    public $extraNotFilters;
    /**
     * @var mixed
     */
    public $options;
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