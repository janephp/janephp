<?php

namespace Github\Model;

class WorkflowRunUsageBillable extends \ArrayObject
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
        $this->initialized['uBUNTU'] = true;
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
        $this->initialized['mACOS'] = true;
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
        $this->initialized['wINDOWS'] = true;
        $this->wINDOWS = $wINDOWS;
        return $this;
    }
}