<?php

namespace PicturePark\API\Model;

class ListItemReferencesRequest
{
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @var mixed|null
     */
    protected $references;
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @return mixed
     */
    public function getReferences()
    {
        return $this->references;
    }
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @param mixed $references
     *
     * @return self
     */
    public function setReferences($references) : self
    {
        $this->references = $references;
        return $this;
    }
}