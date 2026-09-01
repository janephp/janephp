<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RegionState implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $status;
    /**
     * @var string
     */
    public string $statusChangedAt;
    /**
     * @var float
     */
    public float $thirtyDayUptimePercentage;
    public function definedProperties(): array
    {
        return ['status' => 'status', 'statusChangedAt' => 'status_changed_at', 'thirtyDayUptimePercentage' => 'thirty_day_uptime_percentage'];
    }
}