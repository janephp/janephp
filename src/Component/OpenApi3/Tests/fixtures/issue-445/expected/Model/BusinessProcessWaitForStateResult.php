<?php

namespace PicturePark\API\Model;

class BusinessProcessWaitForStateResult
{
    /**
     * The state that was hit.
     *
     * @var string|null
     */
    protected $stateHit;
    /**
     * The business process.
     *
     * @var mixed
     */
    protected $businessProcess;
    /**
     * The state that was hit.
     *
     * @return string|null
     */
    public function getStateHit() : ?string
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
    public function setStateHit(?string $stateHit) : self
    {
        $this->stateHit = $stateHit;
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