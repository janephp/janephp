<?php

namespace Jane\Generated\DigitalOcean\Model;

class PreviousOutage extends \ArrayObject
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
    protected $region;
    /**
     * @var string
     */
    protected $startedAt;
    /**
     * @var string
     */
    protected $endedAt;
    /**
     * @var int
     */
    protected $durationSeconds;
    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * @return string
     */
    public function getStartedAt(): string
    {
        return $this->startedAt;
    }
    /**
     * @param string $startedAt
     *
     * @return self
     */
    public function setStartedAt(string $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getEndedAt(): string
    {
        return $this->endedAt;
    }
    /**
     * @param string $endedAt
     *
     * @return self
     */
    public function setEndedAt(string $endedAt): self
    {
        $this->initialized['endedAt'] = true;
        $this->endedAt = $endedAt;
        return $this;
    }
    /**
     * @return int
     */
    public function getDurationSeconds(): int
    {
        return $this->durationSeconds;
    }
    /**
     * @param int $durationSeconds
     *
     * @return self
     */
    public function setDurationSeconds(int $durationSeconds): self
    {
        $this->initialized['durationSeconds'] = true;
        $this->durationSeconds = $durationSeconds;
        return $this;
    }
}