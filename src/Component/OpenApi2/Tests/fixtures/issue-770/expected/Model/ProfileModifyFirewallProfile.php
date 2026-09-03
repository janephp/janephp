<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileModifyFirewallProfile
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Uplink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @var float
     */
    public float $uplinkRateLimitingMbps;
    /**
     * Downlink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @var float
     */
    public float $downlinkRateLimitingMbps;
    /**
     * L3 Access Control Policy
     *
     * @var string
     */
    public string $l3AccessControlPolicyId;
    /**
     * L2 Access Control Policy
     *
     * @var string
     */
    public string $l2AccessControlPolicyId;
    /**
     * Application Policy
     *
     * @var string
     */
    public string $appPolicyId;
    /**
     * Url Filtering Policy
     *
     * @var string
     */
    public string $urlFilteringPolicyId;
    /**
     * Device Policy
     *
     * @var string
     */
    public string $devicePolicyId;
    /**
     * Domain Id of The Firewall Profile
     *
     * @var string
     */
    public string $domainId;
}