<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiEvaluationTestCaseMetricList extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<string>
     */
    protected $metricUuids;
    /**
     * @return list<string>
     */
    public function getMetricUuids(): array
    {
        return $this->metricUuids;
    }
    /**
     * @param list<string> $metricUuids
     *
     * @return self
     */
    public function setMetricUuids(array $metricUuids): self
    {
        $this->initialized['metricUuids'] = true;
        $this->metricUuids = $metricUuids;
        return $this;
    }
}