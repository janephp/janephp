<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class OrFilter extends FilterBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The filters to put in "or". All kinds of filters are accepted.
     *
     * @var list<FilterBase>|null
     */
    protected $filters;
    /**
     * The filters to put in "or". All kinds of filters are accepted.
     *
     * @return list<FilterBase>|null
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }
    /**
     * The filters to put in "or". All kinds of filters are accepted.
     *
     * @param list<FilterBase>|null $filters
     *
     * @return self
     */
    public function setFilters(?array $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['filters' => ['filters', 'getFilters', 'setFilters']];
    }
}