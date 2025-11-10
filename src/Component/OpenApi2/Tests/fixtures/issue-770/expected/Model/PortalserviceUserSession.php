<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceUserSession
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
     * Time out value in minutes
     *
     * @var int
     */
    protected $timeoutInMin = 1440;
    /**
     * Grace period in minutes
     *
     * @var int
     */
    protected $gracePeriodInMin = 60;
    /**
     * Time out value in minutes
     *
     * @return int
     */
    public function getTimeoutInMin(): int
    {
        return $this->timeoutInMin;
    }
    /**
     * Time out value in minutes
     *
     * @param int $timeoutInMin
     *
     * @return self
     */
    public function setTimeoutInMin(int $timeoutInMin): self
    {
        $this->initialized['timeoutInMin'] = true;
        $this->timeoutInMin = $timeoutInMin;
        return $this;
    }
    /**
     * Grace period in minutes
     *
     * @return int
     */
    public function getGracePeriodInMin(): int
    {
        return $this->gracePeriodInMin;
    }
    /**
     * Grace period in minutes
     *
     * @param int $gracePeriodInMin
     *
     * @return self
     */
    public function setGracePeriodInMin(int $gracePeriodInMin): self
    {
        $this->initialized['gracePeriodInMin'] = true;
        $this->gracePeriodInMin = $gracePeriodInMin;
        return $this;
    }
}