<?php

namespace Github\Model;

class WorkflowUsageBillableWINDOWS extends \ArrayObject
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
    protected $totalMs;
    /**
     * 
     *
     * @return int
     */
    public function getTotalMs() : int
    {
        return $this->totalMs;
    }
    /**
     * 
     *
     * @param int $totalMs
     *
     * @return self
     */
    public function setTotalMs(int $totalMs) : self
    {
        $this->initialized['totalMs'] = true;
        $this->totalMs = $totalMs;
        return $this;
    }
}