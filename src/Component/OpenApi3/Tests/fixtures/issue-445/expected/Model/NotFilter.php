<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NotFilter extends FilterBase implements AdditionalPropertiesInterface
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
     * The filter to be negated.
     *
     * @var FilterBase
     */
    protected $filter;
    /**
     * The filter to be negated.
     *
     * @return FilterBase
     */
    public function getFilter(): FilterBase
    {
        return $this->filter;
    }
    /**
     * The filter to be negated.
     *
     * @param FilterBase $filter
     *
     * @return self
     */
    public function setFilter(FilterBase $filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['filter' => ['filter', 'getFilter', 'setFilter']];
    }
}