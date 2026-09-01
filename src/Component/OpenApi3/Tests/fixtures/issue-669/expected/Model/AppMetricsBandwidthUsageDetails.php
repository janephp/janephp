<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppMetricsBandwidthUsageDetails implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the app.
     *
     * @var string
     */
    public string $appId;
    /**
     * The used bandwidth amount in bytes.
     *
     * @var string
     */
    public string $bandwidthBytes;
    public function definedProperties(): array
    {
        return ['appId' => 'app_id', 'bandwidthBytes' => 'bandwidth_bytes'];
    }
}