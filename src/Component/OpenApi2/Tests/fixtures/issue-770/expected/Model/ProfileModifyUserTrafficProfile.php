<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileModifyUserTrafficProfile
{
    /**
     * Identifier of the user traffic profile
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
     * Default action
     *
     * @var string
     */
    public string $defaultAction = 'ALLOW';
    /**
     * @var ProfileUplinkRateLimiting
     */
    public ProfileUplinkRateLimiting $uplinkRateLimiting;
    /**
     * @var ProfileDownlinkRateLimiting
     */
    public ProfileDownlinkRateLimiting $downlinkRateLimiting;
    /**
     * Traffic access control list
     *
     * @var list<ProfileModifyIpAclRules>
     */
    public array $ipAclRules;
    /**
     * Application Policy UUID (for 5.0 and Earlier Firmware Versions)
     *
     * @var string
     */
    public string $appPolicyId;
    /**
     * Application Policy UUID
     *
     * @var string
     */
    public string $qmAppPolicyId;
    /**
     * URL Filtering Policy UUID
     *
     * @var string
     */
    public string $urlFilteringPolicyId;
    /**
     * Tenant UUID
     *
     * @var string
     */
    public string $mvnoId;
    /**
     * Domain UUID
     *
     * @var string
     */
    public string $domainId;
}