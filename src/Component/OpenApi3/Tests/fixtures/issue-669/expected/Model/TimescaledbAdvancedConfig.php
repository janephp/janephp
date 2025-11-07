<?php

namespace Jane\Generated\DigitalOcean\Model;

class TimescaledbAdvancedConfig extends \ArrayObject
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
     * The number of background workers for timescaledb operations.  Set to the sum of your number of databases and the total number of concurrent background workers you want running at any given point in time.
     *
     * @var int
     */
    protected $maxBackgroundWorkers;
    /**
     * The number of background workers for timescaledb operations.  Set to the sum of your number of databases and the total number of concurrent background workers you want running at any given point in time.
     *
     * @return int
     */
    public function getMaxBackgroundWorkers(): int
    {
        return $this->maxBackgroundWorkers;
    }
    /**
     * The number of background workers for timescaledb operations.  Set to the sum of your number of databases and the total number of concurrent background workers you want running at any given point in time.
     *
     * @param int $maxBackgroundWorkers
     *
     * @return self
     */
    public function setMaxBackgroundWorkers(int $maxBackgroundWorkers): self
    {
        $this->initialized['maxBackgroundWorkers'] = true;
        $this->maxBackgroundWorkers = $maxBackgroundWorkers;
        return $this;
    }
}