<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LbFirewall implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * the rules for denying traffic to the load balancer (in the form 'ip:1.2.3.4' or 'cidr:1.2.0.0/16')
     *
     * @var list<string>
     */
    public array $deny = array();
    /**
     * the rules for allowing traffic to the load balancer (in the form 'ip:1.2.3.4' or 'cidr:1.2.0.0/16')
     *
     * @var list<string>
     */
    public array $allow = array();
    public function definedProperties(): array
    {
        return ['deny' => 'deny', 'allow' => 'allow'];
    }
}