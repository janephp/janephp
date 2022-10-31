<?php

namespace Docker\Api\Model;

class ProgressDetail
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
    protected $current;
    /**
     * 
     *
     * @var int
     */
    protected $total;
    /**
     * 
     *
     * @return int
     */
    public function getCurrent() : int
    {
        return $this->current;
    }
    /**
     * 
     *
     * @param int $current
     *
     * @return self
     */
    public function setCurrent(int $current) : self
    {
        $this->initialized['current'] = true;
        $this->current = $current;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}