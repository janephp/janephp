<?php

namespace Github\Model;

class ReposOwnerRepoCommitsRefCheckRunsGetResponse200 extends \ArrayObject
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
     * @var list<CheckRun>
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
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return list<CheckRun>
     */
    public function getCheckRuns() : array
    {
        return $this->checkRuns;
    }
    /**
     * 
     *
     * @param list<CheckRun> $checkRuns
     *
     * @return self
     */
    public function setCheckRuns(array $checkRuns) : self
    {
        $this->initialized['checkRuns'] = true;
        $this->checkRuns = $checkRuns;
        return $this;
    }
}