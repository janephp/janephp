<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class WlanCreateHotspotWlan
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $ssid;
    /**
     * @var string
     */
    public string $hessid;
    /**
     * @var string
     */
    public string $description;
    /**
     * Bypass Capitive Network Assitance
     *
     * @var bool
     */
    public bool $bypassCNA = false;
    /**
     * DP CALEA Server Enabled
     *
     * @var bool
     */
    public bool $caleaEnabled;
    /**
     * DP Tunnel NAT Enabled
     *
     * @var bool
     */
    public bool $dpTunnelNatEnabled;
    /**
     * DP Tunnel DHCP Enabled
     *
     * @var bool
     */
    public bool $dpTunnelDhcpEnabled;
    /**
     * Aws ExtNasIP Enable for CALEA
     *
     * @var bool
     */
    public bool $awsExtNasIPEnable;
    /**
     * Aws Venue Enable for CALEA
     *
     * @var bool
     */
    public bool $awsVenueEnable;
    /**
     * Access tunnel type of the WLAN. APLBO means AP local breakout, and SoftGRE means AP direct SoftGRE tunnel
     *
     * @var string
     */
    public string $accessTunnelType;
    /**
     * @var WlanWlanCoreTunnel
     */
    public WlanWlanCoreTunnel $coreTunnelProfile;
    /**
     * @var WlanWlanMACAuth
     */
    public WlanWlanMACAuth $macAuth;
    /**
     * @var WlanWlanEncryption
     */
    public WlanWlanEncryption $encryption;
    /**
     * @var WlanWlanAuthentication
     */
    public WlanWlanAuthentication $authServiceOrProfile;
    /**
     * @var string
     */
    public string $operatorRealm;
    /**
     * @var WlanWlanAccounting
     */
    public WlanWlanAccounting $accountingServiceOrProfile;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $portalServiceProfile;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $hotspot20Profile;
    /**
     * Firewall profile of the WLAN
     *
     * @var string
     */
    public string $firewallProfileId;
    /**
     * Firewall WLAN specific enabled
     *
     * @var bool
     */
    public bool $firewallWlanSpecificEnabled = false;
    /**
     * Uplink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @var float
     */
    public float $firewallUplinkRateLimitingMbps;
    /**
     * Downlink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @var float
     */
    public float $firewallDownlinkRateLimitingMbps;
    /**
     * Firewall L3 Access Control Policy of WLAN specific
     *
     * @var string
     */
    public string $firewallL3AccessControlPolicyId;
    /**
     * Firewall L2 Access Control Policy of WLAN specific
     *
     * @var string
     */
    public string $firewallL2AccessControlPolicyId;
    /**
     * Firewall Application Policy of WLAN specific
     *
     * @var string
     */
    public string $firewallAppPolicyId;
    /**
     * Firewall Url Filtering Policy of WLAN specific
     *
     * @var string
     */
    public string $firewallUrlFilteringPolicyId;
    /**
     * Firewall Device Policy of WLAN specific
     *
     * @var string
     */
    public string $firewallDevicePolicyId;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $defaultUserTrafficProfile;
    /**
     * Precedence profile of the WLAN
     *
     * @var string
     */
    public string $precedenceProfileId;
    /**
     * @var WlanWlanSchedule
     */
    public WlanWlanSchedule $schedule;
    /**
     * @var WlanWlanVlan
     */
    public WlanWlanVlan $vlan;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $l2ACL;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $devicePolicy;
    /**
     * @var WlanWlanRadius
     */
    public WlanWlanRadius $radiusOptions;
    /**
     * @var WlanWlanAdvanced
     */
    public WlanWlanAdvanced $advancedOptions;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $diffServProfile;
    /**
     * Qos map set of the WLAN.
     *
     * @var list<WlanWlanDSCPSetting>
     */
    public array $qosMaps;
    /**
     * @var DpskWlanDpskSetting
     */
    public DpskWlanDpskSetting $dpsk;
    /**
     * @var DpskWlanExternalDpsk
     */
    public DpskWlanExternalDpsk $externalDpsk;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $dnsServerProfile;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $accessTunnelProfile;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $accessIpsecProfile;
    /**
     * @var string
     */
    public string $splitTunnelProfileId;
    /**
     * @var string
     */
    public string $portalDetectionProfileId;
    /**
     * @var FlexiVpnFlexiVpnSetting
     */
    public FlexiVpnFlexiVpnSetting $flexiVpnProfile;
    /**
     * Agile Multi-Band Enabled
     *
     * @var bool
     */
    public bool $wifiAgileMultibandEnabled = false;
    /**
     * AP Host Name Advertisement Enabled
     *
     * @var bool
     */
    public bool $apHostNameAdvertisementEnabled = false;
}