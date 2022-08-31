<?php

namespace PicturePark\API\Model;

class NotFilter extends FilterBase
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * The filter to be negated.
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
    public function setFilter($filter) : self
    {
        $this->filter = $filter;
        return $this;
    }
}