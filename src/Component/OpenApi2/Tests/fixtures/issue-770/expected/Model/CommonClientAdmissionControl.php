<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonClientAdmissionControl
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
     * Maximum radio load percentage.
     *
     * @var int
     */
    protected $maxRadioLoadPercent = 75;
    /**
     * Minimum client count number.
     *
     * @var int
     */
    protected $minClientCount = 10;
    /**
     * Minimum client throughput in Mbps.
     *
     * @var float
     */
    protected $minClientThroughputMbps = 0;
    /**
     * Maximum radio load percentage.
     *
     * @return int
     */
    public function getMaxRadioLoadPercent(): int
    {
        return $this->maxRadioLoadPercent;
    }
    /**
     * Maximum radio load percentage.
     *
     * @param int $maxRadioLoadPercent
     *
     * @return self
     */
    public function setMaxRadioLoadPercent(int $maxRadioLoadPercent): self
    {
        $this->initialized['maxRadioLoadPercent'] = true;
        $this->maxRadioLoadPercent = $maxRadioLoadPercent;
        return $this;
    }
    /**
     * Minimum client count number.
     *
     * @return int
     */
    public function getMinClientCount(): int
    {
        return $this->minClientCount;
    }
    /**
     * Minimum client count number.
     *
     * @param int $minClientCount
     *
     * @return self
     */
    public function setMinClientCount(int $minClientCount): self
    {
        $this->initialized['minClientCount'] = true;
        $this->minClientCount = $minClientCount;
        return $this;
    }
    /**
     * Minimum client throughput in Mbps.
     *
     * @return float
     */
    public function getMinClientThroughputMbps(): float
    {
        return $this->minClientThroughputMbps;
    }
    /**
     * Minimum client throughput in Mbps.
     *
     * @param float $minClientThroughputMbps
     *
     * @return self
     */
    public function setMinClientThroughputMbps(float $minClientThroughputMbps): self
    {
        $this->initialized['minClientThroughputMbps'] = true;
        $this->minClientThroughputMbps = $minClientThroughputMbps;
        return $this;
    }
}