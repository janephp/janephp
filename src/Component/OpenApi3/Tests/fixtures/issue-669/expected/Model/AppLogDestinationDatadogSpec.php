<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppLogDestinationDatadogSpec extends \ArrayObject
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
     * Datadog HTTP log intake endpoint.
     *
     * @var string
     */
    protected $endpoint;
    /**
     * Datadog API key.
     *
     * @var string
     */
    protected $apiKey;
    /**
     * Datadog HTTP log intake endpoint.
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }
    /**
     * Datadog HTTP log intake endpoint.
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
    /**
     * Datadog API key.
     *
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }
    /**
     * Datadog API key.
     *
     * @param string $apiKey
     *
     * @return self
     */
    public function setApiKey(string $apiKey): self
    {
        $this->initialized['apiKey'] = true;
        $this->apiKey = $apiKey;
        return $this;
    }
}