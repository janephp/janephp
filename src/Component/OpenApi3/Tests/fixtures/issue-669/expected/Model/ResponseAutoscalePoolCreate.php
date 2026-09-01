<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAutoscalePoolCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var AutoscalePool
     */
    public AutoscalePool $autoscalePool;
    public function definedProperties(): array
    {
        return ['autoscalePool' => 'autoscale_pool'];
    }
}