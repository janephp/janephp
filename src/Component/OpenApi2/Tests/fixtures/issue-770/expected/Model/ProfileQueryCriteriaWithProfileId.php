<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileQueryCriteriaWithProfileId
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Filters used to select specific resource scope
     *
     * @var list<CommonQueryCriteriaFiltersItem>
     */
    protected $filters;
    /**
     * "AND" condition for multiple filters
     *
     * @var list<ProfileQueryCriteriaWithProfileIdExtraFiltersItem>
     */
    protected $extraFilters;
    /**
     * "NOT" condition for multiple filters
     *
     * @var list<CommonQueryCriteriaExtraNotFiltersItem>
     */
    protected $extraNotFilters;
    /**
     * Specified feature required information
     *
     * @var CommonQueryCriteriaOptions
     */
    protected $options;
    /**
     * @var CommonTimeRange
     */
    protected $extraTimeRange;
    /**
     * @var CommonFullTextSearch
     */
    protected $fullTextSearch;
    /**
     * Get specific columns only
     *
     * @var list<string>
     */
    protected $attributes;
    /**
     * About sorting
     *
     * @var CommonQueryCriteriaSortInfo
     */
    protected $sortInfo;
    /**
     * Page number to get
     *
     * @var int
     */
    protected $page;
    /**
     * Size of one page
     *
     * @var int
     */
    protected $limit;
    /**
     * Whether to expand domains into sub domains/ zones or not
     *
     * @var bool
     */
    protected $expandDomains;
    /**
     * Add backward compatibility for UI framework
     *
     * @var string
     */
    protected $criteria;
    /**
     * Add backward compatibility for UI framework
     *
     * @var string
     */
    protected $query;
    /**
     * Filters used to select specific resource scope
     *
     * @return list<CommonQueryCriteriaFiltersItem>
     */
    public function getFilters(): array
    {
        return $this->filters;
    }
    /**
     * Filters used to select specific resource scope
     *
     * @param list<CommonQueryCriteriaFiltersItem> $filters
     *
     * @return self
     */
    public function setFilters(array $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    /**
     * "AND" condition for multiple filters
     *
     * @return list<ProfileQueryCriteriaWithProfileIdExtraFiltersItem>
     */
    public function getExtraFilters(): array
    {
        return $this->extraFilters;
    }
    /**
     * "AND" condition for multiple filters
     *
     * @param list<ProfileQueryCriteriaWithProfileIdExtraFiltersItem> $extraFilters
     *
     * @return self
     */
    public function setExtraFilters(array $extraFilters): self
    {
        $this->initialized['extraFilters'] = true;
        $this->extraFilters = $extraFilters;
        return $this;
    }
    /**
     * "NOT" condition for multiple filters
     *
     * @return list<CommonQueryCriteriaExtraNotFiltersItem>
     */
    public function getExtraNotFilters(): array
    {
        return $this->extraNotFilters;
    }
    /**
     * "NOT" condition for multiple filters
     *
     * @param list<CommonQueryCriteriaExtraNotFiltersItem> $extraNotFilters
     *
     * @return self
     */
    public function setExtraNotFilters(array $extraNotFilters): self
    {
        $this->initialized['extraNotFilters'] = true;
        $this->extraNotFilters = $extraNotFilters;
        return $this;
    }
    /**
     * Specified feature required information
     *
     * @return CommonQueryCriteriaOptions
     */
    public function getOptions(): CommonQueryCriteriaOptions
    {
        return $this->options;
    }
    /**
     * Specified feature required information
     *
     * @param CommonQueryCriteriaOptions $options
     *
     * @return self
     */
    public function setOptions(CommonQueryCriteriaOptions $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * @return CommonTimeRange
     */
    public function getExtraTimeRange(): CommonTimeRange
    {
        return $this->extraTimeRange;
    }
    /**
     * @param CommonTimeRange $extraTimeRange
     *
     * @return self
     */
    public function setExtraTimeRange(CommonTimeRange $extraTimeRange): self
    {
        $this->initialized['extraTimeRange'] = true;
        $this->extraTimeRange = $extraTimeRange;
        return $this;
    }
    /**
     * @return CommonFullTextSearch
     */
    public function getFullTextSearch(): CommonFullTextSearch
    {
        return $this->fullTextSearch;
    }
    /**
     * @param CommonFullTextSearch $fullTextSearch
     *
     * @return self
     */
    public function setFullTextSearch(CommonFullTextSearch $fullTextSearch): self
    {
        $this->initialized['fullTextSearch'] = true;
        $this->fullTextSearch = $fullTextSearch;
        return $this;
    }
    /**
     * Get specific columns only
     *
     * @return list<string>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
    /**
     * Get specific columns only
     *
     * @param list<string> $attributes
     *
     * @return self
     */
    public function setAttributes(array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
    /**
     * About sorting
     *
     * @return CommonQueryCriteriaSortInfo
     */
    public function getSortInfo(): CommonQueryCriteriaSortInfo
    {
        return $this->sortInfo;
    }
    /**
     * About sorting
     *
     * @param CommonQueryCriteriaSortInfo $sortInfo
     *
     * @return self
     */
    public function setSortInfo(CommonQueryCriteriaSortInfo $sortInfo): self
    {
        $this->initialized['sortInfo'] = true;
        $this->sortInfo = $sortInfo;
        return $this;
    }
    /**
     * Page number to get
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
     * Page number to get
     *
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * Size of one page
     *
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * Size of one page
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * Whether to expand domains into sub domains/ zones or not
     *
     * @return bool
     */
    public function getExpandDomains(): bool
    {
        return $this->expandDomains;
    }
    /**
     * Whether to expand domains into sub domains/ zones or not
     *
     * @param bool $expandDomains
     *
     * @return self
     */
    public function setExpandDomains(bool $expandDomains): self
    {
        $this->initialized['expandDomains'] = true;
        $this->expandDomains = $expandDomains;
        return $this;
    }
    /**
     * Add backward compatibility for UI framework
     *
     * @return string
     */
    public function getCriteria(): string
    {
        return $this->criteria;
    }
    /**
     * Add backward compatibility for UI framework
     *
     * @param string $criteria
     *
     * @return self
     */
    public function setCriteria(string $criteria): self
    {
        $this->initialized['criteria'] = true;
        $this->criteria = $criteria;
        return $this;
    }
    /**
     * Add backward compatibility for UI framework
     *
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }
    /**
     * Add backward compatibility for UI framework
     *
     * @param string $query
     *
     * @return self
     */
    public function setQuery(string $query): self
    {
        $this->initialized['query'] = true;
        $this->query = $query;
        return $this;
    }
}