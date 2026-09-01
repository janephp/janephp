<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanAdvanced
{
    /**
     * Indicates whether wireless client isolation is enabled or disabled
     *
     * @var bool
     */
    public bool $clientIsolationEnabled = false;
    /**
     * Indicates whether isolate unicast of wireless client isolation is enabled or disabled
     *
     * @var bool
     */
    public bool $clientIsolationUnicastEnabled = true;
    /**
     * Indicates whether isolate multicast of wireless client isolation is enabled or disabled
     *
     * @var bool
     */
    public bool $clientIsolationMulticastEnabled;
    /**
     * Indicates whether Automatic support for VRRP of wireless client isolation is enabled or disabled
     *
     * @var bool
     */
    public bool $clientIsolationAutoVrrpEnabled = false;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $clientIsolationWhitelist;
    /**
     * Priority of the WLAN
     *
     * @var string
     */
    public string $priority = 'High';
    /**
     * Indicates whether the SSID is hidden or broadcast
     *
     * @var bool
     */
    public bool $hideSsidEnabled = false;
    /**
     * Allow WISPr WLAN for Hotspot 2.0 Onboarding
     *
     * @var bool
     */
    public bool $hs20Onboarding = false;
    /**
     * Maximum number of clients per radio
     *
     * @var int
     */
    public int $maxClientsPerRadio = 100;
    /**
     * Client idle timeout in seconds
     *
     * @var int
     */
    public int $clientIdleTimeoutSec = 120;
    /**
     * Indicates whether GTK rekey feature is enabled or disabled
     *
     * @var bool
     */
    public bool $gtkRekeyEnabled = true;
    /**
     * Indicates whether wifi6 feature is enabled or disabled
     *
     * @var bool
     */
    public bool $wifi6Enabled = true;
    /**
     * User session timeout in seconds. This variable only support wlan types ["standard8021X", "standard8021Xmac", "standardmac", "wisprmac"]
     *
     * @var int
     */
    public int $userSessionTimeout = 172800;
    /**
     * Indicates whether dgaf is enabled or disabled
     *
     * @var bool
     */
    public bool $dgafEnabled;
    /**
     * Indicates whether Client Load Balancing is enabled or disabled
     *
     * @var bool
     */
    public bool $clientLoadBalancingEnabled = true;
    /**
     * Indicates whether proxy ARP is enabled or disabled
     *
     * @var bool
     */
    public bool $proxyARPEnabled = false;
    /**
     * Indicates whether ND Proxy is enabled or disabled
     *
     * @var bool
     */
    public bool $ndProxyEnabled = false;
    /**
     * Indicates whether supperssNS is enabled or disabled
     *
     * @var bool
     */
    public bool $suppressNsEnabled = false;
    /**
     * Indicates whether RA proxy is enabled or disabled
     *
     * @var bool
     */
    public bool $raProxyEnabled = false;
    /**
     * Indicates whether RS/RA Guard is enabled or disabled
     *
     * @var bool
     */
    public bool $rsraGuardEnabled = false;
    /**
     * Indicates whether RA Throttling is enabled or disabled
     *
     * @var bool
     */
    public bool $raThrottlingEnabled = false;
    /**
     * Max Allowed RAs
     *
     * @var int
     */
    public int $maxAllowedRA = 10;
    /**
     * A timer that RA proxy runs and once receives unsolicited RA checks against the configured time and allow/drop RA based on next timeout
     *
     * @var int
     */
    public int $raInterval = 10;
    /**
     * Indicates whether support for 802.11d is enabled or disabled
     *
     * @var bool
     */
    public bool $support80211dEnabled = true;
    /**
     * Indicates whether support for 802.11k is enabled or disabled
     *
     * @var bool
     */
    public bool $support80211kEnabled = true;
    /**
     * Anti-Spoofing enabled
     *
     * @var bool
     */
    public bool $antiSpoofingEnabled = false;
    /**
     * ARP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @var int
     */
    public int $arpRequestRateLimit;
    /**
     * DHCP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @var int
     */
    public int $dhcpRequestRateLimit;
    /**
     * Force DHCP disconnects the client if the client does not obtain a valid IP address within the timeout peroid. To disable force DHCP, set this value to zero (0).
     *
     * @var int
     */
    public int $forceClientDHCPTimeoutSec = 0;
    /**
     * Indicates whether DCHP Option 82 is enabled or disabled. This variable no longer supports from v8_1 and only kept for backward compatibility.
     *
     * @var bool
     */
    public bool $dhcpOption82Enabled = false;
    /**
     * DHCP Option 82 format. This variable no longer supports from v8_1 and only kept for backward compatibility.
     *
     * @var string
     */
    public string $dhcp82Format;
    /**
     * Subopt-1 format
     *
     * @var string
     */
    public string $dhcp82SubOpt1Format;
    /**
     * Subopt-2 format
     *
     * @var string
     */
    public string $dhcp82SubOpt2Format;
    /**
     * Subopt-150 with VLAN-Id
     *
     * @var string
     */
    public string $dhcp82SubOpt150Format;
    /**
     * Subopt-151 format
     *
     * @var string
     */
    public string $dhcp82SubOpt151Format;
    /**
     * Subopt-151 Area Name value
     *
     * @var string
     */
    public string $dhcp82SubOpt151AreaName;
    /**
     * AP and Client Mac format. If dhcpOption82Enabled is true, you have to set the dhcp82MacFormat ["COLON","HYPHEN","NODELIMITER"].
     *
     * @var string
     */
    public string $dhcp82MacFormat;
    /**
     * Indicates whether to send statistics of unauthorized clients or not
     *
     * @var bool
     */
    public bool $unauthClientStatsEnabled = false;
    /**
     * Indicates whether client fingerprinting is enabled or disabled
     *
     * @var bool
     */
    public bool $clientFingerprintingEnabled = false;
    /**
     * Drop the broadcast/multicast packets from associated clients.
     *
     * @var bool
     */
    public bool $multicastFilterDrop = false;
    /**
     * Indicates whether OFDM only is enabled or disabled
     *
     * @var bool
     */
    public bool $ofdmOnlyEnabled = false;
    /**
     * Indicates whether band balancing is enabled or disabled
     *
     * @var string
     */
    public string $bandBalancing = 'UseZoneSetting';
    /**
     * @var string
     */
    public string $bssMinRateMbps = 'Disable';
    /**
     * @var string
     */
    public string $mgmtTxRateMbps = '2 mbps';
    /**
     * Indicator of whether PKM caching support is enabled or disabled. The default value is true when the WLAN is WPA+AES non open WLAN.
     *
     * @var bool
     */
    public bool $pmkCachingEnabled;
    /**
     * Indicator of whether OKC support is enabled or disabled. The default value is true when the WLAN is WPA+AES non open WLAN.
     *
     * @var bool
     */
    public bool $okcEnabled;
    /**
     * Indicator of whether AVC support is enabled or disabled
     *
     * @var bool
     */
    public bool $avcEnabled = false;
    /**
     * @var bool
     */
    public bool $clientVirtualIdExtractionEnabled = false;
    /**
     * Indicator of whether URL Filtering is enabled or disabled
     *
     * @var bool
     */
    public bool $urlFilteringPolicyEnabled = false;
    /**
     * The URL Filtering policy ID.
     *
     * @var string
     */
    public string $urlFilteringPolicyId;
    /**
     * Indicator of whether Wi-Fi Calling is enabled or disabled
     *
     * @var bool
     */
    public bool $wifiCallingPolicyEnabled = false;
    /**
     * The Wi-Fi Calling policy IDs. (Maximum allowed number is 5)
     *
     * @var list<string>
     */
    public array $wifiCallingPolicyIds;
    /**
     * SSID Rate Limiting uplink enabled.
     *
     * @var bool
     */
    public bool $uplinkEnabled = false;
    /**
     * SSID Rate Limiting uplink.
     *
     * @var float
     */
    public float $uplinkRate = 0.0;
    /**
     * SSID Rate Limiting downlink enabled.
     *
     * @var bool
     */
    public bool $downlinkEnabled = false;
    /**
     * SSID Rate Limiting downlink.
     *
     * @var float
     */
    public float $downlinkRate = 0.0;
    /**
     * Multicast Rate Limiting uplink enabled.
     *
     * @var bool
     */
    public bool $multicastUplinkRateLimitEnabled = false;
    /**
     * Multicast Rate Limiting uplink (mbps).
     *
     * @var int
     */
    public int $multicastUplinkRateLimit;
    /**
     * Multicast Rate Limiting downlink enabled.
     *
     * @var bool
     */
    public bool $multicastDownlinkRateLimitEnabled = false;
    /**
     * Multicast Rate Limiting downlink (mbps).
     *
     * @var int
     */
    public int $multicastDownlinkRateLimit;
    /**
     * Multicast Rate Limiting uplink 6G enabled.
     *
     * @var bool
     */
    public bool $multicastUplinkRateLimit6gEnabled;
    /**
     * Multicast Rate Limiting downlink 6G enabled.
     *
     * @var bool
     */
    public bool $multicastDownlinkRateLimit6gEnabled;
    /**
     * UE Rate Limiting uplink.
     *
     * @var string
     */
    public string $ratePerSTAUplink;
    /**
     * UE Rate Limiting downlink.
     *
     * @var string
     */
    public string $ratePerSTADownlink;
    /**
     * DTIM Interval
     *
     * @var int
     */
    public int $dtimInterval = 1;
    /**
     * Directed Threshold Setting, Defines the client count at which an AP will stop converting group addressed data traffic to unicast.
     *
     * @var int
     */
    public int $directedThreshold = 5;
    /**
     * Flow log enabled.
     *
     * @var bool
     */
    public bool $flowLogEnabled = false;
    /**
     * Airtime decongestion enabled.
     *
     * @var bool
     */
    public bool $hdOverheadOptimizeEnable = false;
    /**
     * Join RSSI threshold. Value should be 0 (disabled) or between -90 and -60
     *
     * @var int
     */
    public int $probeRssiThr = -85;
    /**
     * Transient Client Management enabled.
     *
     * @var bool
     */
    public bool $transientClientMgmtEnable = false;
    /**
     * Join wait time.
     *
     * @var int
     */
    public int $joinIgnoreTimeout = 30;
    /**
     * Join expire time.
     *
     * @var int
     */
    public int $joinAcceptTimeout = 300;
    /**
     * Join wait threshold.
     *
     * @var int
     */
    public int $joinIgnoreThr = 10;
    /**
     * Drop Random Probes enabled.
     *
     * @var bool
     */
    public bool $dropRandomProbesEnabled = false;
    /**
     * Auth RSSI threshold.
     *
     * @var int
     */
    public int $authRssiThr;
    /**
     * Assoc RSSI threshold.
     *
     * @var int
     */
    public int $assocRssiThr;
    /**
     * Optimized Connectivity Experience(OCE) enabled.
     *
     * @var bool
     */
    public bool $oceEnabled = false;
    /**
     * Broadcast probe response delay.
     *
     * @var int
     */
    public int $oceBroadcastProbeResponseDelay = 15;
    /**
     * RSSI-based association rejection threshold.
     *
     * @var int
     */
    public int $oceRssiBasedAssociationRejectionThreshold = -75;
    /**
     * Reduce Neighbor Report enabled.
     *
     * @var bool
     */
    public bool $oceReduceNeighborReportEnabled = false;
    /**
     * Ap Channel Report enabled.
     *
     * @var bool
     */
    public bool $oceApChannelReportEnabled = false;
    /**
     * @var WlanFastInitialLinkSetup
     */
    public WlanFastInitialLinkSetup $fils;
    /**
     * @var string
     */
    public string $dhcp82SubOptRadiusFormat;
    /**
     * DNS Spoofing Profile ID
     *
     * @var string
     */
    public string $dnsSpoofingProfileId;
    /**
     * @var string
     */
    public string $vlanNameProfileId;
    /**
     * Allow which user role can access this WLAN.
     *
     * @var WlanWlanAdvancedUserRoleAccess
     */
    public WlanWlanAdvancedUserRoleAccess $userRoleAccess;
}