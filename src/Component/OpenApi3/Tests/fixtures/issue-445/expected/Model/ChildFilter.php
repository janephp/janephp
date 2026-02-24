<?php

namespace PicturePark\API\Model;

class ChildFilter extends FilterBase
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
     * The type of the child document.
     *
     * @var string
     */
    protected $childType;
    /**
     * The filter to be applied on the child document. All kinds of filters are accepted.
     *
     * @var mixed
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
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * The filter to be applied on the child document. All kinds of filters are accepted.
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
}