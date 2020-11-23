<?php

namespace Github\Model;

class ReposOwnerRepoCheckSuitesCheckSuiteIdCheckRunsGetResponse200
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
     * @var CheckRun[]
     */
    protected $checkRuns;
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
     * @return CheckRun[]
     */
    public function getCheckRuns() : array
    {
        return $this->checkRuns;
    }
    /**
     * 
     *
     * @param CheckRun[] $checkRuns
     *
     * @return self
     */
    public function setCheckRuns(array $checkRuns) : self
    {
        $this->checkRuns = $checkRuns;
        return $this;
    }
}