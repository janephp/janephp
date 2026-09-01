<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiEvaluationTestCaseMetricList implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $metricUuids;
    public function definedProperties(): array
    {
        return ['metricUuids' => 'metric_uuids'];
    }
}