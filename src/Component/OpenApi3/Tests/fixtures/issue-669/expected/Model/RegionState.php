<?php

namespace Jane\Generated\DigitalOcean\Model;

class RegionState extends \ArrayObject
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
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $statusChangedAt;
    /**
     * @var float
     */
    protected $thirtyDayUptimePercentage;
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatusChangedAt(): string
    {
        return $this->statusChangedAt;
    }
    /**
     * @param string $statusChangedAt
     *
     * @return self
     */
    public function setStatusChangedAt(string $statusChangedAt): self
    {
        $this->initialized['statusChangedAt'] = true;
        $this->statusChangedAt = $statusChangedAt;
        return $this;
    }
    /**
     * @return float
     */
    public function getThirtyDayUptimePercentage(): float
    {
        return $this->thirtyDayUptimePercentage;
    }
    /**
     * @param float $thirtyDayUptimePercentage
     *
     * @return self
     */
    public function setThirtyDayUptimePercentage(float $thirtyDayUptimePercentage): self
    {
        $this->initialized['thirtyDayUptimePercentage'] = true;
        $this->thirtyDayUptimePercentage = $thirtyDayUptimePercentage;
        return $this;
    }
}