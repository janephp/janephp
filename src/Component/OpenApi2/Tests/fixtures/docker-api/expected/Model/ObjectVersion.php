<?php

namespace Docker\Api\Model;

class ObjectVersion
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
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
}