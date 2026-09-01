<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileRuckusGREProfile
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
    public int $tunnelMtuSize;
    /**
     * Dual Tunnel Keep-Alive Period
     *
     * @var int
     */
    public int $keepAlivePeriod = 10;
    /**
     * Dual Tunnel Keep-Alive Retry
     *
     * @var int
     */
    public int $keepAliveRetry = 6;
    /**
     * Dual Tunnel
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
    /**
     * Timestamp of being created
     *
     * @var int
     */
    public int $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    public string $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    public string $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    public string $modifierUsername;
}