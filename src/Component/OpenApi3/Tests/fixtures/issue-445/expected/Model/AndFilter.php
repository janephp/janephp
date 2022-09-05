<?php

namespace PicturePark\API\Model;

class AndFilter extends FilterBase
{
    /**
     * The filters to put in "and". All kinds of filters are accepted.
     *
     * @var FilterBase[]|null
     */
    protected $filters;
    /**
     * The filters to put in "and". All kinds of filters are accepted.
     *
     * @return FilterBase[]|null
     */
    public function getFilters() : ?array
    {
        return $this->filters;
    }
    /**
     * The filters to put in "and". All kinds of filters are accepted.
     *
     * @param FilterBase[]|null $filters
     *
     * @return self
     */
    public function setFilters(?array $filters) : self
    {
        $this->filters = $filters;
        return $this;
    }
}