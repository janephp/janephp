<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppMetricsBandwidthUsage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A list of bandwidth usage details by app.
     *
     * @var list<AppMetricsBandwidthUsageDetails>
     */
    public array $appBandwidthUsage;
    /**
     * The date for the metrics data.
     *
     * @var \DateTime
     */
    public \DateTime $date;
    public function definedProperties(): array
    {
        return ['appBandwidthUsage' => 'app_bandwidth_usage', 'date' => 'date'];
    }
}