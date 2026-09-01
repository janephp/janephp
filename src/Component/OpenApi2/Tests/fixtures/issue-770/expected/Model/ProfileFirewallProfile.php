<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileFirewallProfile
{
    /**
     * Firewall Profile id
     *
     * @var string
     */
    public string $id;
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
     * Whether the proFirewall Profile is factory default or not
     *
     * @var bool
     */
    public bool $factoryDefault;
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
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Modifier Name
     *
     * @var string
     */
    public string $modifierUsername;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    public int $createDateTime;
    /**
     * Creator Name
     *
     * @var string
     */
    public string $creatorUsername;
}