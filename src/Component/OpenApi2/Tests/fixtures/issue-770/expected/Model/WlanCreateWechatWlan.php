<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanCreateWechatWlan
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $ssid;
    /**
     * @var string
     */
    protected $hessid;
    /**
     * @var string
     */
    protected $description;
    /**
     * DP CALEA Server Enabled
     *
     * @var bool
     */
    protected $caleaEnabled;
    /**
     * DP Tunnel NAT Enabled
     *
     * @var bool
     */
    protected $dpTunnelNatEnabled;
    /**
     * DP Tunnel DHCP Enabled
     *
     * @var bool
     */
    protected $dpTunnelDhcpEnabled;
    /**
     * Aws ExtNasIP Enable for CALEA
     *
     * @var bool
     */
    protected $awsExtNasIPEnable;
    /**
     * Aws Venue Enable for CALEA
     *
     * @var bool
     */
    protected $awsVenueEnable;
    /**
     * Access tunnel type of the WLAN. APLBO means AP local breakout, and SoftGRE means AP direct SoftGRE tunnel
     *
     * @var string
     */
    protected $accessTunnelType;
    /**
     * @var WlanWlanCoreTunnel
     */
    protected $coreTunnelProfile;
    /**
     * @var WlanWlanMACAuth
     */
    protected $macAuth;
    /**
     * @var WlanWlanEncryption
     */
    protected $encryption;
    /**
     * @var WlanWlanAuthentication
     */
    protected $authServiceOrProfile;
    /**
     * @var string
     */
    protected $operatorRealm;
    /**
     * @var WlanWlanAccounting
     */
    protected $accountingServiceOrProfile;
    /**
     * @var CommonGenericRef
     */
    protected $portalServiceProfile;
    /**
     * @var CommonGenericRef
     */
    protected $hotspot20Profile;
    /**
     * Firewall profile of the WLAN
     *
     * @var string
     */
    protected $firewallProfileId;
    /**
     * Firewall WLAN specific enabled
     *
     * @var bool
     */
    protected $firewallWlanSpecificEnabled = false;
    /**
     * Uplink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @var float
     */
    protected $firewallUplinkRateLimitingMbps;
    /**
     * Downlink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @var float
     */
    protected $firewallDownlinkRateLimitingMbps;
    /**
     * Firewall L3 Access Control Policy of WLAN specific
     *
     * @var string
     */
    protected $firewallL3AccessControlPolicyId;
    /**
     * Firewall L2 Access Control Policy of WLAN specific
     *
     * @var string
     */
    protected $firewallL2AccessControlPolicyId;
    /**
     * Firewall Application Policy of WLAN specific
     *
     * @var string
     */
    protected $firewallAppPolicyId;
    /**
     * Firewall Url Filtering Policy of WLAN specific
     *
     * @var string
     */
    protected $firewallUrlFilteringPolicyId;
    /**
     * Firewall Device Policy of WLAN specific
     *
     * @var string
     */
    protected $firewallDevicePolicyId;
    /**
     * @var CommonGenericRef
     */
    protected $defaultUserTrafficProfile;
    /**
     * Precedence profile of the WLAN
     *
     * @var string
     */
    protected $precedenceProfileId;
    /**
     * @var WlanWlanSchedule
     */
    protected $schedule;
    /**
     * @var WlanWlanVlan
     */
    protected $vlan;
    /**
     * @var CommonGenericRef
     */
    protected $l2ACL;
    /**
     * @var CommonGenericRef
     */
    protected $devicePolicy;
    /**
     * @var WlanWlanRadius
     */
    protected $radiusOptions;
    /**
     * @var WlanWlanAdvanced
     */
    protected $advancedOptions;
    /**
     * @var CommonGenericRef
     */
    protected $diffServProfile;
    /**
     * Qos map set of the WLAN.
     *
     * @var list<WlanWlanDSCPSetting>
     */
    protected $qosMaps;
    /**
     * @var DpskWlanDpskSetting
     */
    protected $dpsk;
    /**
     * @var DpskWlanExternalDpsk
     */
    protected $externalDpsk;
    /**
     * @var CommonGenericRef
     */
    protected $dnsServerProfile;
    /**
     * @var CommonGenericRef
     */
    protected $accessTunnelProfile;
    /**
     * @var CommonGenericRef
     */
    protected $accessIpsecProfile;
    /**
     * @var string
     */
    protected $splitTunnelProfileId;
    /**
     * @var string
     */
    protected $portalDetectionProfileId;
    /**
     * @var FlexiVpnFlexiVpnSetting
     */
    protected $flexiVpnProfile;
    /**
     * Agile Multi-Band Enabled
     *
     * @var bool
     */
    protected $wifiAgileMultibandEnabled = false;
    /**
     * AP Host Name Advertisement Enabled
     *
     * @var bool
     */
    protected $apHostNameAdvertisementEnabled = false;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getSsid(): string
    {
        return $this->ssid;
    }
    /**
     * @param string $ssid
     *
     * @return self
     */
    public function setSsid(string $ssid): self
    {
        $this->initialized['ssid'] = true;
        $this->ssid = $ssid;
        return $this;
    }
    /**
     * @return string
     */
    public function getHessid(): string
    {
        return $this->hessid;
    }
    /**
     * @param string $hessid
     *
     * @return self
     */
    public function setHessid(string $hessid): self
    {
        $this->initialized['hessid'] = true;
        $this->hessid = $hessid;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * DP CALEA Server Enabled
     *
     * @return bool
     */
    public function getCaleaEnabled(): bool
    {
        return $this->caleaEnabled;
    }
    /**
     * DP CALEA Server Enabled
     *
     * @param bool $caleaEnabled
     *
     * @return self
     */
    public function setCaleaEnabled(bool $caleaEnabled): self
    {
        $this->initialized['caleaEnabled'] = true;
        $this->caleaEnabled = $caleaEnabled;
        return $this;
    }
    /**
     * DP Tunnel NAT Enabled
     *
     * @return bool
     */
    public function getDpTunnelNatEnabled(): bool
    {
        return $this->dpTunnelNatEnabled;
    }
    /**
     * DP Tunnel NAT Enabled
     *
     * @param bool $dpTunnelNatEnabled
     *
     * @return self
     */
    public function setDpTunnelNatEnabled(bool $dpTunnelNatEnabled): self
    {
        $this->initialized['dpTunnelNatEnabled'] = true;
        $this->dpTunnelNatEnabled = $dpTunnelNatEnabled;
        return $this;
    }
    /**
     * DP Tunnel DHCP Enabled
     *
     * @return bool
     */
    public function getDpTunnelDhcpEnabled(): bool
    {
        return $this->dpTunnelDhcpEnabled;
    }
    /**
     * DP Tunnel DHCP Enabled
     *
     * @param bool $dpTunnelDhcpEnabled
     *
     * @return self
     */
    public function setDpTunnelDhcpEnabled(bool $dpTunnelDhcpEnabled): self
    {
        $this->initialized['dpTunnelDhcpEnabled'] = true;
        $this->dpTunnelDhcpEnabled = $dpTunnelDhcpEnabled;
        return $this;
    }
    /**
     * Aws ExtNasIP Enable for CALEA
     *
     * @return bool
     */
    public function getAwsExtNasIPEnable(): bool
    {
        return $this->awsExtNasIPEnable;
    }
    /**
     * Aws ExtNasIP Enable for CALEA
     *
     * @param bool $awsExtNasIPEnable
     *
     * @return self
     */
    public function setAwsExtNasIPEnable(bool $awsExtNasIPEnable): self
    {
        $this->initialized['awsExtNasIPEnable'] = true;
        $this->awsExtNasIPEnable = $awsExtNasIPEnable;
        return $this;
    }
    /**
     * Aws Venue Enable for CALEA
     *
     * @return bool
     */
    public function getAwsVenueEnable(): bool
    {
        return $this->awsVenueEnable;
    }
    /**
     * Aws Venue Enable for CALEA
     *
     * @param bool $awsVenueEnable
     *
     * @return self
     */
    public function setAwsVenueEnable(bool $awsVenueEnable): self
    {
        $this->initialized['awsVenueEnable'] = true;
        $this->awsVenueEnable = $awsVenueEnable;
        return $this;
    }
    /**
     * Access tunnel type of the WLAN. APLBO means AP local breakout, and SoftGRE means AP direct SoftGRE tunnel
     *
     * @return string
     */
    public function getAccessTunnelType(): string
    {
        return $this->accessTunnelType;
    }
    /**
     * Access tunnel type of the WLAN. APLBO means AP local breakout, and SoftGRE means AP direct SoftGRE tunnel
     *
     * @param string $accessTunnelType
     *
     * @return self
     */
    public function setAccessTunnelType(string $accessTunnelType): self
    {
        $this->initialized['accessTunnelType'] = true;
        $this->accessTunnelType = $accessTunnelType;
        return $this;
    }
    /**
     * @return WlanWlanCoreTunnel
     */
    public function getCoreTunnelProfile(): WlanWlanCoreTunnel
    {
        return $this->coreTunnelProfile;
    }
    /**
     * @param WlanWlanCoreTunnel $coreTunnelProfile
     *
     * @return self
     */
    public function setCoreTunnelProfile(WlanWlanCoreTunnel $coreTunnelProfile): self
    {
        $this->initialized['coreTunnelProfile'] = true;
        $this->coreTunnelProfile = $coreTunnelProfile;
        return $this;
    }
    /**
     * @return WlanWlanMACAuth
     */
    public function getMacAuth(): WlanWlanMACAuth
    {
        return $this->macAuth;
    }
    /**
     * @param WlanWlanMACAuth $macAuth
     *
     * @return self
     */
    public function setMacAuth(WlanWlanMACAuth $macAuth): self
    {
        $this->initialized['macAuth'] = true;
        $this->macAuth = $macAuth;
        return $this;
    }
    /**
     * @return WlanWlanEncryption
     */
    public function getEncryption(): WlanWlanEncryption
    {
        return $this->encryption;
    }
    /**
     * @param WlanWlanEncryption $encryption
     *
     * @return self
     */
    public function setEncryption(WlanWlanEncryption $encryption): self
    {
        $this->initialized['encryption'] = true;
        $this->encryption = $encryption;
        return $this;
    }
    /**
     * @return WlanWlanAuthentication
     */
    public function getAuthServiceOrProfile(): WlanWlanAuthentication
    {
        return $this->authServiceOrProfile;
    }
    /**
     * @param WlanWlanAuthentication $authServiceOrProfile
     *
     * @return self
     */
    public function setAuthServiceOrProfile(WlanWlanAuthentication $authServiceOrProfile): self
    {
        $this->initialized['authServiceOrProfile'] = true;
        $this->authServiceOrProfile = $authServiceOrProfile;
        return $this;
    }
    /**
     * @return string
     */
    public function getOperatorRealm(): string
    {
        return $this->operatorRealm;
    }
    /**
     * @param string $operatorRealm
     *
     * @return self
     */
    public function setOperatorRealm(string $operatorRealm): self
    {
        $this->initialized['operatorRealm'] = true;
        $this->operatorRealm = $operatorRealm;
        return $this;
    }
    /**
     * @return WlanWlanAccounting
     */
    public function getAccountingServiceOrProfile(): WlanWlanAccounting
    {
        return $this->accountingServiceOrProfile;
    }
    /**
     * @param WlanWlanAccounting $accountingServiceOrProfile
     *
     * @return self
     */
    public function setAccountingServiceOrProfile(WlanWlanAccounting $accountingServiceOrProfile): self
    {
        $this->initialized['accountingServiceOrProfile'] = true;
        $this->accountingServiceOrProfile = $accountingServiceOrProfile;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getPortalServiceProfile(): CommonGenericRef
    {
        return $this->portalServiceProfile;
    }
    /**
     * @param CommonGenericRef $portalServiceProfile
     *
     * @return self
     */
    public function setPortalServiceProfile(CommonGenericRef $portalServiceProfile): self
    {
        $this->initialized['portalServiceProfile'] = true;
        $this->portalServiceProfile = $portalServiceProfile;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getHotspot20Profile(): CommonGenericRef
    {
        return $this->hotspot20Profile;
    }
    /**
     * @param CommonGenericRef $hotspot20Profile
     *
     * @return self
     */
    public function setHotspot20Profile(CommonGenericRef $hotspot20Profile): self
    {
        $this->initialized['hotspot20Profile'] = true;
        $this->hotspot20Profile = $hotspot20Profile;
        return $this;
    }
    /**
     * Firewall profile of the WLAN
     *
     * @return string
     */
    public function getFirewallProfileId(): string
    {
        return $this->firewallProfileId;
    }
    /**
     * Firewall profile of the WLAN
     *
     * @param string $firewallProfileId
     *
     * @return self
     */
    public function setFirewallProfileId(string $firewallProfileId): self
    {
        $this->initialized['firewallProfileId'] = true;
        $this->firewallProfileId = $firewallProfileId;
        return $this;
    }
    /**
     * Firewall WLAN specific enabled
     *
     * @return bool
     */
    public function getFirewallWlanSpecificEnabled(): bool
    {
        return $this->firewallWlanSpecificEnabled;
    }
    /**
     * Firewall WLAN specific enabled
     *
     * @param bool $firewallWlanSpecificEnabled
     *
     * @return self
     */
    public function setFirewallWlanSpecificEnabled(bool $firewallWlanSpecificEnabled): self
    {
        $this->initialized['firewallWlanSpecificEnabled'] = true;
        $this->firewallWlanSpecificEnabled = $firewallWlanSpecificEnabled;
        return $this;
    }
    /**
     * Uplink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @return float
     */
    public function getFirewallUplinkRateLimitingMbps(): float
    {
        return $this->firewallUplinkRateLimitingMbps;
    }
    /**
     * Uplink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @param float $firewallUplinkRateLimitingMbps
     *
     * @return self
     */
    public function setFirewallUplinkRateLimitingMbps(float $firewallUplinkRateLimitingMbps): self
    {
        $this->initialized['firewallUplinkRateLimitingMbps'] = true;
        $this->firewallUplinkRateLimitingMbps = $firewallUplinkRateLimitingMbps;
        return $this;
    }
    /**
     * Downlink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @return float
     */
    public function getFirewallDownlinkRateLimitingMbps(): float
    {
        return $this->firewallDownlinkRateLimitingMbps;
    }
    /**
     * Downlink rate limiting, range 0.1 ~ 200 mpbs
     *
     * @param float $firewallDownlinkRateLimitingMbps
     *
     * @return self
     */
    public function setFirewallDownlinkRateLimitingMbps(float $firewallDownlinkRateLimitingMbps): self
    {
        $this->initialized['firewallDownlinkRateLimitingMbps'] = true;
        $this->firewallDownlinkRateLimitingMbps = $firewallDownlinkRateLimitingMbps;
        return $this;
    }
    /**
     * Firewall L3 Access Control Policy of WLAN specific
     *
     * @return string
     */
    public function getFirewallL3AccessControlPolicyId(): string
    {
        return $this->firewallL3AccessControlPolicyId;
    }
    /**
     * Firewall L3 Access Control Policy of WLAN specific
     *
     * @param string $firewallL3AccessControlPolicyId
     *
     * @return self
     */
    public function setFirewallL3AccessControlPolicyId(string $firewallL3AccessControlPolicyId): self
    {
        $this->initialized['firewallL3AccessControlPolicyId'] = true;
        $this->firewallL3AccessControlPolicyId = $firewallL3AccessControlPolicyId;
        return $this;
    }
    /**
     * Firewall L2 Access Control Policy of WLAN specific
     *
     * @return string
     */
    public function getFirewallL2AccessControlPolicyId(): string
    {
        return $this->firewallL2AccessControlPolicyId;
    }
    /**
     * Firewall L2 Access Control Policy of WLAN specific
     *
     * @param string $firewallL2AccessControlPolicyId
     *
     * @return self
     */
    public function setFirewallL2AccessControlPolicyId(string $firewallL2AccessControlPolicyId): self
    {
        $this->initialized['firewallL2AccessControlPolicyId'] = true;
        $this->firewallL2AccessControlPolicyId = $firewallL2AccessControlPolicyId;
        return $this;
    }
    /**
     * Firewall Application Policy of WLAN specific
     *
     * @return string
     */
    public function getFirewallAppPolicyId(): string
    {
        return $this->firewallAppPolicyId;
    }
    /**
     * Firewall Application Policy of WLAN specific
     *
     * @param string $firewallAppPolicyId
     *
     * @return self
     */
    public function setFirewallAppPolicyId(string $firewallAppPolicyId): self
    {
        $this->initialized['firewallAppPolicyId'] = true;
        $this->firewallAppPolicyId = $firewallAppPolicyId;
        return $this;
    }
    /**
     * Firewall Url Filtering Policy of WLAN specific
     *
     * @return string
     */
    public function getFirewallUrlFilteringPolicyId(): string
    {
        return $this->firewallUrlFilteringPolicyId;
    }
    /**
     * Firewall Url Filtering Policy of WLAN specific
     *
     * @param string $firewallUrlFilteringPolicyId
     *
     * @return self
     */
    public function setFirewallUrlFilteringPolicyId(string $firewallUrlFilteringPolicyId): self
    {
        $this->initialized['firewallUrlFilteringPolicyId'] = true;
        $this->firewallUrlFilteringPolicyId = $firewallUrlFilteringPolicyId;
        return $this;
    }
    /**
     * Firewall Device Policy of WLAN specific
     *
     * @return string
     */
    public function getFirewallDevicePolicyId(): string
    {
        return $this->firewallDevicePolicyId;
    }
    /**
     * Firewall Device Policy of WLAN specific
     *
     * @param string $firewallDevicePolicyId
     *
     * @return self
     */
    public function setFirewallDevicePolicyId(string $firewallDevicePolicyId): self
    {
        $this->initialized['firewallDevicePolicyId'] = true;
        $this->firewallDevicePolicyId = $firewallDevicePolicyId;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getDefaultUserTrafficProfile(): CommonGenericRef
    {
        return $this->defaultUserTrafficProfile;
    }
    /**
     * @param CommonGenericRef $defaultUserTrafficProfile
     *
     * @return self
     */
    public function setDefaultUserTrafficProfile(CommonGenericRef $defaultUserTrafficProfile): self
    {
        $this->initialized['defaultUserTrafficProfile'] = true;
        $this->defaultUserTrafficProfile = $defaultUserTrafficProfile;
        return $this;
    }
    /**
     * Precedence profile of the WLAN
     *
     * @return string
     */
    public function getPrecedenceProfileId(): string
    {
        return $this->precedenceProfileId;
    }
    /**
     * Precedence profile of the WLAN
     *
     * @param string $precedenceProfileId
     *
     * @return self
     */
    public function setPrecedenceProfileId(string $precedenceProfileId): self
    {
        $this->initialized['precedenceProfileId'] = true;
        $this->precedenceProfileId = $precedenceProfileId;
        return $this;
    }
    /**
     * @return WlanWlanSchedule
     */
    public function getSchedule(): WlanWlanSchedule
    {
        return $this->schedule;
    }
    /**
     * @param WlanWlanSchedule $schedule
     *
     * @return self
     */
    public function setSchedule(WlanWlanSchedule $schedule): self
    {
        $this->initialized['schedule'] = true;
        $this->schedule = $schedule;
        return $this;
    }
    /**
     * @return WlanWlanVlan
     */
    public function getVlan(): WlanWlanVlan
    {
        return $this->vlan;
    }
    /**
     * @param WlanWlanVlan $vlan
     *
     * @return self
     */
    public function setVlan(WlanWlanVlan $vlan): self
    {
        $this->initialized['vlan'] = true;
        $this->vlan = $vlan;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getL2ACL(): CommonGenericRef
    {
        return $this->l2ACL;
    }
    /**
     * @param CommonGenericRef $l2ACL
     *
     * @return self
     */
    public function setL2ACL(CommonGenericRef $l2ACL): self
    {
        $this->initialized['l2ACL'] = true;
        $this->l2ACL = $l2ACL;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getDevicePolicy(): CommonGenericRef
    {
        return $this->devicePolicy;
    }
    /**
     * @param CommonGenericRef $devicePolicy
     *
     * @return self
     */
    public function setDevicePolicy(CommonGenericRef $devicePolicy): self
    {
        $this->initialized['devicePolicy'] = true;
        $this->devicePolicy = $devicePolicy;
        return $this;
    }
    /**
     * @return WlanWlanRadius
     */
    public function getRadiusOptions(): WlanWlanRadius
    {
        return $this->radiusOptions;
    }
    /**
     * @param WlanWlanRadius $radiusOptions
     *
     * @return self
     */
    public function setRadiusOptions(WlanWlanRadius $radiusOptions): self
    {
        $this->initialized['radiusOptions'] = true;
        $this->radiusOptions = $radiusOptions;
        return $this;
    }
    /**
     * @return WlanWlanAdvanced
     */
    public function getAdvancedOptions(): WlanWlanAdvanced
    {
        return $this->advancedOptions;
    }
    /**
     * @param WlanWlanAdvanced $advancedOptions
     *
     * @return self
     */
    public function setAdvancedOptions(WlanWlanAdvanced $advancedOptions): self
    {
        $this->initialized['advancedOptions'] = true;
        $this->advancedOptions = $advancedOptions;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getDiffServProfile(): CommonGenericRef
    {
        return $this->diffServProfile;
    }
    /**
     * @param CommonGenericRef $diffServProfile
     *
     * @return self
     */
    public function setDiffServProfile(CommonGenericRef $diffServProfile): self
    {
        $this->initialized['diffServProfile'] = true;
        $this->diffServProfile = $diffServProfile;
        return $this;
    }
    /**
     * Qos map set of the WLAN.
     *
     * @return list<WlanWlanDSCPSetting>
     */
    public function getQosMaps(): array
    {
        return $this->qosMaps;
    }
    /**
     * Qos map set of the WLAN.
     *
     * @param list<WlanWlanDSCPSetting> $qosMaps
     *
     * @return self
     */
    public function setQosMaps(array $qosMaps): self
    {
        $this->initialized['qosMaps'] = true;
        $this->qosMaps = $qosMaps;
        return $this;
    }
    /**
     * @return DpskWlanDpskSetting
     */
    public function getDpsk(): DpskWlanDpskSetting
    {
        return $this->dpsk;
    }
    /**
     * @param DpskWlanDpskSetting $dpsk
     *
     * @return self
     */
    public function setDpsk(DpskWlanDpskSetting $dpsk): self
    {
        $this->initialized['dpsk'] = true;
        $this->dpsk = $dpsk;
        return $this;
    }
    /**
     * @return DpskWlanExternalDpsk
     */
    public function getExternalDpsk(): DpskWlanExternalDpsk
    {
        return $this->externalDpsk;
    }
    /**
     * @param DpskWlanExternalDpsk $externalDpsk
     *
     * @return self
     */
    public function setExternalDpsk(DpskWlanExternalDpsk $externalDpsk): self
    {
        $this->initialized['externalDpsk'] = true;
        $this->externalDpsk = $externalDpsk;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getDnsServerProfile(): CommonGenericRef
    {
        return $this->dnsServerProfile;
    }
    /**
     * @param CommonGenericRef $dnsServerProfile
     *
     * @return self
     */
    public function setDnsServerProfile(CommonGenericRef $dnsServerProfile): self
    {
        $this->initialized['dnsServerProfile'] = true;
        $this->dnsServerProfile = $dnsServerProfile;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getAccessTunnelProfile(): CommonGenericRef
    {
        return $this->accessTunnelProfile;
    }
    /**
     * @param CommonGenericRef $accessTunnelProfile
     *
     * @return self
     */
    public function setAccessTunnelProfile(CommonGenericRef $accessTunnelProfile): self
    {
        $this->initialized['accessTunnelProfile'] = true;
        $this->accessTunnelProfile = $accessTunnelProfile;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getAccessIpsecProfile(): CommonGenericRef
    {
        return $this->accessIpsecProfile;
    }
    /**
     * @param CommonGenericRef $accessIpsecProfile
     *
     * @return self
     */
    public function setAccessIpsecProfile(CommonGenericRef $accessIpsecProfile): self
    {
        $this->initialized['accessIpsecProfile'] = true;
        $this->accessIpsecProfile = $accessIpsecProfile;
        return $this;
    }
    /**
     * @return string
     */
    public function getSplitTunnelProfileId(): string
    {
        return $this->splitTunnelProfileId;
    }
    /**
     * @param string $splitTunnelProfileId
     *
     * @return self
     */
    public function setSplitTunnelProfileId(string $splitTunnelProfileId): self
    {
        $this->initialized['splitTunnelProfileId'] = true;
        $this->splitTunnelProfileId = $splitTunnelProfileId;
        return $this;
    }
    /**
     * @return string
     */
    public function getPortalDetectionProfileId(): string
    {
        return $this->portalDetectionProfileId;
    }
    /**
     * @param string $portalDetectionProfileId
     *
     * @return self
     */
    public function setPortalDetectionProfileId(string $portalDetectionProfileId): self
    {
        $this->initialized['portalDetectionProfileId'] = true;
        $this->portalDetectionProfileId = $portalDetectionProfileId;
        return $this;
    }
    /**
     * @return FlexiVpnFlexiVpnSetting
     */
    public function getFlexiVpnProfile(): FlexiVpnFlexiVpnSetting
    {
        return $this->flexiVpnProfile;
    }
    /**
     * @param FlexiVpnFlexiVpnSetting $flexiVpnProfile
     *
     * @return self
     */
    public function setFlexiVpnProfile(FlexiVpnFlexiVpnSetting $flexiVpnProfile): self
    {
        $this->initialized['flexiVpnProfile'] = true;
        $this->flexiVpnProfile = $flexiVpnProfile;
        return $this;
    }
    /**
     * Agile Multi-Band Enabled
     *
     * @return bool
     */
    public function getWifiAgileMultibandEnabled(): bool
    {
        return $this->wifiAgileMultibandEnabled;
    }
    /**
     * Agile Multi-Band Enabled
     *
     * @param bool $wifiAgileMultibandEnabled
     *
     * @return self
     */
    public function setWifiAgileMultibandEnabled(bool $wifiAgileMultibandEnabled): self
    {
        $this->initialized['wifiAgileMultibandEnabled'] = true;
        $this->wifiAgileMultibandEnabled = $wifiAgileMultibandEnabled;
        return $this;
    }
    /**
     * AP Host Name Advertisement Enabled
     *
     * @return bool
     */
    public function getApHostNameAdvertisementEnabled(): bool
    {
        return $this->apHostNameAdvertisementEnabled;
    }
    /**
     * AP Host Name Advertisement Enabled
     *
     * @param bool $apHostNameAdvertisementEnabled
     *
     * @return self
     */
    public function setApHostNameAdvertisementEnabled(bool $apHostNameAdvertisementEnabled): self
    {
        $this->initialized['apHostNameAdvertisementEnabled'] = true;
        $this->apHostNameAdvertisementEnabled = $apHostNameAdvertisementEnabled;
        return $this;
    }
}