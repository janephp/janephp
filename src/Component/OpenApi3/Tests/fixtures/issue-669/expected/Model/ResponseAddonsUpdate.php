<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAddonsUpdate implements AdditionalPropertiesInterface
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
     * @var AddonsResource
     */
    protected $resource;
    /**
     * @return AddonsResource
     */
    public function getResource(): AddonsResource
    {
        return $this->resource;
    }
    /**
     * @param AddonsResource $resource
     *
     * @return self
     */
    public function setResource(AddonsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['resource' => ['resource', 'getResource', 'setResource']];
    }
}