<?php

namespace PicturePark\API\Model;

class BusinessProcessWaitForLifeCycleResult
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function setLifeCycleHit($lifeCycleHit): self
    {
        $this->initialized['lifeCycleHit'] = true;
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
    public function setBusinessProcess($businessProcess): self
    {
        $this->initialized['businessProcess'] = true;
        $this->businessProcess = $businessProcess;
        return $this;
    }
}