<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileEthernetPortProfile
{
    /**
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
     * type of the ethernet port profile
     *
     * @var string
     */
    public string $type;
    /**
     * tunnelEnabled of the ethernet port profile for AccessPort type
     *
     * @var bool
     */
    public bool $tunnelEnabled;
    /**
     * @var string
     */
    public string $tenantId;
    /**
     * @var string
     */
    public string $mduProfileId;
    /**
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
     * ARP packets request rate limit
     *
     * @var int
     */
    public int $arpRequestRateLimit;
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
}