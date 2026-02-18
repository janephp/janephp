<?php

namespace Jane\Generated\DigitalOcean\Model;

class TriggerInfoScheduledRuns extends \ArrayObject
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
     * Indicates last run time. null value indicates trigger not run yet.
     *
     * @var string|null
     */
    protected $lastRunAt;
    /**
     * Indicates next run time. null value indicates trigger will not run.
     *
     * @var string|null
     */
    protected $nextRunAt;
    /**
     * Indicates last run time. null value indicates trigger not run yet.
     *
     * @return string|null
     */
    public function getLastRunAt(): ?string
    {
        return $this->lastRunAt;
    }
    /**
     * Indicates last run time. null value indicates trigger not run yet.
     *
     * @param string|null $lastRunAt
     *
     * @return self
     */
    public function setLastRunAt(?string $lastRunAt): self
    {
        $this->initialized['lastRunAt'] = true;
        $this->lastRunAt = $lastRunAt;
        return $this;
    }
    /**
     * Indicates next run time. null value indicates trigger will not run.
     *
     * @return string|null
     */
    public function getNextRunAt(): ?string
    {
        return $this->nextRunAt;
    }
    /**
     * Indicates next run time. null value indicates trigger will not run.
     *
     * @param string|null $nextRunAt
     *
     * @return self
     */
    public function setNextRunAt(?string $nextRunAt): self
    {
        $this->initialized['nextRunAt'] = true;
        $this->nextRunAt = $nextRunAt;
        return $this;
    }
}