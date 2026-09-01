<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonDhcpProfileRef
{
    /**
     * Zone Id of DHCP Profile
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Identifier of the DHCP Profile
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
     * VLAN ID of the DHCP Profile
     *
     * @var int
     */
    public int $vlanId;
    /**
     * @var string
     */
    public string $subnetNetworkIp;
    /**
     * @var string
     */
    public string $subnetMask;
    /**
     * @var string
     */
    public string $poolStartIp;
    /**
     * @var string
     */
    public string $poolEndIp;
    /**
     * @var string
     */
    public string $primaryDnsIp;
    /**
     * @var string
     */
    public string $secondaryDnsIp;
    /**
     * Lease time in hours of the DHCP Profile
     *
     * @var int
     */
    public int $leaseTimeHours;
    /**
     * Lease time in minutes of the DHCP Profile
     *
     * @var int
     */
    public int $leaseTimeMinutes;
}