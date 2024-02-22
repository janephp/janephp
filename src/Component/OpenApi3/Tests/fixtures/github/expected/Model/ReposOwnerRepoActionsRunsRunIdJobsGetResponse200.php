<?php

namespace Github\Model;

class ReposOwnerRepoActionsRunsRunIdJobsGetResponse200 extends \ArrayObject
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
    protected $totalCount;
    /**
     * 
     *
     * @var list<Job>
     */
    protected $jobs;
    /**
     * 
     *
     * @return int
     */
    public function getTotalCount() : int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount) : self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return list<Job>
     */
    public function getJobs() : array
    {
        return $this->jobs;
    }
    /**
     * 
     *
     * @param list<Job> $jobs
     *
     * @return self
     */
    public function setJobs(array $jobs) : self
    {
        $this->initialized['jobs'] = true;
        $this->jobs = $jobs;
        return $this;
    }
}