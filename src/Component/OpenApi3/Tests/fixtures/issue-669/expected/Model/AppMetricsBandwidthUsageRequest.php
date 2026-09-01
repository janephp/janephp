<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppMetricsBandwidthUsageRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A list of app IDs to query bandwidth metrics for.
     *
     * @var list<string>
     */
    public array $appIds;
    /**
     * Optional day to query. Only the date component of the timestamp will be considered. Default: yesterday.
     *
     * @var \DateTime
     */
    public \DateTime $date;
    public function definedProperties(): array
    {
        return ['appIds' => 'app_ids', 'date' => 'date'];
    }
}