<?php

namespace PicturePark\API\Model;

class ContentFieldsBatchUpdateFilterRequest extends MetadataValuesChangeRequestBase
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
    public function setFilterRequest($filterRequest): self
    {
        $this->initialized['filterRequest'] = true;
        $this->filterRequest = $filterRequest;
        return $this;
    }
}