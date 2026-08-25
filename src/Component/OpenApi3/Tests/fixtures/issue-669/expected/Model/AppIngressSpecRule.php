<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppIngressSpecRule implements AdditionalPropertiesInterface
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
     * The match configuration for the rule.
     *
     * @var AppIngressSpecRuleMatch
     */
    protected $match;
    /**
     * @var AppsCorsPolicy
     */
    protected $cors;
    /**
     * The component to route to. Only one of `component` or `redirect` may be set.
     *
     * @var AppIngressSpecRuleRoutingComponent
     */
    protected $component;
    /**
     * The redirect configuration for the rule. Only one of `component` or `redirect` may be set.
     *
     * @var AppIngressSpecRuleRoutingRedirect
     */
    protected $redirect;
    /**
     * The match configuration for the rule.
     *
     * @return AppIngressSpecRuleMatch
     */
    public function getMatch(): AppIngressSpecRuleMatch
    {
        return $this->match;
    }
    /**
     * The match configuration for the rule.
     *
     * @param AppIngressSpecRuleMatch $match
     *
     * @return self
     */
    public function setMatch(AppIngressSpecRuleMatch $match): self
    {
        $this->initialized['match'] = true;
        $this->match = $match;
        return $this;
    }
    /**
     * @return AppsCorsPolicy
     */
    public function getCors(): AppsCorsPolicy
    {
        return $this->cors;
    }
    /**
     * @param AppsCorsPolicy $cors
     *
     * @return self
     */
    public function setCors(AppsCorsPolicy $cors): self
    {
        $this->initialized['cors'] = true;
        $this->cors = $cors;
        return $this;
    }
    /**
     * The component to route to. Only one of `component` or `redirect` may be set.
     *
     * @return AppIngressSpecRuleRoutingComponent
     */
    public function getComponent(): AppIngressSpecRuleRoutingComponent
    {
        return $this->component;
    }
    /**
     * The component to route to. Only one of `component` or `redirect` may be set.
     *
     * @param AppIngressSpecRuleRoutingComponent $component
     *
     * @return self
     */
    public function setComponent(AppIngressSpecRuleRoutingComponent $component): self
    {
        $this->initialized['component'] = true;
        $this->component = $component;
        return $this;
    }
    /**
     * The redirect configuration for the rule. Only one of `component` or `redirect` may be set.
     *
     * @return AppIngressSpecRuleRoutingRedirect
     */
    public function getRedirect(): AppIngressSpecRuleRoutingRedirect
    {
        return $this->redirect;
    }
    /**
     * The redirect configuration for the rule. Only one of `component` or `redirect` may be set.
     *
     * @param AppIngressSpecRuleRoutingRedirect $redirect
     *
     * @return self
     */
    public function setRedirect(AppIngressSpecRuleRoutingRedirect $redirect): self
    {
        $this->initialized['redirect'] = true;
        $this->redirect = $redirect;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['match' => ['match', 'getMatch', 'setMatch'], 'cors' => ['cors', 'getCors', 'setCors'], 'component' => ['component', 'getComponent', 'setComponent'], 'redirect' => ['redirect', 'getRedirect', 'setRedirect']];
    }
}