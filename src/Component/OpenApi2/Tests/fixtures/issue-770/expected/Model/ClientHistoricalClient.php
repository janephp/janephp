<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ClientHistoricalClient
{
    /**
     * Session start time of the client
     *
     * @var int
     */
    public int $sessionStartTime;
    /**
     * Session end time of the client
     *
     * @var int
     */
    public int $sessionEndTime;
    /**
     * Client MAC address
     *
     * @var string
     */
    public string $clientMac;
    /**
     * Client IP address
     *
     * @var string
     */
    public string $ipAddress;
    /**
     * Client IPv6 address
     *
     * @var string
     */
    public string $ipv6Address;
    /**
     * Core network type of the client
     *
     * @var string
     */
    public string $coreNetworkType;
    /**
     * Hostname of the client
     *
     * @var string
     */
    public string $hostname;
    /**
     * OS type of the client
     *
     * @var string
     */
    public string $osType;
    /**
     * Model Name of the client
     *
     * @var string
     */
    public string $modelName;
    /**
     * MVNO name of the client
     *
     * @var string
     */
    public string $mvnoName;
    /**
     * Client connected AP's MAC address
     *
     * @var string
     */
    public string $apMac;
    /**
     * Client connected SSID name
     *
     * @var string
     */
    public string $ssid;
    /**
     * Bytes from client
     *
     * @var int
     */
    public int $txBytes;
    /**
     * Bytes to client
     *
     * @var int
     */
    public int $rxBytes;
    /**
     * Bytes from client
     *
     * @var int
     */
    public int $txFrames;
    /**
     * Bytes to client
     *
     * @var int
     */
    public int $rxFrames;
    /**
     * Dropped packets from client
     *
     * @var int
     */
    public int $txDrops;
    /**
     * Dropped packets to client
     *
     * @var int
     */
    public int $rxDrops;
}