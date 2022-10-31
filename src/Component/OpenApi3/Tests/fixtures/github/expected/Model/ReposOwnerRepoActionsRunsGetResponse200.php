<?php

namespace Github\Model;

class ReposOwnerRepoActionsRunsGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
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
     * @var WorkflowRun[]
     */
    protected $workflowRuns;
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
     * @return WorkflowRun[]
     */
    public function getWorkflowRuns() : array
    {
        return $this->workflowRuns;
    }
    /**
     * 
     *
     * @param WorkflowRun[] $workflowRuns
     *
     * @return self
     */
    public function setWorkflowRuns(array $workflowRuns) : self
    {
        $this->initialized['workflowRuns'] = true;
        $this->workflowRuns = $workflowRuns;
        return $this;
    }
}