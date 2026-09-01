<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MetricsData implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Result of query.
     *
     * @var list<MetricsResult>
     */
    public array $result;
    /**
     * @var string
     */
    public string $resultType;
    public function definedProperties(): array
    {
        return ['result' => 'result', 'resultType' => 'resultType'];
    }
}