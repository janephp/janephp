<?php

namespace Github\Model;

class ReposOwnerRepoActionsWorkflowsGetResponse200 extends \ArrayObject
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
     * @var Workflow[]
     */
    protected $workflows;
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
     * @return Workflow[]
     */
    public function getWorkflows() : array
    {
        return $this->workflows;
    }
    /**
     * 
     *
     * @param Workflow[] $workflows
     *
     * @return self
     */
    public function setWorkflows(array $workflows) : self
    {
        $this->workflows = $workflows;
        return $this;
    }
}