<?php

namespace PicturePark\API\Model;

class ContentReferencesRequest
{
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @var mixed|null
     */
    protected $references;
    /**
     * Limits the number of the returned share references by setting paging information.
     *
     * @var mixed|null
     */
    protected $shares;
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
    /**
     * Limits the number of the returned share references by setting paging information.
     *
     * @return mixed
     */
    public function getShares()
    {
        return $this->shares;
    }
    /**
     * Limits the number of the returned share references by setting paging information.
     *
     * @param mixed $shares
     *
     * @return self
     */
    public function setShares($shares) : self
    {
        $this->shares = $shares;
        return $this;
    }
}