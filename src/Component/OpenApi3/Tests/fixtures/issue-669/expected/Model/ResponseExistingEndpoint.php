<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingEndpoint implements AdditionalPropertiesInterface
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
     * @var CdnEndpoint
     */
    protected $endpoint;
    /**
     * @return CdnEndpoint
     */
    public function getEndpoint(): CdnEndpoint
    {
        return $this->endpoint;
    }
    /**
     * @param CdnEndpoint $endpoint
     *
     * @return self
     */
    public function setEndpoint(CdnEndpoint $endpoint): self
    {
        $this->initialized['endpoint'] = true;
        $this->endpoint = $endpoint;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['endpoint' => ['endpoint', 'getEndpoint', 'setEndpoint']];
    }
}