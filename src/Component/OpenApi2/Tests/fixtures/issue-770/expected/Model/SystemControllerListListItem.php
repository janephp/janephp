<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemControllerListListItem
{
    /**
     * Identifier of the controller
     *
     * @var string
     */
    public string $id;
    /**
     * Product model
     *
     * @var string
     */
    public string $model;
    /**
     * Description of the controller
     *
     * @var string
     */
    public string $description;
    /**
     * Host name of the controller
     *
     * @var string
     */
    public string $hostName;
    /**
     * MAC address of the controller
     *
     * @var string
     */
    public string $mac;
    /**
     * Serial number of the controller
     *
     * @var string
     */
    public string $serialNumber;
    /**
     * Indicator the role of the controller
     *
     * @var string
     */
    public string $clusterRole;
    /**
     * Control NAT IP address settings
     *
     * @var string
     */
    public string $controlNatIp;
    /**
     * Uptime (in seconds) of the controller
     *
     * @var int
     */
    public int $uptimeInSec;
    /**
     * Name of the controller
     *
     * @var string
     */
    public string $name;
    /**
     * SCG version
     *
     * @var string
     */
    public string $version;
    /**
     * AP version
     *
     * @var string
     */
    public string $apVersion;
    /**
     * Control IP
     *
     * @var string
     */
    public string $controlIp;
    /**
     * Cluster IP
     *
     * @var string
     */
    public string $clusterIp;
    /**
     * Management IP
     *
     * @var string
     */
    public string $managementIp;
    /**
     * Control IPv6
     *
     * @var string
     */
    public string $controlIpv6;
    /**
     * Cluster IPv6
     *
     * @var string
     */
    public string $clusterIpv6;
    /**
     * Management IPv6
     *
     * @var string
     */
    public string $managementIpv6;
    /**
     * @var list<SystemReservedPort>
     */
    public array $reservedPorts;
}