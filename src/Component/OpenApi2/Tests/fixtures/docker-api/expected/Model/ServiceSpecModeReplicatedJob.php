<?php

namespace Docker\Api\Model;

class ServiceSpecModeReplicatedJob
{
    /**
     * The maximum number of replicas to run simultaneously.
     *
     * @var int
     */
    protected $maxConcurrent = 1;
    /**
    * The total number of replicas desired to reach the Completed
    state. If unset, will default to the value of `MaxConcurrent`
    
    *
    * @var int
    */
    protected $totalCompletions;
    /**
     * The maximum number of replicas to run simultaneously.
     *
     * @return int
     */
    public function getMaxConcurrent() : int
    {
        return $this->maxConcurrent;
    }
    /**
     * The maximum number of replicas to run simultaneously.
     *
     * @param int $maxConcurrent
     *
     * @return self
     */
    public function setMaxConcurrent(int $maxConcurrent) : self
    {
        $this->maxConcurrent = $maxConcurrent;
        return $this;
    }
    /**
    * The total number of replicas desired to reach the Completed
    state. If unset, will default to the value of `MaxConcurrent`
    
    *
    * @return int
    */
    public function getTotalCompletions() : int
    {
        return $this->totalCompletions;
    }
    /**
    * The total number of replicas desired to reach the Completed
    state. If unset, will default to the value of `MaxConcurrent`
    
    *
    * @param int $totalCompletions
    *
    * @return self
    */
    public function setTotalCompletions(int $totalCompletions) : self
    {
        $this->totalCompletions = $totalCompletions;
        return $this;
    }
}