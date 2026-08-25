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
     * @var string|null
     */
    protected $lifeCycleHit;
    /**
     * The business process.
     *
     * @var BusinessProcess
     */
    protected $businessProcess;
    /**
     * The life cycle that was hit.
     *
     * @return string|null
     */
    public function getLifeCycleHit(): ?string
    {
        return $this->lifeCycleHit;
    }
    /**
     * The life cycle that was hit.
     *
     * @param string|null $lifeCycleHit
     *
     * @return self
     */
    public function setLifeCycleHit(?string $lifeCycleHit): self
    {
        $this->initialized['lifeCycleHit'] = true;
        $this->lifeCycleHit = $lifeCycleHit;
        return $this;
    }
    /**
     * The business process.
     *
     * @return BusinessProcess
     */
    public function getBusinessProcess(): BusinessProcess
    {
        return $this->businessProcess;
    }
    /**
     * The business process.
     *
     * @param BusinessProcess $businessProcess
     *
     * @return self
     */
    public function setBusinessProcess(BusinessProcess $businessProcess): self
    {
        $this->initialized['businessProcess'] = true;
        $this->businessProcess = $businessProcess;
        return $this;
    }
}