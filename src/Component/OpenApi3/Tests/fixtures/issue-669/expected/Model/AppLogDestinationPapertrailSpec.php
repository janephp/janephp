<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppLogDestinationPapertrailSpec implements AdditionalPropertiesInterface
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
     * Papertrail syslog endpoint.
     *
     * @var string
     */
    protected $endpoint;
    /**
     * Papertrail syslog endpoint.
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }
    /**
     * Papertrail syslog endpoint.
     *
     * @param string $endpoint
     *
     * @return self
     */
    public function setEndpoint(string $endpoint): self
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