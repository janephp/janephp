<?php

namespace Github\Model;

class ReposOwnerRepoActionsRunsGetResponse200
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
        $this->workflowRuns = $workflowRuns;
        return $this;
    }
}