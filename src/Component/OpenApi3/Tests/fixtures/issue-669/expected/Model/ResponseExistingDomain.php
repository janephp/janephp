<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingDomain implements AdditionalPropertiesInterface
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
     * @var Domain
     */
    protected $domain;
    /**
     * @return Domain
     */
    public function getDomain(): Domain
    {
        return $this->domain;
    }
    /**
     * @param Domain $domain
     *
     * @return self
     */
    public function setDomain(Domain $domain): self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['domain' => ['domain', 'getDomain', 'setDomain']];
    }
}