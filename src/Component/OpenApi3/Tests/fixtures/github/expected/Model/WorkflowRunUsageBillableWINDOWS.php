<?php

namespace Github\Model;

class WorkflowRunUsageBillableWINDOWS extends \ArrayObject
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
     * @var int
     */
    protected $jobs;
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
    /**
     * 
     *
     * @return int
     */
    public function getJobs() : int
    {
        return $this->jobs;
    }
    /**
     * 
     *
     * @param int $jobs
     *
     * @return self
     */
    public function setJobs(int $jobs) : self
    {
        $this->jobs = $jobs;
        return $this;
    }
}