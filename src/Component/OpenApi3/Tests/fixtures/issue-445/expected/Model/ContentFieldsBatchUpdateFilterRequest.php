<?php

namespace PicturePark\API\Model;

class ContentFieldsBatchUpdateFilterRequest extends MetadataValuesChangeRequestBase
{
    /**
     * Filters the contents on which the change commands must be applied.
     *
     * @var mixed
     */
    protected $filterRequest;
    /**
     * Filters the contents on which the change commands must be applied.
     *
     * @return mixed
     */
    public function getFilterRequest()
    {
        return $this->filterRequest;
    }
    /**
     * Filters the contents on which the change commands must be applied.
     *
     * @param mixed $filterRequest
     *
     * @return self
     */
    public function setFilterRequest($filterRequest) : self
    {
        $this->filterRequest = $filterRequest;
        return $this;
    }
}