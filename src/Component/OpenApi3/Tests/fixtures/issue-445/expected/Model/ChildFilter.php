<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ChildFilter extends FilterBase implements AdditionalPropertiesInterface
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
     * The type of the child document.
     *
     * @var string
     */
    protected $childType;
    /**
     * The filter to be applied on the child document. All kinds of filters are accepted.
     *
     * @var FilterBase
     */
    protected $filter;
    /**
     * The type of the child document.
     *
     * @return string
     */
    public function getChildType(): string
    {
        return $this->childType;
    }
    /**
     * The type of the child document.
     *
     * @param string $childType
     *
     * @return self
     */
    public function setChildType(string $childType): self
    {
        $this->initialized['childType'] = true;
        $this->childType = $childType;
        return $this;
    }
    /**
     * The filter to be applied on the child document. All kinds of filters are accepted.
     *
     * @return FilterBase
     */
    public function getFilter(): FilterBase
    {
        return $this->filter;
    }
    /**
     * The filter to be applied on the child document. All kinds of filters are accepted.
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
        return ['childType' => ['childType', 'getChildType', 'setChildType'], 'filter' => ['filter', 'getFilter', 'setFilter']];
    }
}