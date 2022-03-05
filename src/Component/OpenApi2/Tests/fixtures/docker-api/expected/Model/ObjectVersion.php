<?php

namespace Docker\Api\Model;

class ObjectVersion
{
    /**
     * 
     *
     * @var int
     */
    protected $index;
    /**
     * 
     *
     * @return int
     */
    public function getIndex() : int
    {
        return $this->index;
    }
    /**
     * 
     *
     * @param int $index
     *
     * @return self
     */
    public function setIndex(int $index) : self
    {
        $this->index = $index;
        return $this;
    }
}