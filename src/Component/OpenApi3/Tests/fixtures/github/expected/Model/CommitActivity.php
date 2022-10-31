<?php

namespace Github\Model;

class CommitActivity extends \ArrayObject
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
     * @var int[]
     */
    protected $days;
    /**
     * 
     *
     * @var int
     */
    protected $total;
    /**
     * 
     *
     * @var int
     */
    protected $week;
    /**
     * 
     *
     * @return int[]
     */
    public function getDays() : array
    {
        return $this->days;
    }
    /**
     * 
     *
     * @param int[] $days
     *
     * @return self
     */
    public function setDays(array $days) : self
    {
        $this->initialized['days'] = true;
        $this->days = $days;
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
    /**
     * 
     *
     * @return int
     */
    public function getWeek() : int
    {
        return $this->week;
    }
    /**
     * 
     *
     * @param int $week
     *
     * @return self
     */
    public function setWeek(int $week) : self
    {
        $this->initialized['week'] = true;
        $this->week = $week;
        return $this;
    }
}