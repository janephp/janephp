<?php

namespace PicturePark\API\Model;

class BusinessProcessWaitForLifeCycleResult
{
    /**
     * The life cycle that was hit.
     *
     * @var mixed|null
     */
    protected $lifeCycleHit;
    /**
     * The business process.
     *
     * @var mixed
     */
    protected $businessProcess;
    /**
     * The life cycle that was hit.
     *
     * @return mixed
     */
    public function getLifeCycleHit()
    {
        return $this->lifeCycleHit;
    }
    /**
     * The life cycle that was hit.
     *
     * @param mixed $lifeCycleHit
     *
     * @return self
     */
    public function setLifeCycleHit($lifeCycleHit) : self
    {
        $this->lifeCycleHit = $lifeCycleHit;
        return $this;
    }
    /**
     * The business process.
     *
     * @return mixed
     */
    public function getBusinessProcess()
    {
        return $this->businessProcess;
    }
    /**
     * The business process.
     *
     * @param mixed $businessProcess
     *
     * @return self
     */
    public function setBusinessProcess($businessProcess) : self
    {
        $this->businessProcess = $businessProcess;
        return $this;
    }
}