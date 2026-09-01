<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MetricsResult implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An object containing the metric's labels. These labels are key/value pairs that vary depending on the metric being queried. For example, load balancer metrics contain a `lb_id` label, while Droplet metrics contain a `host_id` label, and App Platform metrics contain a `app_component` label.
     *
     * @var array<string, string>
     */
    public iterable $metric;
    /**
     * An array of values for the metric.
     *
     * @var list<list<int>|list<string>>
     */
    public array $values;
    public function definedProperties(): array
    {
        return ['metric' => 'metric', 'values' => 'values'];
    }
}