<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppLogDestinationPapertrailSpec extends \ArrayObject
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
}