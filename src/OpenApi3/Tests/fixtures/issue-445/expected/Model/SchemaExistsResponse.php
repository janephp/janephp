<?php

namespace PicturePark\API\Model;

class SchemaExistsResponse
{
    /**
     * It indicates if it exists.
     *
     * @var bool
     */
    protected $exists;
    /**
     * It indicates if it exists.
     *
     * @return bool
     */
    public function getExists() : bool
    {
        return $this->exists;
    }
    /**
     * It indicates if it exists.
     *
     * @param bool $exists
     *
     * @return self
     */
    public function setExists(bool $exists) : self
    {
        $this->exists = $exists;
        return $this;
    }
}