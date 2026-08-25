<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppFunctionsComponentHealth implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $name;
    /**
     * @var list<AppFunctionsComponentHealthFunctionsComponentHealthMetricsItem>
     */
    protected $functionsComponentHealthMetrics;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return list<AppFunctionsComponentHealthFunctionsComponentHealthMetricsItem>
     */
    public function getFunctionsComponentHealthMetrics(): array
    {
        return $this->functionsComponentHealthMetrics;
    }
    /**
     * @param list<AppFunctionsComponentHealthFunctionsComponentHealthMetricsItem> $functionsComponentHealthMetrics
     *
     * @return self
     */
    public function setFunctionsComponentHealthMetrics(array $functionsComponentHealthMetrics): self
    {
        $this->initialized['functionsComponentHealthMetrics'] = true;
        $this->functionsComponentHealthMetrics = $functionsComponentHealthMetrics;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'functionsComponentHealthMetrics' => ['functions_component_health_metrics', 'getFunctionsComponentHealthMetrics', 'setFunctionsComponentHealthMetrics']];
    }
}