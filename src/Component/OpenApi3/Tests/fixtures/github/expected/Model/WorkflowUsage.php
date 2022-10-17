<?php

namespace Github\Model;

class WorkflowUsage extends \ArrayObject
{
    /**
     * 
     *
     * @var WorkflowUsageBillable
     */
    protected $billable;
    /**
     * 
     *
     * @return WorkflowUsageBillable
     */
    public function getBillable() : WorkflowUsageBillable
    {
        return $this->billable;
    }
    /**
     * 
     *
     * @param WorkflowUsageBillable $billable
     *
     * @return self
     */
    public function setBillable(WorkflowUsageBillable $billable) : self
    {
        $this->billable = $billable;
        return $this;
    }
}