<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DpProfileDpDhcpProfilePoolBO
{
    /**
     * leaseTime
     *
     * @var int
     */
    public int $leaseTime;
    /**
     * hostName
     *
     * @var string
     */
    public string $hostName;
    /**
     * primaryDnsServer
     *
     * @var string
     */
    public string $primaryDnsServer;
    /**
     * secondaryRouter
     *
     * @var string
     */
    public string $secondaryRouter;
    /**
     * ip
     *
     * @var string
     */
    public string $ip;
    /**
     * netMask
     *
     * @var string
     */
    public string $netMask;
    /**
     * ipRange
     *
     * @var string
     */
    public string $ipRange;
    /**
     * description
     *
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $vlanType;
    /**
     * secondaryDnsServer
     *
     * @var string
     */
    public string $secondaryDnsServer;
    /**
     * primaryRouter
     *
     * @var string
     */
    public string $primaryRouter;
    /**
     * broadcastAddress
     *
     * @var string
     */
    public string $broadcastAddress;
    /**
     * profileId
     *
     * @var string
     */
    public string $profileId;
    /**
     * vlanRange
     *
     * @var string
     */
    public string $vlanRange;
    /**
     * domainName
     *
     * @var string
     */
    public string $domainName;
    /**
     * poolId
     *
     * @var string
     */
    public string $poolId;
    /**
     * qinqVlanRanges
     *
     * @var list<DpProfileDpDhcpProfileQinqVlanRangeBO>
     */
    public array $qinqVlanRanges;
    /**
     * subOptionSpaces
     *
     * @var list<DpProfileDpDhcpProfileOptionSpaceInstance>
     */
    public array $subOptionSpaces;
    /**
     * excludeAddressRange
     *
     * @var string
     */
    public string $excludeAddressRange;
    /**
     * poolName
     *
     * @var string
     */
    public string $poolName;
}