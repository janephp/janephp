<?php

namespace PicturePark\API\Model;

class NotFilter extends FilterBase
{
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
    public function setFilter($filter) : self
    {
        $this->filter = $filter;
        return $this;
    }
}