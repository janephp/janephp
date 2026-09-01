<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class WlanWlanRadius
{
    /**
     * NAS ID type
     *
     * @var string
     */
    public string $nasIdType = 'WLAN_BSSID';
    /**
     * User defined NAS ID
     *
     * @var string
     */
    public string $customizedNasId;
    /**
     * NAS request timeout in seconds
     *
     * @var int
     */
    public int $nasRequestTimeoutSec = 3;
    /**
     * NAS request maximum retry
     *
     * @var int
     */
    public int $nasMaxRetry = 2;
    /**
     * NAS reconnect primary time in minutes
     *
     * @var int
     */
    public int $nasReconnectPrimaryMin = 5;
    /**
     * Called station ID type
     *
     * @var string
     */
    public string $calledStaIdType = 'WLAN_BSSID';
    /**
     * NAS IP type
     *
     * @var string
     */
    public string $nasIpType = 'disabled';
    /**
     * User-defined NAS IP
     *
     * @var string
     */
    public string $nasIpUserDefined;
    /**
     * When Single Accounting Session ID is enabled, APs will maintain one accounting session for client roaming
     *
     * @var bool
     */
    public bool $singleSessionIdAcctEnabled = false;
    /**
     * Vendor Specific Attribute Profile ID
     *
     * @var string
     */
    public string $vendorSpecificAttributeProfileId;
}