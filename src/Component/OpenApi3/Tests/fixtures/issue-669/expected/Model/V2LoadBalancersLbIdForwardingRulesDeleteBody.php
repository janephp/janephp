<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2LoadBalancersLbIdForwardingRulesDeleteBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<ForwardingRule>
     */
    protected $forwardingRules;
    /**
     * @return list<ForwardingRule>
     */
    public function getForwardingRules(): array
    {
        return $this->forwardingRules;
    }
    /**
     * @param list<ForwardingRule> $forwardingRules
     *
     * @return self
     */
    public function setForwardingRules(array $forwardingRules): self
    {
        $this->initialized['forwardingRules'] = true;
        $this->forwardingRules = $forwardingRules;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['forwardingRules' => ['forwarding_rules', 'getForwardingRules', 'setForwardingRules']];
    }
}