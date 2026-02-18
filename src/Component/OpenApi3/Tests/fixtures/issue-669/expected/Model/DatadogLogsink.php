<?php

namespace Jane\Generated\DigitalOcean\Model;

class DatadogLogsink extends \ArrayObject
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
     * Datadog connection URL
     *
     * @var string
     */
    protected $site;
    /**
     * Datadog API key
     *
     * @var string
     */
    protected $datadogApiKey;
    /**
     * Datadog connection URL
     *
     * @return string
     */
    public function getSite(): string
    {
        return $this->site;
    }
    /**
     * Datadog connection URL
     *
     * @param string $site
     *
     * @return self
     */
    public function setSite(string $site): self
    {
        $this->initialized['site'] = true;
        $this->site = $site;
        return $this;
    }
    /**
     * Datadog API key
     *
     * @return string
     */
    public function getDatadogApiKey(): string
    {
        return $this->datadogApiKey;
    }
    /**
     * Datadog API key
     *
     * @param string $datadogApiKey
     *
     * @return self
     */
    public function setDatadogApiKey(string $datadogApiKey): self
    {
        $this->initialized['datadogApiKey'] = true;
        $this->datadogApiKey = $datadogApiKey;
        return $this;
    }
}