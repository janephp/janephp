<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsListInstanceSizesResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $discountPercent;
    /**
     * @var list<AppsInstanceSize>
     */
    public array $instanceSizes;
    public function definedProperties(): array
    {
        return ['discountPercent' => 'discount_percent', 'instanceSizes' => 'instance_sizes'];
    }
}