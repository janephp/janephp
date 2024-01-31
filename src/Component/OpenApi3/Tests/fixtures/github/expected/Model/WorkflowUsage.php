<?php

namespace Github\Model;

class WorkflowUsage extends \ArrayObject
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
        $this->initialized['billable'] = true;
        $this->billable = $billable;
        return $this;
    }
}