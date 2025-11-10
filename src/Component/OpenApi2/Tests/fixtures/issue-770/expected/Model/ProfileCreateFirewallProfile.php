<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateFirewallProfile
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Uplink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @var float
     */
    protected $uplinkRateLimitingMbps;
    /**
     * Downlink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @var float
     */
    protected $downlinkRateLimitingMbps;
    /**
     * L3 Access Control Policy
     *
     * @var string
     */
    protected $l3AccessControlPolicyId;
    /**
     * L2 Access Control Policy
     *
     * @var string
     */
    protected $l2AccessControlPolicyId;
    /**
     * Application Policy
     *
     * @var string
     */
    protected $appPolicyId;
    /**
     * Url Filtering Policy
     *
     * @var string
     */
    protected $urlFilteringPolicyId;
    /**
     * Device Policy
     *
     * @var string
     */
    protected $devicePolicyId;
    /**
     * Domain Id of The Firewall Profile
     *
     * @var string
     */
    protected $domainId;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Uplink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @return float
     */
    public function getUplinkRateLimitingMbps(): float
    {
        return $this->uplinkRateLimitingMbps;
    }
    /**
     * Uplink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @param float $uplinkRateLimitingMbps
     *
     * @return self
     */
    public function setUplinkRateLimitingMbps(float $uplinkRateLimitingMbps): self
    {
        $this->initialized['uplinkRateLimitingMbps'] = true;
        $this->uplinkRateLimitingMbps = $uplinkRateLimitingMbps;
        return $this;
    }
    /**
     * Downlink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @return float
     */
    public function getDownlinkRateLimitingMbps(): float
    {
        return $this->downlinkRateLimitingMbps;
    }
    /**
     * Downlink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @param float $downlinkRateLimitingMbps
     *
     * @return self
     */
    public function setDownlinkRateLimitingMbps(float $downlinkRateLimitingMbps): self
    {
        $this->initialized['downlinkRateLimitingMbps'] = true;
        $this->downlinkRateLimitingMbps = $downlinkRateLimitingMbps;
        return $this;
    }
    /**
     * L3 Access Control Policy
     *
     * @return string
     */
    public function getL3AccessControlPolicyId(): string
    {
        return $this->l3AccessControlPolicyId;
    }
    /**
     * L3 Access Control Policy
     *
     * @param string $l3AccessControlPolicyId
     *
     * @return self
     */
    public function setL3AccessControlPolicyId(string $l3AccessControlPolicyId): self
    {
        $this->initialized['l3AccessControlPolicyId'] = true;
        $this->l3AccessControlPolicyId = $l3AccessControlPolicyId;
        return $this;
    }
    /**
     * L2 Access Control Policy
     *
     * @return string
     */
    public function getL2AccessControlPolicyId(): string
    {
        return $this->l2AccessControlPolicyId;
    }
    /**
     * L2 Access Control Policy
     *
     * @param string $l2AccessControlPolicyId
     *
     * @return self
     */
    public function setL2AccessControlPolicyId(string $l2AccessControlPolicyId): self
    {
        $this->initialized['l2AccessControlPolicyId'] = true;
        $this->l2AccessControlPolicyId = $l2AccessControlPolicyId;
        return $this;
    }
    /**
     * Application Policy
     *
     * @return string
     */
    public function getAppPolicyId(): string
    {
        return $this->appPolicyId;
    }
    /**
     * Application Policy
     *
     * @param string $appPolicyId
     *
     * @return self
     */
    public function setAppPolicyId(string $appPolicyId): self
    {
        $this->initialized['appPolicyId'] = true;
        $this->appPolicyId = $appPolicyId;
        return $this;
    }
    /**
     * Url Filtering Policy
     *
     * @return string
     */
    public function getUrlFilteringPolicyId(): string
    {
        return $this->urlFilteringPolicyId;
    }
    /**
     * Url Filtering Policy
     *
     * @param string $urlFilteringPolicyId
     *
     * @return self
     */
    public function setUrlFilteringPolicyId(string $urlFilteringPolicyId): self
    {
        $this->initialized['urlFilteringPolicyId'] = true;
        $this->urlFilteringPolicyId = $urlFilteringPolicyId;
        return $this;
    }
    /**
     * Device Policy
     *
     * @return string
     */
    public function getDevicePolicyId(): string
    {
        return $this->devicePolicyId;
    }
    /**
     * Device Policy
     *
     * @param string $devicePolicyId
     *
     * @return self
     */
    public function setDevicePolicyId(string $devicePolicyId): self
    {
        $this->initialized['devicePolicyId'] = true;
        $this->devicePolicyId = $devicePolicyId;
        return $this;
    }
    /**
     * Domain Id of The Firewall Profile
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain Id of The Firewall Profile
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
}