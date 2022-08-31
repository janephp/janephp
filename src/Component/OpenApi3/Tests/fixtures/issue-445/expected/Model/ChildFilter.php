<?php

namespace PicturePark\API\Model;

class ChildFilter extends FilterBase
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * The type of the child document.
     *
     * @return string
     */
    public function getChildType() : string
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
    public function setChildType(string $childType) : self
    {
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
    public function setFilter($filter) : self
    {
        $this->filter = $filter;
        return $this;
    }
}