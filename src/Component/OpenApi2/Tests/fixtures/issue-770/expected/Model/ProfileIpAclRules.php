<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileIpAclRules
{
    /**
     * Priority
     *
     * @var int
     */
    public int $priority;
    /**
     * @var string
     */
    public string $description;
    /**
     * Uplink rate limiting enabled
     *
     * @var bool
     */
    public bool $uplinkRateLimitingEnabled;
    /**
     * Uplink rate limiting
     *
     * @var float
     */
    public float $uplinkRateLimitingMbps;
    /**
     * Downlink rate limiting enabled
     *
     * @var bool
     */
    public bool $downlinkRateLimitingEnabled;
    /**
     * Downlink rate limiting
     *
     * @var float
     */
    public float $downlinkRateLimitingMbps;
    /**
     * IP Type(IPv4 or IPv6).
     *
     * @var string
     */
    public string $ipType = 'IPv4';
    /**
     * Source IP subnet enabled or disabled
     *
     * @var bool
     */
    public bool $enableSourceIpSubnet;
    /**
     * Subnet network address or ip address of source IP.
     *
     * @var string
     */
    public string $sourceIp;
    /**
     * Subnet mask of source IP
     *
     * @var string
     */
    public string $sourceIpMask;
    /**
     * Enable Source IPv6 prefix.
     *
     * @var bool
     */
    public bool $enableSourceV6Prefix;
    /**
     * Source IPv6 Address.
     *
     * @var string
     */
    public string $sourceIpV6;
    /**
     * Destination IP subnet enabled or disabled
     *
     * @var bool
     */
    public bool $enableDestinationIpSubnet;
    /**
     * Subnet network address or ip address of destination IP.
     *
     * @var string
     */
    public string $destinationIp;
    /**
     * Subnet mask of destination IP
     *
     * @var string
     */
    public string $destinationIpMask;
    /**
     * Enable Destination IPv6 prefix.
     *
     * @var bool
     */
    public bool $enableDestinationV6Prefix;
    /**
     * Destination IPv6 Address.
     *
     * @var string
     */
    public string $destinationIpV6;
    /**
     * Source port range enabled or disabled
     *
     * @var bool
     */
    public bool $enableSourcePortRange;
    /**
     * The minunum port of source port range.
     *
     * @var int
     */
    public int $sourceMinPort;
    /**
     * The maxinum port of source port range.
     *
     * @var int
     */
    public int $sourceMaxPort;
    /**
     * Destincation port range enabled or disabled
     *
     * @var bool
     */
    public bool $enableDestinationPortRange;
    /**
     * The mininum port of destination port range.
     *
     * @var int
     */
    public int $destinationMinPort;
    /**
     * The maxinum port of destination port range.
     *
     * @var int
     */
    public int $destinationMaxPort;
    /**
     * The protocol of traffic access control.
     *
     * @var string
     */
    public string $protocol;
    /**
     * The protocol of traffic access control. Available if the protocol is set to CUSTOM.
     *
     * @var int
     */
    public int $customProtocol;
    /**
     * The access of traffic access control.
     *
     * @var string
     */
    public string $action = 'ALLOW';
    /**
     * The direction of traffic access control.
     *
     * @var string
     */
    public string $direction = 'UPSTREAM';
}