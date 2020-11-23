<?php

namespace Github\Model;

class WorkflowRunUsage
{
    /**
     * 
     *
     * @var WorkflowRunUsageBillable
     */
    protected $billable;
    /**
     * 
     *
     * @var int
     */
    protected $runDurationMs;
    /**
     * 
     *
     * @return WorkflowRunUsageBillable
     */
    public function getBillable() : WorkflowRunUsageBillable
    {
        return $this->billable;
    }
    /**
     * 
     *
     * @param WorkflowRunUsageBillable $billable
     *
     * @return self
     */
    public function setBillable(WorkflowRunUsageBillable $billable) : self
    {
        $this->billable = $billable;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRunDurationMs() : int
    {
        return $this->runDurationMs;
    }
    /**
     * 
     *
     * @param int $runDurationMs
     *
     * @return self
     */
    public function setRunDurationMs(int $runDurationMs) : self
    {
        $this->runDurationMs = $runDurationMs;
        return $this;
    }
}