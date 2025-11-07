<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppComponentInstanceBaseAutoscaling extends \ArrayObject
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
     * The minimum amount of instances for this component. Must be less than max_instance_count.
     *
     * @var int
     */
    protected $minInstanceCount;
    /**
     * The maximum amount of instances for this component. Must be more than min_instance_count.
     *
     * @var int
     */
    protected $maxInstanceCount;
    /**
     * The metrics that the component is scaled on.
     *
     * @var AppComponentInstanceBaseAutoscalingMetrics
     */
    protected $metrics;
    /**
     * The minimum amount of instances for this component. Must be less than max_instance_count.
     *
     * @return int
     */
    public function getMinInstanceCount(): int
    {
        return $this->minInstanceCount;
    }
    /**
     * The minimum amount of instances for this component. Must be less than max_instance_count.
     *
     * @param int $minInstanceCount
     *
     * @return self
     */
    public function setMinInstanceCount(int $minInstanceCount): self
    {
        $this->initialized['minInstanceCount'] = true;
        $this->minInstanceCount = $minInstanceCount;
        return $this;
    }
    /**
     * The maximum amount of instances for this component. Must be more than min_instance_count.
     *
     * @return int
     */
    public function getMaxInstanceCount(): int
    {
        return $this->maxInstanceCount;
    }
    /**
     * The maximum amount of instances for this component. Must be more than min_instance_count.
     *
     * @param int $maxInstanceCount
     *
     * @return self
     */
    public function setMaxInstanceCount(int $maxInstanceCount): self
    {
        $this->initialized['maxInstanceCount'] = true;
        $this->maxInstanceCount = $maxInstanceCount;
        return $this;
    }
    /**
     * The metrics that the component is scaled on.
     *
     * @return AppComponentInstanceBaseAutoscalingMetrics
     */
    public function getMetrics(): AppComponentInstanceBaseAutoscalingMetrics
    {
        return $this->metrics;
    }
    /**
     * The metrics that the component is scaled on.
     *
     * @param AppComponentInstanceBaseAutoscalingMetrics $metrics
     *
     * @return self
     */
    public function setMetrics(AppComponentInstanceBaseAutoscalingMetrics $metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;
        return $this;
    }
}