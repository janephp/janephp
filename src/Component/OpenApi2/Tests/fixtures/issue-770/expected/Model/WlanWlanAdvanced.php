<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanAdvanced
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Indicates whether wireless client isolation is enabled or disabled
     *
     * @var bool
     */
    protected $clientIsolationEnabled = false;
    /**
     * Indicates whether isolate unicast of wireless client isolation is enabled or disabled
     *
     * @var bool
     */
    protected $clientIsolationUnicastEnabled = true;
    /**
     * Indicates whether isolate multicast of wireless client isolation is enabled or disabled
     *
     * @var bool
     */
    protected $clientIsolationMulticastEnabled;
    /**
     * Indicates whether Automatic support for VRRP of wireless client isolation is enabled or disabled
     *
     * @var bool
     */
    protected $clientIsolationAutoVrrpEnabled = false;
    /**
     * @var CommonGenericRef
     */
    protected $clientIsolationWhitelist;
    /**
     * Priority of the WLAN
     *
     * @var string
     */
    protected $priority = 'High';
    /**
     * Indicates whether the SSID is hidden or broadcast
     *
     * @var bool
     */
    protected $hideSsidEnabled = false;
    /**
     * Allow WISPr WLAN for Hotspot 2.0 Onboarding
     *
     * @var bool
     */
    protected $hs20Onboarding = false;
    /**
     * Maximum number of clients per radio
     *
     * @var int
     */
    protected $maxClientsPerRadio = 100;
    /**
     * Client idle timeout in seconds
     *
     * @var int
     */
    protected $clientIdleTimeoutSec = 120;
    /**
     * Indicates whether GTK rekey feature is enabled or disabled
     *
     * @var bool
     */
    protected $gtkRekeyEnabled = true;
    /**
     * Indicates whether wifi6 feature is enabled or disabled
     *
     * @var bool
     */
    protected $wifi6Enabled = true;
    /**
     * User session timeout in seconds. This variable only support wlan types ["standard8021X", "standard8021Xmac", "standardmac", "wisprmac"]
     *
     * @var int
     */
    protected $userSessionTimeout = 172800;
    /**
     * Indicates whether dgaf is enabled or disabled
     *
     * @var bool
     */
    protected $dgafEnabled;
    /**
     * Indicates whether Client Load Balancing is enabled or disabled
     *
     * @var bool
     */
    protected $clientLoadBalancingEnabled = true;
    /**
     * Indicates whether proxy ARP is enabled or disabled
     *
     * @var bool
     */
    protected $proxyARPEnabled = false;
    /**
     * Indicates whether ND Proxy is enabled or disabled
     *
     * @var bool
     */
    protected $ndProxyEnabled = false;
    /**
     * Indicates whether supperssNS is enabled or disabled
     *
     * @var bool
     */
    protected $suppressNsEnabled = false;
    /**
     * Indicates whether RA proxy is enabled or disabled
     *
     * @var bool
     */
    protected $raProxyEnabled = false;
    /**
     * Indicates whether RS/RA Guard is enabled or disabled
     *
     * @var bool
     */
    protected $rsraGuardEnabled = false;
    /**
     * Indicates whether RA Throttling is enabled or disabled
     *
     * @var bool
     */
    protected $raThrottlingEnabled = false;
    /**
     * Max Allowed RAs
     *
     * @var int
     */
    protected $maxAllowedRA = 10;
    /**
     * A timer that RA proxy runs and once receives unsolicited RA checks against the configured time and allow/drop RA based on next timeout
     *
     * @var int
     */
    protected $raInterval = 10;
    /**
     * Indicates whether support for 802.11d is enabled or disabled
     *
     * @var bool
     */
    protected $support80211dEnabled = true;
    /**
     * Indicates whether support for 802.11k is enabled or disabled
     *
     * @var bool
     */
    protected $support80211kEnabled = true;
    /**
     * Anti-Spoofing enabled
     *
     * @var bool
     */
    protected $antiSpoofingEnabled = false;
    /**
     * ARP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @var int
     */
    protected $arpRequestRateLimit;
    /**
     * DHCP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @var int
     */
    protected $dhcpRequestRateLimit;
    /**
     * Force DHCP disconnects the client if the client does not obtain a valid IP address within the timeout peroid. To disable force DHCP, set this value to zero (0).
     *
     * @var int
     */
    protected $forceClientDHCPTimeoutSec = 0;
    /**
     * Indicates whether DCHP Option 82 is enabled or disabled. This variable no longer supports from v8_1 and only kept for backward compatibility.
     *
     * @var bool
     */
    protected $dhcpOption82Enabled = false;
    /**
     * DHCP Option 82 format. This variable no longer supports from v8_1 and only kept for backward compatibility.
     *
     * @var string
     */
    protected $dhcp82Format;
    /**
     * Subopt-1 format
     *
     * @var string
     */
    protected $dhcp82SubOpt1Format;
    /**
     * Subopt-2 format
     *
     * @var string
     */
    protected $dhcp82SubOpt2Format;
    /**
     * Subopt-150 with VLAN-Id
     *
     * @var string
     */
    protected $dhcp82SubOpt150Format;
    /**
     * Subopt-151 format
     *
     * @var string
     */
    protected $dhcp82SubOpt151Format;
    /**
     * Subopt-151 Area Name value
     *
     * @var string
     */
    protected $dhcp82SubOpt151AreaName;
    /**
     * AP and Client Mac format. If dhcpOption82Enabled is true, you have to set the dhcp82MacFormat ["COLON","HYPHEN","NODELIMITER"].
     *
     * @var string
     */
    protected $dhcp82MacFormat;
    /**
     * Indicates whether to send statistics of unauthorized clients or not
     *
     * @var bool
     */
    protected $unauthClientStatsEnabled = false;
    /**
     * Indicates whether client fingerprinting is enabled or disabled
     *
     * @var bool
     */
    protected $clientFingerprintingEnabled = false;
    /**
     * Drop the broadcast/multicast packets from associated clients.
     *
     * @var bool
     */
    protected $multicastFilterDrop = false;
    /**
     * Indicates whether OFDM only is enabled or disabled
     *
     * @var bool
     */
    protected $ofdmOnlyEnabled = false;
    /**
     * Indicates whether band balancing is enabled or disabled
     *
     * @var string
     */
    protected $bandBalancing = 'UseZoneSetting';
    /**
     * @var string
     */
    protected $bssMinRateMbps = 'Disable';
    /**
     * @var string
     */
    protected $mgmtTxRateMbps = '2 mbps';
    /**
     * Indicator of whether PKM caching support is enabled or disabled. The default value is true when the WLAN is WPA+AES non open WLAN.
     *
     * @var bool
     */
    protected $pmkCachingEnabled;
    /**
     * Indicator of whether OKC support is enabled or disabled. The default value is true when the WLAN is WPA+AES non open WLAN.
     *
     * @var bool
     */
    protected $okcEnabled;
    /**
     * Indicator of whether AVC support is enabled or disabled
     *
     * @var bool
     */
    protected $avcEnabled = false;
    /**
     * @var bool
     */
    protected $clientVirtualIdExtractionEnabled = false;
    /**
     * Indicator of whether URL Filtering is enabled or disabled
     *
     * @var bool
     */
    protected $urlFilteringPolicyEnabled = false;
    /**
     * The URL Filtering policy ID.
     *
     * @var string
     */
    protected $urlFilteringPolicyId;
    /**
     * Indicator of whether Wi-Fi Calling is enabled or disabled
     *
     * @var bool
     */
    protected $wifiCallingPolicyEnabled = false;
    /**
     * The Wi-Fi Calling policy IDs. (Maximum allowed number is 5)
     *
     * @var list<string>
     */
    protected $wifiCallingPolicyIds;
    /**
     * SSID Rate Limiting uplink enabled.
     *
     * @var bool
     */
    protected $uplinkEnabled = false;
    /**
     * SSID Rate Limiting uplink.
     *
     * @var float
     */
    protected $uplinkRate = 0.0;
    /**
     * SSID Rate Limiting downlink enabled.
     *
     * @var bool
     */
    protected $downlinkEnabled = false;
    /**
     * SSID Rate Limiting downlink.
     *
     * @var float
     */
    protected $downlinkRate = 0.0;
    /**
     * Multicast Rate Limiting uplink enabled.
     *
     * @var bool
     */
    protected $multicastUplinkRateLimitEnabled = false;
    /**
     * Multicast Rate Limiting uplink (mbps).
     *
     * @var int
     */
    protected $multicastUplinkRateLimit;
    /**
     * Multicast Rate Limiting downlink enabled.
     *
     * @var bool
     */
    protected $multicastDownlinkRateLimitEnabled = false;
    /**
     * Multicast Rate Limiting downlink (mbps).
     *
     * @var int
     */
    protected $multicastDownlinkRateLimit;
    /**
     * Multicast Rate Limiting uplink 6G enabled.
     *
     * @var bool
     */
    protected $multicastUplinkRateLimit6gEnabled;
    /**
     * Multicast Rate Limiting downlink 6G enabled.
     *
     * @var bool
     */
    protected $multicastDownlinkRateLimit6gEnabled;
    /**
     * UE Rate Limiting uplink.
     *
     * @var string
     */
    protected $ratePerSTAUplink;
    /**
     * UE Rate Limiting downlink.
     *
     * @var string
     */
    protected $ratePerSTADownlink;
    /**
     * DTIM Interval
     *
     * @var int
     */
    protected $dtimInterval = 1;
    /**
     * Directed Threshold Setting, Defines the client count at which an AP will stop converting group addressed data traffic to unicast.
     *
     * @var int
     */
    protected $directedThreshold = 5;
    /**
     * Flow log enabled.
     *
     * @var bool
     */
    protected $flowLogEnabled = false;
    /**
     * Airtime decongestion enabled.
     *
     * @var bool
     */
    protected $hdOverheadOptimizeEnable = false;
    /**
     * Join RSSI threshold. Value should be 0 (disabled) or between -90 and -60
     *
     * @var int
     */
    protected $probeRssiThr = -85;
    /**
     * Transient Client Management enabled.
     *
     * @var bool
     */
    protected $transientClientMgmtEnable = false;
    /**
     * Join wait time.
     *
     * @var int
     */
    protected $joinIgnoreTimeout = 30;
    /**
     * Join expire time.
     *
     * @var int
     */
    protected $joinAcceptTimeout = 300;
    /**
     * Join wait threshold.
     *
     * @var int
     */
    protected $joinIgnoreThr = 10;
    /**
     * Drop Random Probes enabled.
     *
     * @var bool
     */
    protected $dropRandomProbesEnabled = false;
    /**
     * Auth RSSI threshold.
     *
     * @var int
     */
    protected $authRssiThr;
    /**
     * Assoc RSSI threshold.
     *
     * @var int
     */
    protected $assocRssiThr;
    /**
     * Optimized Connectivity Experience(OCE) enabled.
     *
     * @var bool
     */
    protected $oceEnabled = false;
    /**
     * Broadcast probe response delay.
     *
     * @var int
     */
    protected $oceBroadcastProbeResponseDelay = 15;
    /**
     * RSSI-based association rejection threshold.
     *
     * @var int
     */
    protected $oceRssiBasedAssociationRejectionThreshold = -75;
    /**
     * Reduce Neighbor Report enabled.
     *
     * @var bool
     */
    protected $oceReduceNeighborReportEnabled = false;
    /**
     * Ap Channel Report enabled.
     *
     * @var bool
     */
    protected $oceApChannelReportEnabled = false;
    /**
     * @var WlanFastInitialLinkSetup
     */
    protected $fils;
    /**
     * @var string
     */
    protected $dhcp82SubOptRadiusFormat;
    /**
     * DNS Spoofing Profile ID
     *
     * @var string
     */
    protected $dnsSpoofingProfileId;
    /**
     * @var string
     */
    protected $vlanNameProfileId;
    /**
     * Allow which user role can access this WLAN.
     *
     * @var WlanWlanAdvancedUserRoleAccess
     */
    protected $userRoleAccess;
    /**
     * Indicates whether wireless client isolation is enabled or disabled
     *
     * @return bool
     */
    public function getClientIsolationEnabled(): bool
    {
        return $this->clientIsolationEnabled;
    }
    /**
     * Indicates whether wireless client isolation is enabled or disabled
     *
     * @param bool $clientIsolationEnabled
     *
     * @return self
     */
    public function setClientIsolationEnabled(bool $clientIsolationEnabled): self
    {
        $this->initialized['clientIsolationEnabled'] = true;
        $this->clientIsolationEnabled = $clientIsolationEnabled;
        return $this;
    }
    /**
     * Indicates whether isolate unicast of wireless client isolation is enabled or disabled
     *
     * @return bool
     */
    public function getClientIsolationUnicastEnabled(): bool
    {
        return $this->clientIsolationUnicastEnabled;
    }
    /**
     * Indicates whether isolate unicast of wireless client isolation is enabled or disabled
     *
     * @param bool $clientIsolationUnicastEnabled
     *
     * @return self
     */
    public function setClientIsolationUnicastEnabled(bool $clientIsolationUnicastEnabled): self
    {
        $this->initialized['clientIsolationUnicastEnabled'] = true;
        $this->clientIsolationUnicastEnabled = $clientIsolationUnicastEnabled;
        return $this;
    }
    /**
     * Indicates whether isolate multicast of wireless client isolation is enabled or disabled
     *
     * @return bool
     */
    public function getClientIsolationMulticastEnabled(): bool
    {
        return $this->clientIsolationMulticastEnabled;
    }
    /**
     * Indicates whether isolate multicast of wireless client isolation is enabled or disabled
     *
     * @param bool $clientIsolationMulticastEnabled
     *
     * @return self
     */
    public function setClientIsolationMulticastEnabled(bool $clientIsolationMulticastEnabled): self
    {
        $this->initialized['clientIsolationMulticastEnabled'] = true;
        $this->clientIsolationMulticastEnabled = $clientIsolationMulticastEnabled;
        return $this;
    }
    /**
     * Indicates whether Automatic support for VRRP of wireless client isolation is enabled or disabled
     *
     * @return bool
     */
    public function getClientIsolationAutoVrrpEnabled(): bool
    {
        return $this->clientIsolationAutoVrrpEnabled;
    }
    /**
     * Indicates whether Automatic support for VRRP of wireless client isolation is enabled or disabled
     *
     * @param bool $clientIsolationAutoVrrpEnabled
     *
     * @return self
     */
    public function setClientIsolationAutoVrrpEnabled(bool $clientIsolationAutoVrrpEnabled): self
    {
        $this->initialized['clientIsolationAutoVrrpEnabled'] = true;
        $this->clientIsolationAutoVrrpEnabled = $clientIsolationAutoVrrpEnabled;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getClientIsolationWhitelist(): CommonGenericRef
    {
        return $this->clientIsolationWhitelist;
    }
    /**
     * @param CommonGenericRef $clientIsolationWhitelist
     *
     * @return self
     */
    public function setClientIsolationWhitelist(CommonGenericRef $clientIsolationWhitelist): self
    {
        $this->initialized['clientIsolationWhitelist'] = true;
        $this->clientIsolationWhitelist = $clientIsolationWhitelist;
        return $this;
    }
    /**
     * Priority of the WLAN
     *
     * @return string
     */
    public function getPriority(): string
    {
        return $this->priority;
    }
    /**
     * Priority of the WLAN
     *
     * @param string $priority
     *
     * @return self
     */
    public function setPriority(string $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * Indicates whether the SSID is hidden or broadcast
     *
     * @return bool
     */
    public function getHideSsidEnabled(): bool
    {
        return $this->hideSsidEnabled;
    }
    /**
     * Indicates whether the SSID is hidden or broadcast
     *
     * @param bool $hideSsidEnabled
     *
     * @return self
     */
    public function setHideSsidEnabled(bool $hideSsidEnabled): self
    {
        $this->initialized['hideSsidEnabled'] = true;
        $this->hideSsidEnabled = $hideSsidEnabled;
        return $this;
    }
    /**
     * Allow WISPr WLAN for Hotspot 2.0 Onboarding
     *
     * @return bool
     */
    public function getHs20Onboarding(): bool
    {
        return $this->hs20Onboarding;
    }
    /**
     * Allow WISPr WLAN for Hotspot 2.0 Onboarding
     *
     * @param bool $hs20Onboarding
     *
     * @return self
     */
    public function setHs20Onboarding(bool $hs20Onboarding): self
    {
        $this->initialized['hs20Onboarding'] = true;
        $this->hs20Onboarding = $hs20Onboarding;
        return $this;
    }
    /**
     * Maximum number of clients per radio
     *
     * @return int
     */
    public function getMaxClientsPerRadio(): int
    {
        return $this->maxClientsPerRadio;
    }
    /**
     * Maximum number of clients per radio
     *
     * @param int $maxClientsPerRadio
     *
     * @return self
     */
    public function setMaxClientsPerRadio(int $maxClientsPerRadio): self
    {
        $this->initialized['maxClientsPerRadio'] = true;
        $this->maxClientsPerRadio = $maxClientsPerRadio;
        return $this;
    }
    /**
     * Client idle timeout in seconds
     *
     * @return int
     */
    public function getClientIdleTimeoutSec(): int
    {
        return $this->clientIdleTimeoutSec;
    }
    /**
     * Client idle timeout in seconds
     *
     * @param int $clientIdleTimeoutSec
     *
     * @return self
     */
    public function setClientIdleTimeoutSec(int $clientIdleTimeoutSec): self
    {
        $this->initialized['clientIdleTimeoutSec'] = true;
        $this->clientIdleTimeoutSec = $clientIdleTimeoutSec;
        return $this;
    }
    /**
     * Indicates whether GTK rekey feature is enabled or disabled
     *
     * @return bool
     */
    public function getGtkRekeyEnabled(): bool
    {
        return $this->gtkRekeyEnabled;
    }
    /**
     * Indicates whether GTK rekey feature is enabled or disabled
     *
     * @param bool $gtkRekeyEnabled
     *
     * @return self
     */
    public function setGtkRekeyEnabled(bool $gtkRekeyEnabled): self
    {
        $this->initialized['gtkRekeyEnabled'] = true;
        $this->gtkRekeyEnabled = $gtkRekeyEnabled;
        return $this;
    }
    /**
     * Indicates whether wifi6 feature is enabled or disabled
     *
     * @return bool
     */
    public function getWifi6Enabled(): bool
    {
        return $this->wifi6Enabled;
    }
    /**
     * Indicates whether wifi6 feature is enabled or disabled
     *
     * @param bool $wifi6Enabled
     *
     * @return self
     */
    public function setWifi6Enabled(bool $wifi6Enabled): self
    {
        $this->initialized['wifi6Enabled'] = true;
        $this->wifi6Enabled = $wifi6Enabled;
        return $this;
    }
    /**
     * User session timeout in seconds. This variable only support wlan types ["standard8021X", "standard8021Xmac", "standardmac", "wisprmac"]
     *
     * @return int
     */
    public function getUserSessionTimeout(): int
    {
        return $this->userSessionTimeout;
    }
    /**
     * User session timeout in seconds. This variable only support wlan types ["standard8021X", "standard8021Xmac", "standardmac", "wisprmac"]
     *
     * @param int $userSessionTimeout
     *
     * @return self
     */
    public function setUserSessionTimeout(int $userSessionTimeout): self
    {
        $this->initialized['userSessionTimeout'] = true;
        $this->userSessionTimeout = $userSessionTimeout;
        return $this;
    }
    /**
     * Indicates whether dgaf is enabled or disabled
     *
     * @return bool
     */
    public function getDgafEnabled(): bool
    {
        return $this->dgafEnabled;
    }
    /**
     * Indicates whether dgaf is enabled or disabled
     *
     * @param bool $dgafEnabled
     *
     * @return self
     */
    public function setDgafEnabled(bool $dgafEnabled): self
    {
        $this->initialized['dgafEnabled'] = true;
        $this->dgafEnabled = $dgafEnabled;
        return $this;
    }
    /**
     * Indicates whether Client Load Balancing is enabled or disabled
     *
     * @return bool
     */
    public function getClientLoadBalancingEnabled(): bool
    {
        return $this->clientLoadBalancingEnabled;
    }
    /**
     * Indicates whether Client Load Balancing is enabled or disabled
     *
     * @param bool $clientLoadBalancingEnabled
     *
     * @return self
     */
    public function setClientLoadBalancingEnabled(bool $clientLoadBalancingEnabled): self
    {
        $this->initialized['clientLoadBalancingEnabled'] = true;
        $this->clientLoadBalancingEnabled = $clientLoadBalancingEnabled;
        return $this;
    }
    /**
     * Indicates whether proxy ARP is enabled or disabled
     *
     * @return bool
     */
    public function getProxyARPEnabled(): bool
    {
        return $this->proxyARPEnabled;
    }
    /**
     * Indicates whether proxy ARP is enabled or disabled
     *
     * @param bool $proxyARPEnabled
     *
     * @return self
     */
    public function setProxyARPEnabled(bool $proxyARPEnabled): self
    {
        $this->initialized['proxyARPEnabled'] = true;
        $this->proxyARPEnabled = $proxyARPEnabled;
        return $this;
    }
    /**
     * Indicates whether ND Proxy is enabled or disabled
     *
     * @return bool
     */
    public function getNdProxyEnabled(): bool
    {
        return $this->ndProxyEnabled;
    }
    /**
     * Indicates whether ND Proxy is enabled or disabled
     *
     * @param bool $ndProxyEnabled
     *
     * @return self
     */
    public function setNdProxyEnabled(bool $ndProxyEnabled): self
    {
        $this->initialized['ndProxyEnabled'] = true;
        $this->ndProxyEnabled = $ndProxyEnabled;
        return $this;
    }
    /**
     * Indicates whether supperssNS is enabled or disabled
     *
     * @return bool
     */
    public function getSuppressNsEnabled(): bool
    {
        return $this->suppressNsEnabled;
    }
    /**
     * Indicates whether supperssNS is enabled or disabled
     *
     * @param bool $suppressNsEnabled
     *
     * @return self
     */
    public function setSuppressNsEnabled(bool $suppressNsEnabled): self
    {
        $this->initialized['suppressNsEnabled'] = true;
        $this->suppressNsEnabled = $suppressNsEnabled;
        return $this;
    }
    /**
     * Indicates whether RA proxy is enabled or disabled
     *
     * @return bool
     */
    public function getRaProxyEnabled(): bool
    {
        return $this->raProxyEnabled;
    }
    /**
     * Indicates whether RA proxy is enabled or disabled
     *
     * @param bool $raProxyEnabled
     *
     * @return self
     */
    public function setRaProxyEnabled(bool $raProxyEnabled): self
    {
        $this->initialized['raProxyEnabled'] = true;
        $this->raProxyEnabled = $raProxyEnabled;
        return $this;
    }
    /**
     * Indicates whether RS/RA Guard is enabled or disabled
     *
     * @return bool
     */
    public function getRsraGuardEnabled(): bool
    {
        return $this->rsraGuardEnabled;
    }
    /**
     * Indicates whether RS/RA Guard is enabled or disabled
     *
     * @param bool $rsraGuardEnabled
     *
     * @return self
     */
    public function setRsraGuardEnabled(bool $rsraGuardEnabled): self
    {
        $this->initialized['rsraGuardEnabled'] = true;
        $this->rsraGuardEnabled = $rsraGuardEnabled;
        return $this;
    }
    /**
     * Indicates whether RA Throttling is enabled or disabled
     *
     * @return bool
     */
    public function getRaThrottlingEnabled(): bool
    {
        return $this->raThrottlingEnabled;
    }
    /**
     * Indicates whether RA Throttling is enabled or disabled
     *
     * @param bool $raThrottlingEnabled
     *
     * @return self
     */
    public function setRaThrottlingEnabled(bool $raThrottlingEnabled): self
    {
        $this->initialized['raThrottlingEnabled'] = true;
        $this->raThrottlingEnabled = $raThrottlingEnabled;
        return $this;
    }
    /**
     * Max Allowed RAs
     *
     * @return int
     */
    public function getMaxAllowedRA(): int
    {
        return $this->maxAllowedRA;
    }
    /**
     * Max Allowed RAs
     *
     * @param int $maxAllowedRA
     *
     * @return self
     */
    public function setMaxAllowedRA(int $maxAllowedRA): self
    {
        $this->initialized['maxAllowedRA'] = true;
        $this->maxAllowedRA = $maxAllowedRA;
        return $this;
    }
    /**
     * A timer that RA proxy runs and once receives unsolicited RA checks against the configured time and allow/drop RA based on next timeout
     *
     * @return int
     */
    public function getRaInterval(): int
    {
        return $this->raInterval;
    }
    /**
     * A timer that RA proxy runs and once receives unsolicited RA checks against the configured time and allow/drop RA based on next timeout
     *
     * @param int $raInterval
     *
     * @return self
     */
    public function setRaInterval(int $raInterval): self
    {
        $this->initialized['raInterval'] = true;
        $this->raInterval = $raInterval;
        return $this;
    }
    /**
     * Indicates whether support for 802.11d is enabled or disabled
     *
     * @return bool
     */
    public function getSupport80211dEnabled(): bool
    {
        return $this->support80211dEnabled;
    }
    /**
     * Indicates whether support for 802.11d is enabled or disabled
     *
     * @param bool $support80211dEnabled
     *
     * @return self
     */
    public function setSupport80211dEnabled(bool $support80211dEnabled): self
    {
        $this->initialized['support80211dEnabled'] = true;
        $this->support80211dEnabled = $support80211dEnabled;
        return $this;
    }
    /**
     * Indicates whether support for 802.11k is enabled or disabled
     *
     * @return bool
     */
    public function getSupport80211kEnabled(): bool
    {
        return $this->support80211kEnabled;
    }
    /**
     * Indicates whether support for 802.11k is enabled or disabled
     *
     * @param bool $support80211kEnabled
     *
     * @return self
     */
    public function setSupport80211kEnabled(bool $support80211kEnabled): self
    {
        $this->initialized['support80211kEnabled'] = true;
        $this->support80211kEnabled = $support80211kEnabled;
        return $this;
    }
    /**
     * Anti-Spoofing enabled
     *
     * @return bool
     */
    public function getAntiSpoofingEnabled(): bool
    {
        return $this->antiSpoofingEnabled;
    }
    /**
     * Anti-Spoofing enabled
     *
     * @param bool $antiSpoofingEnabled
     *
     * @return self
     */
    public function setAntiSpoofingEnabled(bool $antiSpoofingEnabled): self
    {
        $this->initialized['antiSpoofingEnabled'] = true;
        $this->antiSpoofingEnabled = $antiSpoofingEnabled;
        return $this;
    }
    /**
     * ARP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @return int
     */
    public function getArpRequestRateLimit(): int
    {
        return $this->arpRequestRateLimit;
    }
    /**
     * ARP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @param int $arpRequestRateLimit
     *
     * @return self
     */
    public function setArpRequestRateLimit(int $arpRequestRateLimit): self
    {
        $this->initialized['arpRequestRateLimit'] = true;
        $this->arpRequestRateLimit = $arpRequestRateLimit;
        return $this;
    }
    /**
     * DHCP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @return int
     */
    public function getDhcpRequestRateLimit(): int
    {
        return $this->dhcpRequestRateLimit;
    }
    /**
     * DHCP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @param int $dhcpRequestRateLimit
     *
     * @return self
     */
    public function setDhcpRequestRateLimit(int $dhcpRequestRateLimit): self
    {
        $this->initialized['dhcpRequestRateLimit'] = true;
        $this->dhcpRequestRateLimit = $dhcpRequestRateLimit;
        return $this;
    }
    /**
     * Force DHCP disconnects the client if the client does not obtain a valid IP address within the timeout peroid. To disable force DHCP, set this value to zero (0).
     *
     * @return int
     */
    public function getForceClientDHCPTimeoutSec(): int
    {
        return $this->forceClientDHCPTimeoutSec;
    }
    /**
     * Force DHCP disconnects the client if the client does not obtain a valid IP address within the timeout peroid. To disable force DHCP, set this value to zero (0).
     *
     * @param int $forceClientDHCPTimeoutSec
     *
     * @return self
     */
    public function setForceClientDHCPTimeoutSec(int $forceClientDHCPTimeoutSec): self
    {
        $this->initialized['forceClientDHCPTimeoutSec'] = true;
        $this->forceClientDHCPTimeoutSec = $forceClientDHCPTimeoutSec;
        return $this;
    }
    /**
     * Indicates whether DCHP Option 82 is enabled or disabled. This variable no longer supports from v8_1 and only kept for backward compatibility.
     *
     * @return bool
     */
    public function getDhcpOption82Enabled(): bool
    {
        return $this->dhcpOption82Enabled;
    }
    /**
     * Indicates whether DCHP Option 82 is enabled or disabled. This variable no longer supports from v8_1 and only kept for backward compatibility.
     *
     * @param bool $dhcpOption82Enabled
     *
     * @return self
     */
    public function setDhcpOption82Enabled(bool $dhcpOption82Enabled): self
    {
        $this->initialized['dhcpOption82Enabled'] = true;
        $this->dhcpOption82Enabled = $dhcpOption82Enabled;
        return $this;
    }
    /**
     * DHCP Option 82 format. This variable no longer supports from v8_1 and only kept for backward compatibility.
     *
     * @return string
     */
    public function getDhcp82Format(): string
    {
        return $this->dhcp82Format;
    }
    /**
     * DHCP Option 82 format. This variable no longer supports from v8_1 and only kept for backward compatibility.
     *
     * @param string $dhcp82Format
     *
     * @return self
     */
    public function setDhcp82Format(string $dhcp82Format): self
    {
        $this->initialized['dhcp82Format'] = true;
        $this->dhcp82Format = $dhcp82Format;
        return $this;
    }
    /**
     * Subopt-1 format
     *
     * @return string
     */
    public function getDhcp82SubOpt1Format(): string
    {
        return $this->dhcp82SubOpt1Format;
    }
    /**
     * Subopt-1 format
     *
     * @param string $dhcp82SubOpt1Format
     *
     * @return self
     */
    public function setDhcp82SubOpt1Format(string $dhcp82SubOpt1Format): self
    {
        $this->initialized['dhcp82SubOpt1Format'] = true;
        $this->dhcp82SubOpt1Format = $dhcp82SubOpt1Format;
        return $this;
    }
    /**
     * Subopt-2 format
     *
     * @return string
     */
    public function getDhcp82SubOpt2Format(): string
    {
        return $this->dhcp82SubOpt2Format;
    }
    /**
     * Subopt-2 format
     *
     * @param string $dhcp82SubOpt2Format
     *
     * @return self
     */
    public function setDhcp82SubOpt2Format(string $dhcp82SubOpt2Format): self
    {
        $this->initialized['dhcp82SubOpt2Format'] = true;
        $this->dhcp82SubOpt2Format = $dhcp82SubOpt2Format;
        return $this;
    }
    /**
     * Subopt-150 with VLAN-Id
     *
     * @return string
     */
    public function getDhcp82SubOpt150Format(): string
    {
        return $this->dhcp82SubOpt150Format;
    }
    /**
     * Subopt-150 with VLAN-Id
     *
     * @param string $dhcp82SubOpt150Format
     *
     * @return self
     */
    public function setDhcp82SubOpt150Format(string $dhcp82SubOpt150Format): self
    {
        $this->initialized['dhcp82SubOpt150Format'] = true;
        $this->dhcp82SubOpt150Format = $dhcp82SubOpt150Format;
        return $this;
    }
    /**
     * Subopt-151 format
     *
     * @return string
     */
    public function getDhcp82SubOpt151Format(): string
    {
        return $this->dhcp82SubOpt151Format;
    }
    /**
     * Subopt-151 format
     *
     * @param string $dhcp82SubOpt151Format
     *
     * @return self
     */
    public function setDhcp82SubOpt151Format(string $dhcp82SubOpt151Format): self
    {
        $this->initialized['dhcp82SubOpt151Format'] = true;
        $this->dhcp82SubOpt151Format = $dhcp82SubOpt151Format;
        return $this;
    }
    /**
     * Subopt-151 Area Name value
     *
     * @return string
     */
    public function getDhcp82SubOpt151AreaName(): string
    {
        return $this->dhcp82SubOpt151AreaName;
    }
    /**
     * Subopt-151 Area Name value
     *
     * @param string $dhcp82SubOpt151AreaName
     *
     * @return self
     */
    public function setDhcp82SubOpt151AreaName(string $dhcp82SubOpt151AreaName): self
    {
        $this->initialized['dhcp82SubOpt151AreaName'] = true;
        $this->dhcp82SubOpt151AreaName = $dhcp82SubOpt151AreaName;
        return $this;
    }
    /**
     * AP and Client Mac format. If dhcpOption82Enabled is true, you have to set the dhcp82MacFormat ["COLON","HYPHEN","NODELIMITER"].
     *
     * @return string
     */
    public function getDhcp82MacFormat(): string
    {
        return $this->dhcp82MacFormat;
    }
    /**
     * AP and Client Mac format. If dhcpOption82Enabled is true, you have to set the dhcp82MacFormat ["COLON","HYPHEN","NODELIMITER"].
     *
     * @param string $dhcp82MacFormat
     *
     * @return self
     */
    public function setDhcp82MacFormat(string $dhcp82MacFormat): self
    {
        $this->initialized['dhcp82MacFormat'] = true;
        $this->dhcp82MacFormat = $dhcp82MacFormat;
        return $this;
    }
    /**
     * Indicates whether to send statistics of unauthorized clients or not
     *
     * @return bool
     */
    public function getUnauthClientStatsEnabled(): bool
    {
        return $this->unauthClientStatsEnabled;
    }
    /**
     * Indicates whether to send statistics of unauthorized clients or not
     *
     * @param bool $unauthClientStatsEnabled
     *
     * @return self
     */
    public function setUnauthClientStatsEnabled(bool $unauthClientStatsEnabled): self
    {
        $this->initialized['unauthClientStatsEnabled'] = true;
        $this->unauthClientStatsEnabled = $unauthClientStatsEnabled;
        return $this;
    }
    /**
     * Indicates whether client fingerprinting is enabled or disabled
     *
     * @return bool
     */
    public function getClientFingerprintingEnabled(): bool
    {
        return $this->clientFingerprintingEnabled;
    }
    /**
     * Indicates whether client fingerprinting is enabled or disabled
     *
     * @param bool $clientFingerprintingEnabled
     *
     * @return self
     */
    public function setClientFingerprintingEnabled(bool $clientFingerprintingEnabled): self
    {
        $this->initialized['clientFingerprintingEnabled'] = true;
        $this->clientFingerprintingEnabled = $clientFingerprintingEnabled;
        return $this;
    }
    /**
     * Drop the broadcast/multicast packets from associated clients.
     *
     * @return bool
     */
    public function getMulticastFilterDrop(): bool
    {
        return $this->multicastFilterDrop;
    }
    /**
     * Drop the broadcast/multicast packets from associated clients.
     *
     * @param bool $multicastFilterDrop
     *
     * @return self
     */
    public function setMulticastFilterDrop(bool $multicastFilterDrop): self
    {
        $this->initialized['multicastFilterDrop'] = true;
        $this->multicastFilterDrop = $multicastFilterDrop;
        return $this;
    }
    /**
     * Indicates whether OFDM only is enabled or disabled
     *
     * @return bool
     */
    public function getOfdmOnlyEnabled(): bool
    {
        return $this->ofdmOnlyEnabled;
    }
    /**
     * Indicates whether OFDM only is enabled or disabled
     *
     * @param bool $ofdmOnlyEnabled
     *
     * @return self
     */
    public function setOfdmOnlyEnabled(bool $ofdmOnlyEnabled): self
    {
        $this->initialized['ofdmOnlyEnabled'] = true;
        $this->ofdmOnlyEnabled = $ofdmOnlyEnabled;
        return $this;
    }
    /**
     * Indicates whether band balancing is enabled or disabled
     *
     * @return string
     */
    public function getBandBalancing(): string
    {
        return $this->bandBalancing;
    }
    /**
     * Indicates whether band balancing is enabled or disabled
     *
     * @param string $bandBalancing
     *
     * @return self
     */
    public function setBandBalancing(string $bandBalancing): self
    {
        $this->initialized['bandBalancing'] = true;
        $this->bandBalancing = $bandBalancing;
        return $this;
    }
    /**
     * @return string
     */
    public function getBssMinRateMbps(): string
    {
        return $this->bssMinRateMbps;
    }
    /**
     * @param string $bssMinRateMbps
     *
     * @return self
     */
    public function setBssMinRateMbps(string $bssMinRateMbps): self
    {
        $this->initialized['bssMinRateMbps'] = true;
        $this->bssMinRateMbps = $bssMinRateMbps;
        return $this;
    }
    /**
     * @return string
     */
    public function getMgmtTxRateMbps(): string
    {
        return $this->mgmtTxRateMbps;
    }
    /**
     * @param string $mgmtTxRateMbps
     *
     * @return self
     */
    public function setMgmtTxRateMbps(string $mgmtTxRateMbps): self
    {
        $this->initialized['mgmtTxRateMbps'] = true;
        $this->mgmtTxRateMbps = $mgmtTxRateMbps;
        return $this;
    }
    /**
     * Indicator of whether PKM caching support is enabled or disabled. The default value is true when the WLAN is WPA+AES non open WLAN.
     *
     * @return bool
     */
    public function getPmkCachingEnabled(): bool
    {
        return $this->pmkCachingEnabled;
    }
    /**
     * Indicator of whether PKM caching support is enabled or disabled. The default value is true when the WLAN is WPA+AES non open WLAN.
     *
     * @param bool $pmkCachingEnabled
     *
     * @return self
     */
    public function setPmkCachingEnabled(bool $pmkCachingEnabled): self
    {
        $this->initialized['pmkCachingEnabled'] = true;
        $this->pmkCachingEnabled = $pmkCachingEnabled;
        return $this;
    }
    /**
     * Indicator of whether OKC support is enabled or disabled. The default value is true when the WLAN is WPA+AES non open WLAN.
     *
     * @return bool
     */
    public function getOkcEnabled(): bool
    {
        return $this->okcEnabled;
    }
    /**
     * Indicator of whether OKC support is enabled or disabled. The default value is true when the WLAN is WPA+AES non open WLAN.
     *
     * @param bool $okcEnabled
     *
     * @return self
     */
    public function setOkcEnabled(bool $okcEnabled): self
    {
        $this->initialized['okcEnabled'] = true;
        $this->okcEnabled = $okcEnabled;
        return $this;
    }
    /**
     * Indicator of whether AVC support is enabled or disabled
     *
     * @return bool
     */
    public function getAvcEnabled(): bool
    {
        return $this->avcEnabled;
    }
    /**
     * Indicator of whether AVC support is enabled or disabled
     *
     * @param bool $avcEnabled
     *
     * @return self
     */
    public function setAvcEnabled(bool $avcEnabled): self
    {
        $this->initialized['avcEnabled'] = true;
        $this->avcEnabled = $avcEnabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getClientVirtualIdExtractionEnabled(): bool
    {
        return $this->clientVirtualIdExtractionEnabled;
    }
    /**
     * @param bool $clientVirtualIdExtractionEnabled
     *
     * @return self
     */
    public function setClientVirtualIdExtractionEnabled(bool $clientVirtualIdExtractionEnabled): self
    {
        $this->initialized['clientVirtualIdExtractionEnabled'] = true;
        $this->clientVirtualIdExtractionEnabled = $clientVirtualIdExtractionEnabled;
        return $this;
    }
    /**
     * Indicator of whether URL Filtering is enabled or disabled
     *
     * @return bool
     */
    public function getUrlFilteringPolicyEnabled(): bool
    {
        return $this->urlFilteringPolicyEnabled;
    }
    /**
     * Indicator of whether URL Filtering is enabled or disabled
     *
     * @param bool $urlFilteringPolicyEnabled
     *
     * @return self
     */
    public function setUrlFilteringPolicyEnabled(bool $urlFilteringPolicyEnabled): self
    {
        $this->initialized['urlFilteringPolicyEnabled'] = true;
        $this->urlFilteringPolicyEnabled = $urlFilteringPolicyEnabled;
        return $this;
    }
    /**
     * The URL Filtering policy ID.
     *
     * @return string
     */
    public function getUrlFilteringPolicyId(): string
    {
        return $this->urlFilteringPolicyId;
    }
    /**
     * The URL Filtering policy ID.
     *
     * @param string $urlFilteringPolicyId
     *
     * @return self
     */
    public function setUrlFilteringPolicyId(string $urlFilteringPolicyId): self
    {
        $this->initialized['urlFilteringPolicyId'] = true;
        $this->urlFilteringPolicyId = $urlFilteringPolicyId;
        return $this;
    }
    /**
     * Indicator of whether Wi-Fi Calling is enabled or disabled
     *
     * @return bool
     */
    public function getWifiCallingPolicyEnabled(): bool
    {
        return $this->wifiCallingPolicyEnabled;
    }
    /**
     * Indicator of whether Wi-Fi Calling is enabled or disabled
     *
     * @param bool $wifiCallingPolicyEnabled
     *
     * @return self
     */
    public function setWifiCallingPolicyEnabled(bool $wifiCallingPolicyEnabled): self
    {
        $this->initialized['wifiCallingPolicyEnabled'] = true;
        $this->wifiCallingPolicyEnabled = $wifiCallingPolicyEnabled;
        return $this;
    }
    /**
     * The Wi-Fi Calling policy IDs. (Maximum allowed number is 5)
     *
     * @return list<string>
     */
    public function getWifiCallingPolicyIds(): array
    {
        return $this->wifiCallingPolicyIds;
    }
    /**
     * The Wi-Fi Calling policy IDs. (Maximum allowed number is 5)
     *
     * @param list<string> $wifiCallingPolicyIds
     *
     * @return self
     */
    public function setWifiCallingPolicyIds(array $wifiCallingPolicyIds): self
    {
        $this->initialized['wifiCallingPolicyIds'] = true;
        $this->wifiCallingPolicyIds = $wifiCallingPolicyIds;
        return $this;
    }
    /**
     * SSID Rate Limiting uplink enabled.
     *
     * @return bool
     */
    public function getUplinkEnabled(): bool
    {
        return $this->uplinkEnabled;
    }
    /**
     * SSID Rate Limiting uplink enabled.
     *
     * @param bool $uplinkEnabled
     *
     * @return self
     */
    public function setUplinkEnabled(bool $uplinkEnabled): self
    {
        $this->initialized['uplinkEnabled'] = true;
        $this->uplinkEnabled = $uplinkEnabled;
        return $this;
    }
    /**
     * SSID Rate Limiting uplink.
     *
     * @return float
     */
    public function getUplinkRate(): float
    {
        return $this->uplinkRate;
    }
    /**
     * SSID Rate Limiting uplink.
     *
     * @param float $uplinkRate
     *
     * @return self
     */
    public function setUplinkRate(float $uplinkRate): self
    {
        $this->initialized['uplinkRate'] = true;
        $this->uplinkRate = $uplinkRate;
        return $this;
    }
    /**
     * SSID Rate Limiting downlink enabled.
     *
     * @return bool
     */
    public function getDownlinkEnabled(): bool
    {
        return $this->downlinkEnabled;
    }
    /**
     * SSID Rate Limiting downlink enabled.
     *
     * @param bool $downlinkEnabled
     *
     * @return self
     */
    public function setDownlinkEnabled(bool $downlinkEnabled): self
    {
        $this->initialized['downlinkEnabled'] = true;
        $this->downlinkEnabled = $downlinkEnabled;
        return $this;
    }
    /**
     * SSID Rate Limiting downlink.
     *
     * @return float
     */
    public function getDownlinkRate(): float
    {
        return $this->downlinkRate;
    }
    /**
     * SSID Rate Limiting downlink.
     *
     * @param float $downlinkRate
     *
     * @return self
     */
    public function setDownlinkRate(float $downlinkRate): self
    {
        $this->initialized['downlinkRate'] = true;
        $this->downlinkRate = $downlinkRate;
        return $this;
    }
    /**
     * Multicast Rate Limiting uplink enabled.
     *
     * @return bool
     */
    public function getMulticastUplinkRateLimitEnabled(): bool
    {
        return $this->multicastUplinkRateLimitEnabled;
    }
    /**
     * Multicast Rate Limiting uplink enabled.
     *
     * @param bool $multicastUplinkRateLimitEnabled
     *
     * @return self
     */
    public function setMulticastUplinkRateLimitEnabled(bool $multicastUplinkRateLimitEnabled): self
    {
        $this->initialized['multicastUplinkRateLimitEnabled'] = true;
        $this->multicastUplinkRateLimitEnabled = $multicastUplinkRateLimitEnabled;
        return $this;
    }
    /**
     * Multicast Rate Limiting uplink (mbps).
     *
     * @return int
     */
    public function getMulticastUplinkRateLimit(): int
    {
        return $this->multicastUplinkRateLimit;
    }
    /**
     * Multicast Rate Limiting uplink (mbps).
     *
     * @param int $multicastUplinkRateLimit
     *
     * @return self
     */
    public function setMulticastUplinkRateLimit(int $multicastUplinkRateLimit): self
    {
        $this->initialized['multicastUplinkRateLimit'] = true;
        $this->multicastUplinkRateLimit = $multicastUplinkRateLimit;
        return $this;
    }
    /**
     * Multicast Rate Limiting downlink enabled.
     *
     * @return bool
     */
    public function getMulticastDownlinkRateLimitEnabled(): bool
    {
        return $this->multicastDownlinkRateLimitEnabled;
    }
    /**
     * Multicast Rate Limiting downlink enabled.
     *
     * @param bool $multicastDownlinkRateLimitEnabled
     *
     * @return self
     */
    public function setMulticastDownlinkRateLimitEnabled(bool $multicastDownlinkRateLimitEnabled): self
    {
        $this->initialized['multicastDownlinkRateLimitEnabled'] = true;
        $this->multicastDownlinkRateLimitEnabled = $multicastDownlinkRateLimitEnabled;
        return $this;
    }
    /**
     * Multicast Rate Limiting downlink (mbps).
     *
     * @return int
     */
    public function getMulticastDownlinkRateLimit(): int
    {
        return $this->multicastDownlinkRateLimit;
    }
    /**
     * Multicast Rate Limiting downlink (mbps).
     *
     * @param int $multicastDownlinkRateLimit
     *
     * @return self
     */
    public function setMulticastDownlinkRateLimit(int $multicastDownlinkRateLimit): self
    {
        $this->initialized['multicastDownlinkRateLimit'] = true;
        $this->multicastDownlinkRateLimit = $multicastDownlinkRateLimit;
        return $this;
    }
    /**
     * Multicast Rate Limiting uplink 6G enabled.
     *
     * @return bool
     */
    public function getMulticastUplinkRateLimit6gEnabled(): bool
    {
        return $this->multicastUplinkRateLimit6gEnabled;
    }
    /**
     * Multicast Rate Limiting uplink 6G enabled.
     *
     * @param bool $multicastUplinkRateLimit6gEnabled
     *
     * @return self
     */
    public function setMulticastUplinkRateLimit6gEnabled(bool $multicastUplinkRateLimit6gEnabled): self
    {
        $this->initialized['multicastUplinkRateLimit6gEnabled'] = true;
        $this->multicastUplinkRateLimit6gEnabled = $multicastUplinkRateLimit6gEnabled;
        return $this;
    }
    /**
     * Multicast Rate Limiting downlink 6G enabled.
     *
     * @return bool
     */
    public function getMulticastDownlinkRateLimit6gEnabled(): bool
    {
        return $this->multicastDownlinkRateLimit6gEnabled;
    }
    /**
     * Multicast Rate Limiting downlink 6G enabled.
     *
     * @param bool $multicastDownlinkRateLimit6gEnabled
     *
     * @return self
     */
    public function setMulticastDownlinkRateLimit6gEnabled(bool $multicastDownlinkRateLimit6gEnabled): self
    {
        $this->initialized['multicastDownlinkRateLimit6gEnabled'] = true;
        $this->multicastDownlinkRateLimit6gEnabled = $multicastDownlinkRateLimit6gEnabled;
        return $this;
    }
    /**
     * UE Rate Limiting uplink.
     *
     * @return string
     */
    public function getRatePerSTAUplink(): string
    {
        return $this->ratePerSTAUplink;
    }
    /**
     * UE Rate Limiting uplink.
     *
     * @param string $ratePerSTAUplink
     *
     * @return self
     */
    public function setRatePerSTAUplink(string $ratePerSTAUplink): self
    {
        $this->initialized['ratePerSTAUplink'] = true;
        $this->ratePerSTAUplink = $ratePerSTAUplink;
        return $this;
    }
    /**
     * UE Rate Limiting downlink.
     *
     * @return string
     */
    public function getRatePerSTADownlink(): string
    {
        return $this->ratePerSTADownlink;
    }
    /**
     * UE Rate Limiting downlink.
     *
     * @param string $ratePerSTADownlink
     *
     * @return self
     */
    public function setRatePerSTADownlink(string $ratePerSTADownlink): self
    {
        $this->initialized['ratePerSTADownlink'] = true;
        $this->ratePerSTADownlink = $ratePerSTADownlink;
        return $this;
    }
    /**
     * DTIM Interval
     *
     * @return int
     */
    public function getDtimInterval(): int
    {
        return $this->dtimInterval;
    }
    /**
     * DTIM Interval
     *
     * @param int $dtimInterval
     *
     * @return self
     */
    public function setDtimInterval(int $dtimInterval): self
    {
        $this->initialized['dtimInterval'] = true;
        $this->dtimInterval = $dtimInterval;
        return $this;
    }
    /**
     * Directed Threshold Setting, Defines the client count at which an AP will stop converting group addressed data traffic to unicast.
     *
     * @return int
     */
    public function getDirectedThreshold(): int
    {
        return $this->directedThreshold;
    }
    /**
     * Directed Threshold Setting, Defines the client count at which an AP will stop converting group addressed data traffic to unicast.
     *
     * @param int $directedThreshold
     *
     * @return self
     */
    public function setDirectedThreshold(int $directedThreshold): self
    {
        $this->initialized['directedThreshold'] = true;
        $this->directedThreshold = $directedThreshold;
        return $this;
    }
    /**
     * Flow log enabled.
     *
     * @return bool
     */
    public function getFlowLogEnabled(): bool
    {
        return $this->flowLogEnabled;
    }
    /**
     * Flow log enabled.
     *
     * @param bool $flowLogEnabled
     *
     * @return self
     */
    public function setFlowLogEnabled(bool $flowLogEnabled): self
    {
        $this->initialized['flowLogEnabled'] = true;
        $this->flowLogEnabled = $flowLogEnabled;
        return $this;
    }
    /**
     * Airtime decongestion enabled.
     *
     * @return bool
     */
    public function getHdOverheadOptimizeEnable(): bool
    {
        return $this->hdOverheadOptimizeEnable;
    }
    /**
     * Airtime decongestion enabled.
     *
     * @param bool $hdOverheadOptimizeEnable
     *
     * @return self
     */
    public function setHdOverheadOptimizeEnable(bool $hdOverheadOptimizeEnable): self
    {
        $this->initialized['hdOverheadOptimizeEnable'] = true;
        $this->hdOverheadOptimizeEnable = $hdOverheadOptimizeEnable;
        return $this;
    }
    /**
     * Join RSSI threshold. Value should be 0 (disabled) or between -90 and -60
     *
     * @return int
     */
    public function getProbeRssiThr(): int
    {
        return $this->probeRssiThr;
    }
    /**
     * Join RSSI threshold. Value should be 0 (disabled) or between -90 and -60
     *
     * @param int $probeRssiThr
     *
     * @return self
     */
    public function setProbeRssiThr(int $probeRssiThr): self
    {
        $this->initialized['probeRssiThr'] = true;
        $this->probeRssiThr = $probeRssiThr;
        return $this;
    }
    /**
     * Transient Client Management enabled.
     *
     * @return bool
     */
    public function getTransientClientMgmtEnable(): bool
    {
        return $this->transientClientMgmtEnable;
    }
    /**
     * Transient Client Management enabled.
     *
     * @param bool $transientClientMgmtEnable
     *
     * @return self
     */
    public function setTransientClientMgmtEnable(bool $transientClientMgmtEnable): self
    {
        $this->initialized['transientClientMgmtEnable'] = true;
        $this->transientClientMgmtEnable = $transientClientMgmtEnable;
        return $this;
    }
    /**
     * Join wait time.
     *
     * @return int
     */
    public function getJoinIgnoreTimeout(): int
    {
        return $this->joinIgnoreTimeout;
    }
    /**
     * Join wait time.
     *
     * @param int $joinIgnoreTimeout
     *
     * @return self
     */
    public function setJoinIgnoreTimeout(int $joinIgnoreTimeout): self
    {
        $this->initialized['joinIgnoreTimeout'] = true;
        $this->joinIgnoreTimeout = $joinIgnoreTimeout;
        return $this;
    }
    /**
     * Join expire time.
     *
     * @return int
     */
    public function getJoinAcceptTimeout(): int
    {
        return $this->joinAcceptTimeout;
    }
    /**
     * Join expire time.
     *
     * @param int $joinAcceptTimeout
     *
     * @return self
     */
    public function setJoinAcceptTimeout(int $joinAcceptTimeout): self
    {
        $this->initialized['joinAcceptTimeout'] = true;
        $this->joinAcceptTimeout = $joinAcceptTimeout;
        return $this;
    }
    /**
     * Join wait threshold.
     *
     * @return int
     */
    public function getJoinIgnoreThr(): int
    {
        return $this->joinIgnoreThr;
    }
    /**
     * Join wait threshold.
     *
     * @param int $joinIgnoreThr
     *
     * @return self
     */
    public function setJoinIgnoreThr(int $joinIgnoreThr): self
    {
        $this->initialized['joinIgnoreThr'] = true;
        $this->joinIgnoreThr = $joinIgnoreThr;
        return $this;
    }
    /**
     * Drop Random Probes enabled.
     *
     * @return bool
     */
    public function getDropRandomProbesEnabled(): bool
    {
        return $this->dropRandomProbesEnabled;
    }
    /**
     * Drop Random Probes enabled.
     *
     * @param bool $dropRandomProbesEnabled
     *
     * @return self
     */
    public function setDropRandomProbesEnabled(bool $dropRandomProbesEnabled): self
    {
        $this->initialized['dropRandomProbesEnabled'] = true;
        $this->dropRandomProbesEnabled = $dropRandomProbesEnabled;
        return $this;
    }
    /**
     * Auth RSSI threshold.
     *
     * @return int
     */
    public function getAuthRssiThr(): int
    {
        return $this->authRssiThr;
    }
    /**
     * Auth RSSI threshold.
     *
     * @param int $authRssiThr
     *
     * @return self
     */
    public function setAuthRssiThr(int $authRssiThr): self
    {
        $this->initialized['authRssiThr'] = true;
        $this->authRssiThr = $authRssiThr;
        return $this;
    }
    /**
     * Assoc RSSI threshold.
     *
     * @return int
     */
    public function getAssocRssiThr(): int
    {
        return $this->assocRssiThr;
    }
    /**
     * Assoc RSSI threshold.
     *
     * @param int $assocRssiThr
     *
     * @return self
     */
    public function setAssocRssiThr(int $assocRssiThr): self
    {
        $this->initialized['assocRssiThr'] = true;
        $this->assocRssiThr = $assocRssiThr;
        return $this;
    }
    /**
     * Optimized Connectivity Experience(OCE) enabled.
     *
     * @return bool
     */
    public function getOceEnabled(): bool
    {
        return $this->oceEnabled;
    }
    /**
     * Optimized Connectivity Experience(OCE) enabled.
     *
     * @param bool $oceEnabled
     *
     * @return self
     */
    public function setOceEnabled(bool $oceEnabled): self
    {
        $this->initialized['oceEnabled'] = true;
        $this->oceEnabled = $oceEnabled;
        return $this;
    }
    /**
     * Broadcast probe response delay.
     *
     * @return int
     */
    public function getOceBroadcastProbeResponseDelay(): int
    {
        return $this->oceBroadcastProbeResponseDelay;
    }
    /**
     * Broadcast probe response delay.
     *
     * @param int $oceBroadcastProbeResponseDelay
     *
     * @return self
     */
    public function setOceBroadcastProbeResponseDelay(int $oceBroadcastProbeResponseDelay): self
    {
        $this->initialized['oceBroadcastProbeResponseDelay'] = true;
        $this->oceBroadcastProbeResponseDelay = $oceBroadcastProbeResponseDelay;
        return $this;
    }
    /**
     * RSSI-based association rejection threshold.
     *
     * @return int
     */
    public function getOceRssiBasedAssociationRejectionThreshold(): int
    {
        return $this->oceRssiBasedAssociationRejectionThreshold;
    }
    /**
     * RSSI-based association rejection threshold.
     *
     * @param int $oceRssiBasedAssociationRejectionThreshold
     *
     * @return self
     */
    public function setOceRssiBasedAssociationRejectionThreshold(int $oceRssiBasedAssociationRejectionThreshold): self
    {
        $this->initialized['oceRssiBasedAssociationRejectionThreshold'] = true;
        $this->oceRssiBasedAssociationRejectionThreshold = $oceRssiBasedAssociationRejectionThreshold;
        return $this;
    }
    /**
     * Reduce Neighbor Report enabled.
     *
     * @return bool
     */
    public function getOceReduceNeighborReportEnabled(): bool
    {
        return $this->oceReduceNeighborReportEnabled;
    }
    /**
     * Reduce Neighbor Report enabled.
     *
     * @param bool $oceReduceNeighborReportEnabled
     *
     * @return self
     */
    public function setOceReduceNeighborReportEnabled(bool $oceReduceNeighborReportEnabled): self
    {
        $this->initialized['oceReduceNeighborReportEnabled'] = true;
        $this->oceReduceNeighborReportEnabled = $oceReduceNeighborReportEnabled;
        return $this;
    }
    /**
     * Ap Channel Report enabled.
     *
     * @return bool
     */
    public function getOceApChannelReportEnabled(): bool
    {
        return $this->oceApChannelReportEnabled;
    }
    /**
     * Ap Channel Report enabled.
     *
     * @param bool $oceApChannelReportEnabled
     *
     * @return self
     */
    public function setOceApChannelReportEnabled(bool $oceApChannelReportEnabled): self
    {
        $this->initialized['oceApChannelReportEnabled'] = true;
        $this->oceApChannelReportEnabled = $oceApChannelReportEnabled;
        return $this;
    }
    /**
     * @return WlanFastInitialLinkSetup
     */
    public function getFils(): WlanFastInitialLinkSetup
    {
        return $this->fils;
    }
    /**
     * @param WlanFastInitialLinkSetup $fils
     *
     * @return self
     */
    public function setFils(WlanFastInitialLinkSetup $fils): self
    {
        $this->initialized['fils'] = true;
        $this->fils = $fils;
        return $this;
    }
    /**
     * @return string
     */
    public function getDhcp82SubOptRadiusFormat(): string
    {
        return $this->dhcp82SubOptRadiusFormat;
    }
    /**
     * @param string $dhcp82SubOptRadiusFormat
     *
     * @return self
     */
    public function setDhcp82SubOptRadiusFormat(string $dhcp82SubOptRadiusFormat): self
    {
        $this->initialized['dhcp82SubOptRadiusFormat'] = true;
        $this->dhcp82SubOptRadiusFormat = $dhcp82SubOptRadiusFormat;
        return $this;
    }
    /**
     * DNS Spoofing Profile ID
     *
     * @return string
     */
    public function getDnsSpoofingProfileId(): string
    {
        return $this->dnsSpoofingProfileId;
    }
    /**
     * DNS Spoofing Profile ID
     *
     * @param string $dnsSpoofingProfileId
     *
     * @return self
     */
    public function setDnsSpoofingProfileId(string $dnsSpoofingProfileId): self
    {
        $this->initialized['dnsSpoofingProfileId'] = true;
        $this->dnsSpoofingProfileId = $dnsSpoofingProfileId;
        return $this;
    }
    /**
     * @return string
     */
    public function getVlanNameProfileId(): string
    {
        return $this->vlanNameProfileId;
    }
    /**
     * @param string $vlanNameProfileId
     *
     * @return self
     */
    public function setVlanNameProfileId(string $vlanNameProfileId): self
    {
        $this->initialized['vlanNameProfileId'] = true;
        $this->vlanNameProfileId = $vlanNameProfileId;
        return $this;
    }
    /**
     * Allow which user role can access this WLAN.
     *
     * @return WlanWlanAdvancedUserRoleAccess
     */
    public function getUserRoleAccess(): WlanWlanAdvancedUserRoleAccess
    {
        return $this->userRoleAccess;
    }
    /**
     * Allow which user role can access this WLAN.
     *
     * @param WlanWlanAdvancedUserRoleAccess $userRoleAccess
     *
     * @return self
     */
    public function setUserRoleAccess(WlanWlanAdvancedUserRoleAccess $userRoleAccess): self
    {
        $this->initialized['userRoleAccess'] = true;
        $this->userRoleAccess = $userRoleAccess;
        return $this;
    }
}