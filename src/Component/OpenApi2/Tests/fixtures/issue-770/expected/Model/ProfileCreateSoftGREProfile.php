<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateSoftGREProfile
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
     * @var string
     */
    public string $ipMode;
    /**
     * Primary gateway address of the SoftGRE profile
     *
     * @var string
     */
    public string $primaryGateway;
    /**
     * Secondary gateway address of the SoftGRE profile
     *
     * @var string
     */
    public string $secondaryGateway;
    /**
     * WAN Interface MTU of the SoftGRE profile
     *
     * @var string
     */
    public string $tunnelMtuAutoEnabled;
    /**
     * Tunnel MTU size of SoftGRE profile. IPV4:850-1500, IPV6:1384-1500. Default 1500.
     *
     * @var int
     */
    public int $tunnelMtuSize = 1500;
    /**
     * ICMP Keep-Alive Period(secs)
     *
     * @var int
     */
    public int $keepAlivePeriod;
    /**
     * ICMP Keep-Alive Retry
     *
     * @var int
     */
    public int $keepAliveRetry;
    /**
     * Force Disassociate Client
     *
     * @var bool
     */
    public bool $forceDisassociateClient;
    /**
     * Domain id of the SoftGRE profile
     *
     * @var string
     */
    public string $domainId;
}