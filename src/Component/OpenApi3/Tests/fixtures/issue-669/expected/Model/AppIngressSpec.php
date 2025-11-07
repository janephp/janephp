<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppIngressSpec extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Rules for configuring HTTP ingress for component routes, CORS, rewrites, and redirects.
     *
     * @var list<AppIngressSpecRule>
     */
    protected $rules;
    /**
     * Rules for configuring HTTP ingress for component routes, CORS, rewrites, and redirects.
     *
     * @return list<AppIngressSpecRule>
     */
    public function getRules(): array
    {
        return $this->rules;
    }
    /**
     * Rules for configuring HTTP ingress for component routes, CORS, rewrites, and redirects.
     *
     * @param list<AppIngressSpecRule> $rules
     *
     * @return self
     */
    public function setRules(array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
}