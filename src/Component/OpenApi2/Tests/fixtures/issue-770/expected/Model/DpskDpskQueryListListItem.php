<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DpskDpskQueryListListItem
{
    /**
     * Identifier of DPSK
     *
     * @var string
     */
    public string $key;
    /**
     * Tenant ID of DPSK
     *
     * @var string
     */
    public string $tenantId;
    /**
     * Domain ID of DPSK
     *
     * @var string
     */
    public string $domainId;
    /**
     * Zone ID of DPSK
     *
     * @var string
     */
    public string $zoneId;
    /**
     * WLAN ID of DPSK
     *
     * @var string
     */
    public string $wlanId;
    /**
     * User Name of DPSK
     *
     * @var string
     */
    public string $userName;
    /**
     * Mac address of DPSK
     *
     * @var string
     */
    public string $ueMac;
    /**
     * Identity User Role ID of DPSK
     *
     * @var string
     */
    public string $userRoleId;
    /**
     * VLAN ID of DPSK
     *
     * @var int
     */
    public int $vlanId;
    /**
     * Is a Group DPSK or not
     *
     * @var bool
     */
    public bool $group;
    /**
     * DPSK is expired or not
     *
     * @var bool
     */
    public bool $expired;
    /**
     * Time To Live of DPSK (Unit: Seconds)
     *
     * @var float
     */
    public float $ttl;
    /**
     * Expiration start time of DPSK (Unit: Seconds)
     *
     * @var float
     */
    public float $expirationStartTime;
    /**
     * Expiration time of DPSK (Unit: Seconds)
     *
     * @var float
     */
    public float $expirationTime;
    /**
     * Creationd time of DPSK
     *
     * @var float
     */
    public float $createDateTime;
}