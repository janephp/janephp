<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2LoadBalancersLbIdForwardingRulesPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ForwardingRule>
     */
    public array $forwardingRules;
    public function definedProperties(): array
    {
        return ['forwardingRules' => 'forwarding_rules'];
    }
}