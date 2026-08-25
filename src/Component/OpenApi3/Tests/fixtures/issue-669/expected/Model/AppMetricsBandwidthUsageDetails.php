<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppMetricsBandwidthUsageDetails implements AdditionalPropertiesInterface
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
     * The ID of the app.
     *
     * @var string
     */
    protected $appId;
    /**
     * The used bandwidth amount in bytes.
     *
     * @var string
     */
    protected $bandwidthBytes;
    /**
     * The ID of the app.
     *
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }
    /**
     * The ID of the app.
     *
     * @param string $appId
     *
     * @return self
     */
    public function setAppId(string $appId): self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;
        return $this;
    }
    /**
     * The used bandwidth amount in bytes.
     *
     * @return string
     */
    public function getBandwidthBytes(): string
    {
        return $this->bandwidthBytes;
    }
    /**
     * The used bandwidth amount in bytes.
     *
     * @param string $bandwidthBytes
     *
     * @return self
     */
    public function setBandwidthBytes(string $bandwidthBytes): self
    {
        $this->initialized['bandwidthBytes'] = true;
        $this->bandwidthBytes = $bandwidthBytes;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['appId' => ['app_id', 'getAppId', 'setAppId'], 'bandwidthBytes' => ['bandwidth_bytes', 'getBandwidthBytes', 'setBandwidthBytes']];
    }
}