<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MetricsResult implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * An object containing the metric's labels. These labels are key/value pairs that vary depending on the metric being queried. For example, load balancer metrics contain a `lb_id` label, while Droplet metrics contain a `host_id` label, and App Platform metrics contain a `app_component` label.
     *
     * @var array<string, string>
     */
    protected $metric;
    /**
     * An array of values for the metric.
     *
     * @var list<list<int>|list<string>>
     */
    protected $values;
    /**
     * An object containing the metric's labels. These labels are key/value pairs that vary depending on the metric being queried. For example, load balancer metrics contain a `lb_id` label, while Droplet metrics contain a `host_id` label, and App Platform metrics contain a `app_component` label.
     *
     * @return array<string, string>
     */
    public function getMetric(): iterable
    {
        return $this->metric;
    }
    /**
     * An object containing the metric's labels. These labels are key/value pairs that vary depending on the metric being queried. For example, load balancer metrics contain a `lb_id` label, while Droplet metrics contain a `host_id` label, and App Platform metrics contain a `app_component` label.
     *
     * @param array<string, string> $metric
     *
     * @return self
     */
    public function setMetric(iterable $metric): self
    {
        $this->initialized['metric'] = true;
        $this->metric = $metric;
        return $this;
    }
    /**
     * An array of values for the metric.
     *
     * @return list<list<int>|list<string>>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * An array of values for the metric.
     *
     * @param list<list<int>|list<string>> $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['metric' => ['metric', 'getMetric', 'setMetric'], 'values' => ['values', 'getValues', 'setValues']];
    }
}