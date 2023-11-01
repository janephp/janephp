<?php

namespace Github\Model;

class ReposOwnerRepoCommitsRefCheckSuitesGetResponse200 extends \ArrayObject
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
        $this->initialized['totalCount'] = true;
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
        $this->initialized['checkSuites'] = true;
        $this->checkSuites = $checkSuites;
        return $this;
    }
}