<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ParentFilter extends FilterBase implements AdditionalPropertiesInterface
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
     * The type of the parent document.
     *
     * @var string
     */
    protected $parentType;
    /**
     * The filter to be applied on the child document. All kinds of filters are accepted.
     *
     * @var FilterBase
     */
    protected $filter;
    /**
     * The type of the parent document.
     *
     * @return string
     */
    public function getParentType(): string
    {
        return $this->parentType;
    }
    /**
     * The type of the parent document.
     *
     * @param string $parentType
     *
     * @return self
     */
    public function setParentType(string $parentType): self
    {
        $this->initialized['parentType'] = true;
        $this->parentType = $parentType;
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
        return ['parentType' => ['parentType', 'getParentType', 'setParentType'], 'filter' => ['filter', 'getFilter', 'setFilter']];
    }
}