<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SupportedDropletBackupPolicy implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the Droplet backup plan.
     *
     * @var string
     */
    public string $name;
    /**
     * An array of integers representing the hours of the day that a backup can
     * start.
     * 
     *
     * @var list<int>
     */
    public array $possibleWindowStarts;
    /**
     * The number of hours that a backup window is open.
     *
     * @var int
     */
    public int $windowLengthHours;
    /**
     * The number of days that a backup will be kept.
     *
     * @var int
     */
    public int $retentionPeriodDays;
    /**
     * The day of the week the backup will occur.
     *
     * @var list<string>
     */
    public array $possibleDays;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'possibleWindowStarts' => 'possible_window_starts', 'windowLengthHours' => 'window_length_hours', 'retentionPeriodDays' => 'retention_period_days', 'possibleDays' => 'possible_days'];
    }
}