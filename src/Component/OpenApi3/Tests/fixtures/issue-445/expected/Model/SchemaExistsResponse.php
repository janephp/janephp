<?php

namespace PicturePark\API\Model;

class SchemaExistsResponse
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['exists'] = true;
        $this->exists = $exists;
        return $this;
    }
}