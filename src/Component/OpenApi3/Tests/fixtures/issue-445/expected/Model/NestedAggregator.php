<?php

namespace PicturePark\API\Model;

class NestedAggregator extends AggregatorBase
{
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
        $this->path = $path;
        return $this;
    }
}