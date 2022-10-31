<?php

namespace Github\Model;

class WorkflowUsageBillable extends \ArrayObject
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
        $this->initialized['uBUNTU'] = true;
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
        $this->initialized['mACOS'] = true;
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
        $this->initialized['wINDOWS'] = true;
        $this->wINDOWS = $wINDOWS;
        return $this;
    }
}