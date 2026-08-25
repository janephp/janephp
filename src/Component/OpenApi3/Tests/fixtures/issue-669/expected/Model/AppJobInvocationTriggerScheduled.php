<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocationTriggerScheduled implements AdditionalPropertiesInterface
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
     * @var AppJobInvocationTriggerScheduledSchedule
     */
    protected $schedule;
    /**
     * @return AppJobInvocationTriggerScheduledSchedule
     */
    public function getSchedule(): AppJobInvocationTriggerScheduledSchedule
    {
        return $this->schedule;
    }
    /**
     * @param AppJobInvocationTriggerScheduledSchedule $schedule
     *
     * @return self
     */
    public function setSchedule(AppJobInvocationTriggerScheduledSchedule $schedule): self
    {
        $this->initialized['schedule'] = true;
        $this->schedule = $schedule;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['schedule' => ['schedule', 'getSchedule', 'setSchedule']];
    }
}