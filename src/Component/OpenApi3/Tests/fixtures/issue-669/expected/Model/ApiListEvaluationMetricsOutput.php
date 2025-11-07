<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiListEvaluationMetricsOutput extends \ArrayObject
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
     * @var list<ApiEvaluationMetric>
     */
    protected $metrics;
    /**
     * @return list<ApiEvaluationMetric>
     */
    public function getMetrics(): array
    {
        return $this->metrics;
    }
    /**
     * @param list<ApiEvaluationMetric> $metrics
     *
     * @return self
     */
    public function setMetrics(array $metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;
        return $this;
    }
}