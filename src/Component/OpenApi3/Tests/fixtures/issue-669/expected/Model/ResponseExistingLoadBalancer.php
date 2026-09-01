<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingLoadBalancer implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var LoadBalancer
     */
    public LoadBalancer $loadBalancer;
    public function definedProperties(): array
    {
        return ['loadBalancer' => 'load_balancer'];
    }
}