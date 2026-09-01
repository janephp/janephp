<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocationTriggerScheduledSchedule implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The cron expression defining the schedule
     *
     * @var string
     */
    public string $cron;
    /**
     * The time zone for the schedule
     *
     * @var string
     */
    public string $timeZone;
    public function definedProperties(): array
    {
        return ['cron' => 'cron', 'timeZone' => 'time_zone'];
    }
}