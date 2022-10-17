<?php

namespace Github\Model;

class ReposOwnerRepoActionsRunsRunIdJobsGetResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @var Job[]
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
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return Job[]
     */
    public function getJobs() : array
    {
        return $this->jobs;
    }
    /**
     * 
     *
     * @param Job[] $jobs
     *
     * @return self
     */
    public function setJobs(array $jobs) : self
    {
        $this->jobs = $jobs;
        return $this;
    }
}