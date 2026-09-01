<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocationTriggerScheduled implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var AppJobInvocationTriggerScheduledSchedule
     */
    public AppJobInvocationTriggerScheduledSchedule $schedule;
    public function definedProperties(): array
    {
        return ['schedule' => 'schedule'];
    }
}