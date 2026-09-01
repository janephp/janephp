<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletActionEnableBackupsBackupPolicy implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The backup plan used for the Droplet. The plan can be either `daily` or `weekly`.
     *
     * @var string
     */
    public string $plan;
    /**
     * The day of the week on which the backup will occur.
     *
     * @var string
     */
    public string $weekday;
    /**
     * The hour of the day that the backup window will start.
     *
     * @var int
     */
    public int $hour;
    /**
     * The length of the backup window starting from `hour`.
     *
     * @var int
     */
    public int $windowLengthHours;
    /**
     * The number of days the backup will be retained.
     *
     * @var int
     */
    public int $retentionPeriodDays;
    public function definedProperties(): array
    {
        return ['plan' => 'plan', 'weekday' => 'weekday', 'hour' => 'hour', 'windowLengthHours' => 'window_length_hours', 'retentionPeriodDays' => 'retention_period_days'];
    }
}