<?php

namespace PicturePark\API\Model;

class NestedAggregator extends AggregatorBase
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
     * The path pointing to the nested object.
     *
     * @var string
     */
    protected $path;
    /**
     * The path pointing to the nested object.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The path pointing to the nested object.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
}