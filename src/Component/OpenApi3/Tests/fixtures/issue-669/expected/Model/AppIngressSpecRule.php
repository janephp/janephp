<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppIngressSpecRule implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The match configuration for the rule.
     *
     * @var AppIngressSpecRuleMatch
     */
    public AppIngressSpecRuleMatch $match;
    /**
     * @var AppsCorsPolicy
     */
    public AppsCorsPolicy $cors;
    /**
     * The component to route to. Only one of `component` or `redirect` may be set.
     *
     * @var AppIngressSpecRuleRoutingComponent
     */
    public AppIngressSpecRuleRoutingComponent $component;
    /**
     * The redirect configuration for the rule. Only one of `component` or `redirect` may be set.
     *
     * @var AppIngressSpecRuleRoutingRedirect
     */
    public AppIngressSpecRuleRoutingRedirect $redirect;
    public function definedProperties(): array
    {
        return ['match' => 'match', 'cors' => 'cors', 'component' => 'component', 'redirect' => 'redirect'];
    }
}