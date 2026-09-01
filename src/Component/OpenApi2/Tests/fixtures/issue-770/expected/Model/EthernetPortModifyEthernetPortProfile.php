<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class EthernetPortModifyEthernetPortProfile
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
     * tunnelEnabled of the ethernet port profile for AccessPort type
     *
     * @var bool
     */
    public bool $tunnelEnabled;
    /**
     * Access network type of the ethernet port profile
     *
     * @var string
     */
    public string $accessNetworkType;
    /**
     * VLAN Untag ID of the ethernet port profile
     *
     * @var int
     */
    public int $untagId;
    /**
     * VLAN Members of the ethernet port profile
     *
     * @var string
     */
    public string $vlanMembers;
    /**
     * @var bool
     */
    public bool $dynamicVlanEnabled;
    /**
     * @var int
     */
    public int $guestVlan;
    /**
     * @var CommonQinq
     */
    public CommonQinq $qinq;
    /**
     * Anti-Spoofing enabled
     *
     * @var bool
     */
    public bool $antiSpoofingEnabled;
    /**
     * ARP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @var int
     */
    public int $arpRequestRateLimit = 15;
    /**
     * DHCP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @var int
     */
    public int $dhcpRequestRateLimit;
    /**
     * User side port enabled.
     *
     * @var bool
     */
    public bool $userSidePortEnabled = false;
    /**
     * Number of wired clients allowed to connect to a particular user side port, default value will be 8 if the value not being set.
     *
     * @var int
     */
    public int $userSidePortMaxClient = 8;
    /**
     * Uplink rate limiting range should be 1 ~ 1000 Mbps. 0 means rate limiting uplink is disabled.
     *
     * @var int
     */
    public int $userSidePortUplinkLimit = 0;
    /**
     * Downlink rate limiting range should be 1 ~ 1000 Mbps. 0 means rate limiting downlink is disabled.
     *
     * @var int
     */
    public int $userSidePortDownlinkLimit = 0;
    /**
     * @var ApmodelLanPort8021X
     */
    public ApmodelLanPort8021X $n8021X;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $tunnelProfile;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $ipsecProfile;
    /**
     * Firewall Profile Id
     *
     * @var string
     */
    public string $firewallProfileId;
    /**
     * Application Recognition & Control enabled
     *
     * @var bool
     */
    public bool $firewallAVCEnabled;
    /**
     * URL Filtering Policy enabled
     *
     * @var bool
     */
    public bool $firewallUrlFilteringPolicyEnabled;
    /**
     * L2 Access Control Policy Id
     *
     * @var string
     */
    public string $l2AccessControlPolicyId;
    /**
     * Indicates whether wired client isolation is enabled or disabled
     *
     * @var bool
     */
    public bool $clientIsolationEnabled = false;
    /**
     * Indicates whether isolate unicast of wired client isolation is enabled or disabled
     *
     * @var bool
     */
    public bool $clientIsolationUnicastEnabled = true;
    /**
     * Indicates whether isolate multicast of wired client isolation is enabled or disabled
     *
     * @var bool
     */
    public bool $clientIsolationMulticastEnabled;
    /**
     * Indicates whether Automatic support for VRRP of wired client isolation is enabled or disabled
     *
     * @var bool
     */
    public bool $clientIsolationAutoVrrpEnabled = false;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $clientIsolationWhitelist;
}