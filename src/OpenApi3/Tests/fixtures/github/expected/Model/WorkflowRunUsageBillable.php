<?php

namespace Github\Model;

class WorkflowRunUsageBillable
{
    /**
     * 
     *
     * @var WorkflowRunUsageBillableUBUNTU
     */
    protected $uBUNTU;
    /**
     * 
     *
     * @var WorkflowRunUsageBillableMACOS
     */
    protected $mACOS;
    /**
     * 
     *
     * @var WorkflowRunUsageBillableWINDOWS
     */
    protected $wINDOWS;
    /**
     * 
     *
     * @return WorkflowRunUsageBillableUBUNTU
     */
    public function getUBUNTU() : WorkflowRunUsageBillableUBUNTU
    {
        return $this->uBUNTU;
    }
    /**
     * 
     *
     * @param WorkflowRunUsageBillableUBUNTU $uBUNTU
     *
     * @return self
     */
    public function setUBUNTU(WorkflowRunUsageBillableUBUNTU $uBUNTU) : self
    {
        $this->uBUNTU = $uBUNTU;
        return $this;
    }
    /**
     * 
     *
     * @return WorkflowRunUsageBillableMACOS
     */
    public function getMACOS() : WorkflowRunUsageBillableMACOS
    {
        return $this->mACOS;
    }
    /**
     * 
     *
     * @param WorkflowRunUsageBillableMACOS $mACOS
     *
     * @return self
     */
    public function setMACOS(WorkflowRunUsageBillableMACOS $mACOS) : self
    {
        $this->mACOS = $mACOS;
        return $this;
    }
    /**
     * 
     *
     * @return WorkflowRunUsageBillableWINDOWS
     */
    public function getWINDOWS() : WorkflowRunUsageBillableWINDOWS
    {
        return $this->wINDOWS;
    }
    /**
     * 
     *
     * @param WorkflowRunUsageBillableWINDOWS $wINDOWS
     *
     * @return self
     */
    public function setWINDOWS(WorkflowRunUsageBillableWINDOWS $wINDOWS) : self
    {
        $this->wINDOWS = $wINDOWS;
        return $this;
    }
}