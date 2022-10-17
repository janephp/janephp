<?php

namespace Github\Model;

class WorkflowUsageBillable extends \ArrayObject
{
    /**
     * 
     *
     * @var WorkflowUsageBillableUBUNTU
     */
    protected $uBUNTU;
    /**
     * 
     *
     * @var WorkflowUsageBillableMACOS
     */
    protected $mACOS;
    /**
     * 
     *
     * @var WorkflowUsageBillableWINDOWS
     */
    protected $wINDOWS;
    /**
     * 
     *
     * @return WorkflowUsageBillableUBUNTU
     */
    public function getUBUNTU() : WorkflowUsageBillableUBUNTU
    {
        return $this->uBUNTU;
    }
    /**
     * 
     *
     * @param WorkflowUsageBillableUBUNTU $uBUNTU
     *
     * @return self
     */
    public function setUBUNTU(WorkflowUsageBillableUBUNTU $uBUNTU) : self
    {
        $this->uBUNTU = $uBUNTU;
        return $this;
    }
    /**
     * 
     *
     * @return WorkflowUsageBillableMACOS
     */
    public function getMACOS() : WorkflowUsageBillableMACOS
    {
        return $this->mACOS;
    }
    /**
     * 
     *
     * @param WorkflowUsageBillableMACOS $mACOS
     *
     * @return self
     */
    public function setMACOS(WorkflowUsageBillableMACOS $mACOS) : self
    {
        $this->mACOS = $mACOS;
        return $this;
    }
    /**
     * 
     *
     * @return WorkflowUsageBillableWINDOWS
     */
    public function getWINDOWS() : WorkflowUsageBillableWINDOWS
    {
        return $this->wINDOWS;
    }
    /**
     * 
     *
     * @param WorkflowUsageBillableWINDOWS $wINDOWS
     *
     * @return self
     */
    public function setWINDOWS(WorkflowUsageBillableWINDOWS $wINDOWS) : self
    {
        $this->wINDOWS = $wINDOWS;
        return $this;
    }
}