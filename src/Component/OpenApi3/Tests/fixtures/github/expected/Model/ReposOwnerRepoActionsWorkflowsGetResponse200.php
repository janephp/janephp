<?php

namespace Github\Model;

class ReposOwnerRepoActionsWorkflowsGetResponse200 extends \ArrayObject
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
     * @var list<Workflow>
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
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return list<Workflow>
     */
    public function getWorkflows() : array
    {
        return $this->workflows;
    }
    /**
     * 
     *
     * @param list<Workflow> $workflows
     *
     * @return self
     */
    public function setWorkflows(array $workflows) : self
    {
        $this->initialized['workflows'] = true;
        $this->workflows = $workflows;
        return $this;
    }
}