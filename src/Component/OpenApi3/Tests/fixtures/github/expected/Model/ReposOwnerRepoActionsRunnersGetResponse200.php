<?php

namespace Github\Model;

class ReposOwnerRepoActionsRunnersGetResponse200 extends \ArrayObject
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
     * @var Runner[]
     */
    protected $runners;
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
     * @return Runner[]
     */
    public function getRunners() : array
    {
        return $this->runners;
    }
    /**
     * 
     *
     * @param Runner[] $runners
     *
     * @return self
     */
    public function setRunners(array $runners) : self
    {
        $this->runners = $runners;
        return $this;
    }
}