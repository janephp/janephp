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
     * @var mixed
     */
    protected $filter;
    /**
     * The filter to be negated.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * The filter to be negated.
     *
     * @param mixed $filter
     *
     * @return self
     */
    public function setFilter($filter): self
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