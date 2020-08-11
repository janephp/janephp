<?php

namespace Github\Model;

class CommitActivity
{
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
        $this->week = $week;
        return $this;
    }
}