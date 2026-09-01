<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MaintenancePolicy implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The start time in UTC of the maintenance window policy in 24-hour clock format / HH:MM notation (e.g., `15:00`).
     *
     * @var string
     */
    public string $startTime;
    /**
     * The duration of the maintenance window policy in human-readable format.
     *
     * @var string
     */
    public string $duration;
    /**
     * The day of the maintenance window policy. May be one of `monday` through `sunday`, or `any` to indicate an arbitrary week day.
     *
     * @var string
     */
    public string $day;
    public function definedProperties(): array
    {
        return ['startTime' => 'start_time', 'duration' => 'duration', 'day' => 'day'];
    }
}