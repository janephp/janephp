<?php

namespace PicturePark\API\Model;

class NotFilter extends FilterBase
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
}