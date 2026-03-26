<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityQueryCriteriaOptionsGuestPassExpiration
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
     * start time of expiration
     *
     * @var float
     */
    protected $start;
    /**
     * end time of expiration
     *
     * @var float
     */
    protected $end;
    /**
     * time interval in second
     *
     * @var float
     */
    protected $interval;
    /**
     * start time of expiration
     *
     * @return float
     */
    public function getStart(): float
    {
        return $this->start;
    }
    /**
     * start time of expiration
     *
     * @param float $start
     *
     * @return self
     */
    public function setStart(float $start): self
    {
        $this->initialized['start'] = true;
        $this->start = $start;
        return $this;
    }
    /**
     * end time of expiration
     *
     * @return float
     */
    public function getEnd(): float
    {
        return $this->end;
    }
    /**
     * end time of expiration
     *
     * @param float $end
     *
     * @return self
     */
    public function setEnd(float $end): self
    {
        $this->initialized['end'] = true;
        $this->end = $end;
        return $this;
    }
    /**
     * time interval in second
     *
     * @return float
     */
    public function getInterval(): float
    {
        return $this->interval;
    }
    /**
     * time interval in second
     *
     * @param float $interval
     *
     * @return self
     */
    public function setInterval(float $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;
        return $this;
    }
}