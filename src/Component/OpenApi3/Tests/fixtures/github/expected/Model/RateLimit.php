<?php

namespace Github\Model;

class RateLimit extends \ArrayObject
{
    /**
     * 
     *
     * @var int
     */
    protected $limit;
    /**
     * 
     *
     * @var int
     */
    protected $remaining;
    /**
     * 
     *
     * @var int
     */
    protected $reset;
    /**
     * 
     *
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }
    /**
     * 
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit) : self
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRemaining() : int
    {
        return $this->remaining;
    }
    /**
     * 
     *
     * @param int $remaining
     *
     * @return self
     */
    public function setRemaining(int $remaining) : self
    {
        $this->remaining = $remaining;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReset() : int
    {
        return $this->reset;
    }
    /**
     * 
     *
     * @param int $reset
     *
     * @return self
     */
    public function setReset(int $reset) : self
    {
        $this->reset = $reset;
        return $this;
    }
}