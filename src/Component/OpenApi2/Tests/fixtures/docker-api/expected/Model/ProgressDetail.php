<?php

namespace Docker\Api\Model;

class ProgressDetail
{
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
        $this->total = $total;
        return $this;
    }
}