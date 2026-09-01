<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUsageMeasurement implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $tokens;
    /**
     * @var string
     */
    public string $usageType;
    public function definedProperties(): array
    {
        return ['tokens' => 'tokens', 'usageType' => 'usage_type'];
    }
}