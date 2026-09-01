<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskDpskInfoItem
{
    /**
     * Identifier of DPSK
     *
     * @var string
     */
    public string $id;
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
    public string $macAddress;
    /**
     * Passphrase of DPSK
     *
     * @var string
     */
    public string $passphrase;
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
    public bool $groupDpsk;
    /**
     * Creationd date/time of DPSK
     *
     * @var float
     */
    public float $creationDateTime;
    /**
     * Expiration date/time of DPSK
     *
     * @var string
     */
    public string $expirationDateTime;
}