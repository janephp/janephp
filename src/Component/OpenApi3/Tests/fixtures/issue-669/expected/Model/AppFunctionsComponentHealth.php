<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppFunctionsComponentHealth implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var list<AppFunctionsComponentHealthFunctionsComponentHealthMetricsItem>
     */
    public array $functionsComponentHealthMetrics;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'functionsComponentHealthMetrics' => 'functions_component_health_metrics'];
    }
}