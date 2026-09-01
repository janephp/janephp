<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemDataPlaneListListItem
{
    /**
     * Identifier of data plane
     *
     * @var string
     */
    public string $id;
    /**
     * DP MAC Address
     *
     * @var string
     */
    public string $mac;
    /**
     * IP address
     *
     * @var string
     */
    public string $ip;
    /**
     * IP address of ipv6
     *
     * @var string
     */
    public string $ipv6;
    /**
     * Managed By
     *
     * @var string
     */
    public string $managedBy;
    /**
     * Model
     *
     * @var string
     */
    public string $model;
    /**
     * Serial Number
     *
     * @var string
     */
    public string $serialNumber;
    /**
     * # of Ruckus GRE Tunnels
     *
     * @var string
     */
    public string $greTunnels;
    /**
     * Firmware
     *
     * @var string
     */
    public string $fwVersion;
    /**
     * Last Seen On
     *
     * @var string
     */
    public string $lastSeen;
    /**
     * Status
     *
     * @var string
     */
    public string $dpStatus;
    /**
     * Uptime
     *
     * @var string
     */
    public string $uptime;
    /**
     * Type
     *
     * @var string
     */
    public string $type;
}