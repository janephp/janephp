<?php

namespace PicturePark\API\Model;

class BusinessProcessWaitForStateResult
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
     * The state that was hit.
     *
     * @var string|null
     */
    protected $stateHit;
    /**
     * The business process.
     *
     * @var BusinessProcess
     */
    protected $businessProcess;
    /**
     * The state that was hit.
     *
     * @return string|null
     */
    public function getStateHit(): ?string
    {
        return $this->stateHit;
    }
    /**
     * The state that was hit.
     *
     * @param string|null $stateHit
     *
     * @return self
     */
    public function setStateHit(?string $stateHit): self
    {
        $this->initialized['stateHit'] = true;
        $this->stateHit = $stateHit;
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