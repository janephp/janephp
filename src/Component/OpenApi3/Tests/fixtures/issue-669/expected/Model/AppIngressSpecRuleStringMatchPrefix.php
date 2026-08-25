<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppIngressSpecRuleStringMatchPrefix implements AdditionalPropertiesInterface
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
     * Prefix-based match. For example, `/api` will match `/api`, `/api/`, and any nested paths such as `/api/v1/endpoint`.
     *
     * @var string
     */
    protected $prefix;
    /**
     * Prefix-based match. For example, `/api` will match `/api`, `/api/`, and any nested paths such as `/api/v1/endpoint`.
     *
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }
    /**
     * Prefix-based match. For example, `/api` will match `/api`, `/api/`, and any nested paths such as `/api/v1/endpoint`.
     *
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix(string $prefix): self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['prefix' => ['prefix', 'getPrefix', 'setPrefix']];
    }
}