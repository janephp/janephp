<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateRuckusGREProfile
{
    /**
     * Profile Id
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
     * Ruckus Tunnel Mode of RuckusGRE profile
     *
     * @var string
     */
    public string $tunnelMode;
    /**
     * Tunnel Encryption of the RuckusGRE profile
     *
     * @var string
     */
    public string $tunnelEncryption;
    /**
     * WAN Interface MTU of the RuckusGRE profile
     *
     * @var string
     */
    public string $tunnelMtuAutoEnabled;
    /**
     * Tunnel MTU size of RuckusGRE profile
     *
     * @var int
     */
    public int $tunnelMtuSize = 1500;
    /**
     * Tunnel Failover Keep-Alive Period
     *
     * @var int
     */
    public int $keepAlivePeriod = 10;
    /**
     * Tunnel Failover Keep-Alive Retry
     *
     * @var int
     */
    public int $keepAliveRetry = 6;
    /**
     * Tunnel Failover
     *
     * @var bool
     */
    public bool $dualTunnel;
    /**
     * Domain id of the RuckusGRE profile
     *
     * @var string
     */
    public string $domainId;
}