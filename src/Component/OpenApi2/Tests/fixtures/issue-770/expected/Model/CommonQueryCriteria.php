<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonQueryCriteria
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
     * @var mixed
     */
    protected $filters;
    /**
     * @var mixed
     */
    protected $extraFilters;
    /**
     * @var mixed
     */
    protected $extraNotFilters;
    /**
     * @var mixed
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
     * @return mixed
     */
    public function getFilters()
    {
        return $this->filters;
    }
    /**
     * @param mixed $filters
     *
     * @return self
     */
    public function setFilters($filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getExtraFilters()
    {
        return $this->extraFilters;
    }
    /**
     * @param mixed $extraFilters
     *
     * @return self
     */
    public function setExtraFilters($extraFilters): self
    {
        $this->initialized['extraFilters'] = true;
        $this->extraFilters = $extraFilters;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getExtraNotFilters()
    {
        return $this->extraNotFilters;
    }
    /**
     * @param mixed $extraNotFilters
     *
     * @return self
     */
    public function setExtraNotFilters($extraNotFilters): self
    {
        $this->initialized['extraNotFilters'] = true;
        $this->extraNotFilters = $extraNotFilters;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * @param mixed $options
     *
     * @return self
     */
    public function setOptions($options): self
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