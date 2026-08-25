<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MaintenancePolicy implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The start time in UTC of the maintenance window policy in 24-hour clock format / HH:MM notation (e.g., `15:00`).
     *
     * @var string
     */
    protected $startTime;
    /**
     * The duration of the maintenance window policy in human-readable format.
     *
     * @var string
     */
    protected $duration;
    /**
     * The day of the maintenance window policy. May be one of `monday` through `sunday`, or `any` to indicate an arbitrary week day.
     *
     * @var string
     */
    protected $day;
    /**
     * The start time in UTC of the maintenance window policy in 24-hour clock format / HH:MM notation (e.g., `15:00`).
     *
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }
    /**
     * The start time in UTC of the maintenance window policy in 24-hour clock format / HH:MM notation (e.g., `15:00`).
     *
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime): self
    {
        $this->initialized['startTime'] = true;
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * The duration of the maintenance window policy in human-readable format.
     *
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }
    /**
     * The duration of the maintenance window policy in human-readable format.
     *
     * @param string $duration
     *
     * @return self
     */
    public function setDuration(string $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;
        return $this;
    }
    /**
     * The day of the maintenance window policy. May be one of `monday` through `sunday`, or `any` to indicate an arbitrary week day.
     *
     * @return string
     */
    public function getDay(): string
    {
        return $this->day;
    }
    /**
     * The day of the maintenance window policy. May be one of `monday` through `sunday`, or `any` to indicate an arbitrary week day.
     *
     * @param string $day
     *
     * @return self
     */
    public function setDay(string $day): self
    {
        $this->initialized['day'] = true;
        $this->day = $day;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['startTime' => ['start_time', 'getStartTime', 'setStartTime'], 'duration' => ['duration', 'getDuration', 'setDuration'], 'day' => ['day', 'getDay', 'setDay']];
    }
}