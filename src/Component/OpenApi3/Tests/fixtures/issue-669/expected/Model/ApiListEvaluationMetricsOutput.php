<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListEvaluationMetricsOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ApiEvaluationMetric>
     */
    public array $metrics;
    public function definedProperties(): array
    {
        return ['metrics' => 'metrics'];
    }
}