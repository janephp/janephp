<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppJobInvocationTriggerScheduled extends \ArrayObject
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
}