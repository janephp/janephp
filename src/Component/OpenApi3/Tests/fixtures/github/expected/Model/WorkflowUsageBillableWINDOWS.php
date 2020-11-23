<?php

namespace Github\Model;

class WorkflowUsageBillableWINDOWS
{
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
        $this->totalMs = $totalMs;
        return $this;
    }
}