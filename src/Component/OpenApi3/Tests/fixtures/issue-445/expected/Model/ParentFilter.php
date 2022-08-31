<?php

namespace PicturePark\API\Model;

class ParentFilter extends FilterBase
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * The type of the parent document.
     *
     * @var string
     */
    protected $parentType;
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
     * The type of the parent document.
     *
     * @return string
     */
    public function getParentType() : string
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
    public function setParentType(string $parentType) : self
    {
        $this->parentType = $parentType;
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