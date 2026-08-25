<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocationTriggerScheduledSchedule implements AdditionalPropertiesInterface
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
     * The cron expression defining the schedule
     *
     * @var string
     */
    protected $cron;
    /**
     * The time zone for the schedule
     *
     * @var string
     */
    protected $timeZone;
    /**
     * The cron expression defining the schedule
     *
     * @return string
     */
    public function getCron(): string
    {
        return $this->cron;
    }
    /**
     * The cron expression defining the schedule
     *
     * @param string $cron
     *
     * @return self
     */
    public function setCron(string $cron): self
    {
        $this->initialized['cron'] = true;
        $this->cron = $cron;
        return $this;
    }
    /**
     * The time zone for the schedule
     *
     * @return string
     */
    public function getTimeZone(): string
    {
        return $this->timeZone;
    }
    /**
     * The time zone for the schedule
     *
     * @param string $timeZone
     *
     * @return self
     */
    public function setTimeZone(string $timeZone): self
    {
        $this->initialized['timeZone'] = true;
        $this->timeZone = $timeZone;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['cron' => ['cron', 'getCron', 'setCron'], 'timeZone' => ['time_zone', 'getTimeZone', 'setTimeZone']];
    }
}