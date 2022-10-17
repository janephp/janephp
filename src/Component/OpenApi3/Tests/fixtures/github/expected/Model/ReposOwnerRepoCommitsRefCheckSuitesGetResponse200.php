<?php

namespace Github\Model;

class ReposOwnerRepoCommitsRefCheckSuitesGetResponse200 extends \ArrayObject
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
     * @var CheckSuite[]
     */
    protected $checkSuites;
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
     * @return CheckSuite[]
     */
    public function getCheckSuites() : array
    {
        return $this->checkSuites;
    }
    /**
     * 
     *
     * @param CheckSuite[] $checkSuites
     *
     * @return self
     */
    public function setCheckSuites(array $checkSuites) : self
    {
        $this->checkSuites = $checkSuites;
        return $this;
    }
}