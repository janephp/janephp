<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Metrics implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var MetricsData
     */
    public MetricsData $data;
    /**
     * @var string
     */
    public string $status;
    public function definedProperties(): array
    {
        return ['data' => 'data', 'status' => 'status'];
    }
}