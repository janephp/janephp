<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2UptimeChecksCheckIdAlertsPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference the alert.
     *
     * @var string
     */
    public string $id;
    /**
     * A human-friendly display name.
     *
     * @var string
     */
    public string $name;
    /**
     * The type of alert.
     *
     * @var string
     */
    public string $type;
    /**
     * The threshold at which the alert will enter a trigger state. The specific threshold is dependent on the alert type.
     *
     * @var int
     */
    public int $threshold;
    /**
     * The comparison operator used against the alert's threshold.
     *
     * @var string
     */
    public string $comparison;
    /**
     * The notification settings for a trigger alert.
     *
     * @var Notification
     */
    public Notification $notifications;
    /**
     * Period of time the threshold must be exceeded to trigger the alert.
     *
     * @var string
     */
    public string $period;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'type' => 'type', 'threshold' => 'threshold', 'comparison' => 'comparison', 'notifications' => 'notifications', 'period' => 'period'];
    }
}