<?php

namespace Github\Model;

class RateLimit extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['limit'] = true;
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
        $this->initialized['remaining'] = true;
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
        $this->initialized['reset'] = true;
        $this->reset = $reset;
        return $this;
    }
}