<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppComponentInstanceBaseAutoscalingMetricsCpu implements AdditionalPropertiesInterface
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
     * The average target CPU utilization for the component.
     *
     * @var int
     */
    protected $percent = 80;
    /**
     * The average target CPU utilization for the component.
     *
     * @return int
     */
    public function getPercent(): int
    {
        return $this->percent;
    }
    /**
     * The average target CPU utilization for the component.
     *
     * @param int $percent
     *
     * @return self
     */
    public function setPercent(int $percent): self
    {
        $this->initialized['percent'] = true;
        $this->percent = $percent;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['percent' => ['percent', 'getPercent', 'setPercent']];
    }
}