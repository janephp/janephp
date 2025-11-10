<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneCreateZone
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
     * Identifier of the management domain to which the zone belongs
     *
     * @var string
     */
    protected $domainId;
    /**
     * DP Group ID
     *
     * @var string
     */
    protected $dpGroupId;
    /**
     * Enable to enforce priority of DP Group
     *
     * @var bool
     */
    protected $enforcePriorityDpGroupEnable;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $version;
    /**
     * Country code of the zone
     *
     * @var string
     */
    protected $countryCode;
    /**
     * @var ZoneApLogin
     */
    protected $login;
    /**
     * @var ZoneTimezoneSetting
     */
    protected $timezone;
    /**
     * @var ZoneMeshConfiguration
     */
    protected $mesh;
    /**
     * @var ZoneSyslog
     */
    protected $syslog;
    /**
     * @var CommonSmartMonitor
     */
    protected $smartMonitor;
    /**
     * @var CommonClientAdmissionControl
     */
    protected $clientAdmissionControl24;
    /**
     * @var CommonClientAdmissionControl
     */
    protected $clientAdmissionControl50;
    /**
     * Tunnel type configuration of the zone. No_Tunneled is for IPv6 mode
     *
     * @var string
     */
    protected $tunnelType = 'RuckusGRE';
    /**
     * @var CommonGenericRef
     */
    protected $tunnelProfile;
    /**
     * @var ZoneLoadBalancing
     */
    protected $loadBalancing;
    /**
     * @var ZoneRogue
     */
    protected $rogue;
    /**
     * Enable DoS Protection(Barring UE) of the zone.
     *
     * @var int
     */
    protected $dosBarringEnable;
    /**
     * DoS Protection(Barring UE) blocking period of the zone.
     *
     * @var int
     */
    protected $dosBarringPeriod = 60;
    /**
     * DoS Protection(Barring UE) threshold of the zone.
     *
     * @var int
     */
    protected $dosBarringThreshold = 5;
    /**
     * DoS Protection(Barring UE) check period of the zone.
     *
     * @var int
     */
    protected $dosBarringCheckPeriod = 30;
    /**
     * @var CommonGenericRef
     */
    protected $locationBasedService;
    /**
     * @var CommonApRebootTimeout
     */
    protected $apRebootTimeout;
    /**
     * @var string
     */
    protected $location;
    /**
     * @var string
     */
    protected $locationAdditionalInfo;
    /**
     * @var CommonAltitude
     */
    protected $altitude;
    /**
     * @var float
     */
    protected $latitude;
    /**
     * @var float
     */
    protected $longitude;
    /**
     * VLAN pooling overlapping of the zone
     *
     * @var bool
     */
    protected $vlanOverlappingEnabled;
    /**
     * @var CommonGenericRef
     */
    protected $nodeAffinityProfile;
    /**
     * @var CommonGenericRef
     */
    protected $venueProfile;
    /**
     * channel evaluation Interval of the zone
     *
     * @var int
     */
    protected $channelEvaluationInterval = 600;
    /**
     * @var CommonApManagementVlan
     */
    protected $apMgmtVlan;
    /**
     * @var CommonApLatencyInterval
     */
    protected $apLatencyInterval;
    /**
     * @var CommonGenericRef
     */
    protected $ipsecProfile;
    /**
     * IPv6 Traffic filtering on the AP
     *
     * @var int
     */
    protected $ipv6TrafficFilterEnabled;
    /**
     * Enable Bonjour Fencing Policy on the AP
     *
     * @var bool
     */
    protected $bonjourFencingPolicyEnabled;
    /**
     * @var CommonGenericRef
     */
    protected $bonjourFencingPolicy;
    /**
     * @var CommonDhcpSiteConfigRef
     */
    protected $dhcpSiteConfig;
    /**
     * @var ZoneApSnmpOptions
     */
    protected $snmpAgent;
    /**
     * @var ZoneRecoverySsidSet
     */
    protected $recoverySsid;
    /**
     * Enable Cluster redundancy on zone.
     *
     * @var bool
     */
    protected $clusterRedundancyEnabled = false;
    /**
     * Rogue AP report will leave out all entries that have signal strength lower than this threshold.
     *
     * @var int
     */
    protected $rogueApReportThreshold;
    /**
     * Adjust the frequency interval to de-authenticate rogue APs.
     *
     * @var int
     */
    protected $rogueApAggressivenessMode;
    /**
     * Enable jamming detection.
     *
     * @var bool
     */
    protected $rogueApJammingDetection = false;
    /**
     * @var int
     */
    protected $rogueApJammingThreshold;
    /**
     * Directed multicast from wired client.
     *
     * @var bool
     */
    protected $directedMulticastFromWiredClientEnabled = true;
    /**
     * Directed multicast from wireless client.
     *
     * @var bool
     */
    protected $directedMulticastFromWirelessClientEnabled = true;
    /**
     * Directed multicast from network.
     *
     * @var bool
     */
    protected $directedMulticastFromNetworkEnabled = true;
    /**
     * Enabled Health Check Sites.
     *
     * @var bool
     */
    protected $healthCheckSitesEnabled = false;
    /**
     * Health Check Sites.
     *
     * @var list<string>
     */
    protected $healthCheckSites;
    /**
     * @var CommonGenericRef
     */
    protected $ruckusGreTunnelProfile;
    /**
     * SoftGRE Profiles for Multiple Tunnel (Start from SZ 5.0)
     *
     * @var list<ZoneSoftGreRef>
     */
    protected $softGreTunnelProflies;
    /**
     * Ipsec profile for Multiple Tunnel (Start from SZ 5.0)
     *
     * @var list<CommonGenericRef>
     */
    protected $ipsecProfiles;
    /**
     * @var string
     */
    protected $ipsecTunnelMode;
    /**
     * Ruckus GRE tunnel broadcast packet forwarding
     *
     * @var bool
     */
    protected $rksGreForwardBroadcast = false;
    /**
     * @var string
     */
    protected $sshTunnelEncryption = 'AES128';
    /**
     * LTE band lock channels options
     *
     * @var list<CommonLteBandLockChannel>
     */
    protected $lteBandLockChannels;
    /**
     * @var string
     */
    protected $paloAltoFirewallProfileId;
    /**
     * Historical Connection Failures allows the AP to report historical client connection failures for this zone.
     *
     * @var bool
     */
    protected $apHccdEnabled = false;
    /**
     * Allow Historical Connection Failures to be persisted.
     *
     * @var bool
     */
    protected $apHccdPersist = true;
    /**
     * @var CommonMyRuckusConfig
     */
    protected $myRuckusConfig;
    /**
     * @var bool
     */
    protected $apHttp2CertChkEnable;
    /**
     * Turn on/off BSS coloring mechanism.
     *
     * @var bool
     */
    protected $bssColoringEnable = true;
    /**
     * @var RadioRadioConfigZone
     */
    protected $radioConfig;
    /**
     * Identifier of the management domain to which the zone belongs
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Identifier of the management domain to which the zone belongs
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * DP Group ID
     *
     * @return string
     */
    public function getDpGroupId(): string
    {
        return $this->dpGroupId;
    }
    /**
     * DP Group ID
     *
     * @param string $dpGroupId
     *
     * @return self
     */
    public function setDpGroupId(string $dpGroupId): self
    {
        $this->initialized['dpGroupId'] = true;
        $this->dpGroupId = $dpGroupId;
        return $this;
    }
    /**
     * Enable to enforce priority of DP Group
     *
     * @return bool
     */
    public function getEnforcePriorityDpGroupEnable(): bool
    {
        return $this->enforcePriorityDpGroupEnable;
    }
    /**
     * Enable to enforce priority of DP Group
     *
     * @param bool $enforcePriorityDpGroupEnable
     *
     * @return self
     */
    public function setEnforcePriorityDpGroupEnable(bool $enforcePriorityDpGroupEnable): self
    {
        $this->initialized['enforcePriorityDpGroupEnable'] = true;
        $this->enforcePriorityDpGroupEnable = $enforcePriorityDpGroupEnable;
        return $this;
    }
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
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * Country code of the zone
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Country code of the zone
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * @return ZoneApLogin
     */
    public function getLogin(): ZoneApLogin
    {
        return $this->login;
    }
    /**
     * @param ZoneApLogin $login
     *
     * @return self
     */
    public function setLogin(ZoneApLogin $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;
        return $this;
    }
    /**
     * @return ZoneTimezoneSetting
     */
    public function getTimezone(): ZoneTimezoneSetting
    {
        return $this->timezone;
    }
    /**
     * @param ZoneTimezoneSetting $timezone
     *
     * @return self
     */
    public function setTimezone(ZoneTimezoneSetting $timezone): self
    {
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * @return ZoneMeshConfiguration
     */
    public function getMesh(): ZoneMeshConfiguration
    {
        return $this->mesh;
    }
    /**
     * @param ZoneMeshConfiguration $mesh
     *
     * @return self
     */
    public function setMesh(ZoneMeshConfiguration $mesh): self
    {
        $this->initialized['mesh'] = true;
        $this->mesh = $mesh;
        return $this;
    }
    /**
     * @return ZoneSyslog
     */
    public function getSyslog(): ZoneSyslog
    {
        return $this->syslog;
    }
    /**
     * @param ZoneSyslog $syslog
     *
     * @return self
     */
    public function setSyslog(ZoneSyslog $syslog): self
    {
        $this->initialized['syslog'] = true;
        $this->syslog = $syslog;
        return $this;
    }
    /**
     * @return CommonSmartMonitor
     */
    public function getSmartMonitor(): CommonSmartMonitor
    {
        return $this->smartMonitor;
    }
    /**
     * @param CommonSmartMonitor $smartMonitor
     *
     * @return self
     */
    public function setSmartMonitor(CommonSmartMonitor $smartMonitor): self
    {
        $this->initialized['smartMonitor'] = true;
        $this->smartMonitor = $smartMonitor;
        return $this;
    }
    /**
     * @return CommonClientAdmissionControl
     */
    public function getClientAdmissionControl24(): CommonClientAdmissionControl
    {
        return $this->clientAdmissionControl24;
    }
    /**
     * @param CommonClientAdmissionControl $clientAdmissionControl24
     *
     * @return self
     */
    public function setClientAdmissionControl24(CommonClientAdmissionControl $clientAdmissionControl24): self
    {
        $this->initialized['clientAdmissionControl24'] = true;
        $this->clientAdmissionControl24 = $clientAdmissionControl24;
        return $this;
    }
    /**
     * @return CommonClientAdmissionControl
     */
    public function getClientAdmissionControl50(): CommonClientAdmissionControl
    {
        return $this->clientAdmissionControl50;
    }
    /**
     * @param CommonClientAdmissionControl $clientAdmissionControl50
     *
     * @return self
     */
    public function setClientAdmissionControl50(CommonClientAdmissionControl $clientAdmissionControl50): self
    {
        $this->initialized['clientAdmissionControl50'] = true;
        $this->clientAdmissionControl50 = $clientAdmissionControl50;
        return $this;
    }
    /**
     * Tunnel type configuration of the zone. No_Tunneled is for IPv6 mode
     *
     * @return string
     */
    public function getTunnelType(): string
    {
        return $this->tunnelType;
    }
    /**
     * Tunnel type configuration of the zone. No_Tunneled is for IPv6 mode
     *
     * @param string $tunnelType
     *
     * @return self
     */
    public function setTunnelType(string $tunnelType): self
    {
        $this->initialized['tunnelType'] = true;
        $this->tunnelType = $tunnelType;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getTunnelProfile(): CommonGenericRef
    {
        return $this->tunnelProfile;
    }
    /**
     * @param CommonGenericRef $tunnelProfile
     *
     * @return self
     */
    public function setTunnelProfile(CommonGenericRef $tunnelProfile): self
    {
        $this->initialized['tunnelProfile'] = true;
        $this->tunnelProfile = $tunnelProfile;
        return $this;
    }
    /**
     * @return ZoneLoadBalancing
     */
    public function getLoadBalancing(): ZoneLoadBalancing
    {
        return $this->loadBalancing;
    }
    /**
     * @param ZoneLoadBalancing $loadBalancing
     *
     * @return self
     */
    public function setLoadBalancing(ZoneLoadBalancing $loadBalancing): self
    {
        $this->initialized['loadBalancing'] = true;
        $this->loadBalancing = $loadBalancing;
        return $this;
    }
    /**
     * @return ZoneRogue
     */
    public function getRogue(): ZoneRogue
    {
        return $this->rogue;
    }
    /**
     * @param ZoneRogue $rogue
     *
     * @return self
     */
    public function setRogue(ZoneRogue $rogue): self
    {
        $this->initialized['rogue'] = true;
        $this->rogue = $rogue;
        return $this;
    }
    /**
     * Enable DoS Protection(Barring UE) of the zone.
     *
     * @return int
     */
    public function getDosBarringEnable(): int
    {
        return $this->dosBarringEnable;
    }
    /**
     * Enable DoS Protection(Barring UE) of the zone.
     *
     * @param int $dosBarringEnable
     *
     * @return self
     */
    public function setDosBarringEnable(int $dosBarringEnable): self
    {
        $this->initialized['dosBarringEnable'] = true;
        $this->dosBarringEnable = $dosBarringEnable;
        return $this;
    }
    /**
     * DoS Protection(Barring UE) blocking period of the zone.
     *
     * @return int
     */
    public function getDosBarringPeriod(): int
    {
        return $this->dosBarringPeriod;
    }
    /**
     * DoS Protection(Barring UE) blocking period of the zone.
     *
     * @param int $dosBarringPeriod
     *
     * @return self
     */
    public function setDosBarringPeriod(int $dosBarringPeriod): self
    {
        $this->initialized['dosBarringPeriod'] = true;
        $this->dosBarringPeriod = $dosBarringPeriod;
        return $this;
    }
    /**
     * DoS Protection(Barring UE) threshold of the zone.
     *
     * @return int
     */
    public function getDosBarringThreshold(): int
    {
        return $this->dosBarringThreshold;
    }
    /**
     * DoS Protection(Barring UE) threshold of the zone.
     *
     * @param int $dosBarringThreshold
     *
     * @return self
     */
    public function setDosBarringThreshold(int $dosBarringThreshold): self
    {
        $this->initialized['dosBarringThreshold'] = true;
        $this->dosBarringThreshold = $dosBarringThreshold;
        return $this;
    }
    /**
     * DoS Protection(Barring UE) check period of the zone.
     *
     * @return int
     */
    public function getDosBarringCheckPeriod(): int
    {
        return $this->dosBarringCheckPeriod;
    }
    /**
     * DoS Protection(Barring UE) check period of the zone.
     *
     * @param int $dosBarringCheckPeriod
     *
     * @return self
     */
    public function setDosBarringCheckPeriod(int $dosBarringCheckPeriod): self
    {
        $this->initialized['dosBarringCheckPeriod'] = true;
        $this->dosBarringCheckPeriod = $dosBarringCheckPeriod;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getLocationBasedService(): CommonGenericRef
    {
        return $this->locationBasedService;
    }
    /**
     * @param CommonGenericRef $locationBasedService
     *
     * @return self
     */
    public function setLocationBasedService(CommonGenericRef $locationBasedService): self
    {
        $this->initialized['locationBasedService'] = true;
        $this->locationBasedService = $locationBasedService;
        return $this;
    }
    /**
     * @return CommonApRebootTimeout
     */
    public function getApRebootTimeout(): CommonApRebootTimeout
    {
        return $this->apRebootTimeout;
    }
    /**
     * @param CommonApRebootTimeout $apRebootTimeout
     *
     * @return self
     */
    public function setApRebootTimeout(CommonApRebootTimeout $apRebootTimeout): self
    {
        $this->initialized['apRebootTimeout'] = true;
        $this->apRebootTimeout = $apRebootTimeout;
        return $this;
    }
    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }
    /**
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * @return string
     */
    public function getLocationAdditionalInfo(): string
    {
        return $this->locationAdditionalInfo;
    }
    /**
     * @param string $locationAdditionalInfo
     *
     * @return self
     */
    public function setLocationAdditionalInfo(string $locationAdditionalInfo): self
    {
        $this->initialized['locationAdditionalInfo'] = true;
        $this->locationAdditionalInfo = $locationAdditionalInfo;
        return $this;
    }
    /**
     * @return CommonAltitude
     */
    public function getAltitude(): CommonAltitude
    {
        return $this->altitude;
    }
    /**
     * @param CommonAltitude $altitude
     *
     * @return self
     */
    public function setAltitude(CommonAltitude $altitude): self
    {
        $this->initialized['altitude'] = true;
        $this->altitude = $altitude;
        return $this;
    }
    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }
    /**
     * @param float $latitude
     *
     * @return self
     */
    public function setLatitude(float $latitude): self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }
    /**
     * @param float $longitude
     *
     * @return self
     */
    public function setLongitude(float $longitude): self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * VLAN pooling overlapping of the zone
     *
     * @return bool
     */
    public function getVlanOverlappingEnabled(): bool
    {
        return $this->vlanOverlappingEnabled;
    }
    /**
     * VLAN pooling overlapping of the zone
     *
     * @param bool $vlanOverlappingEnabled
     *
     * @return self
     */
    public function setVlanOverlappingEnabled(bool $vlanOverlappingEnabled): self
    {
        $this->initialized['vlanOverlappingEnabled'] = true;
        $this->vlanOverlappingEnabled = $vlanOverlappingEnabled;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getNodeAffinityProfile(): CommonGenericRef
    {
        return $this->nodeAffinityProfile;
    }
    /**
     * @param CommonGenericRef $nodeAffinityProfile
     *
     * @return self
     */
    public function setNodeAffinityProfile(CommonGenericRef $nodeAffinityProfile): self
    {
        $this->initialized['nodeAffinityProfile'] = true;
        $this->nodeAffinityProfile = $nodeAffinityProfile;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getVenueProfile(): CommonGenericRef
    {
        return $this->venueProfile;
    }
    /**
     * @param CommonGenericRef $venueProfile
     *
     * @return self
     */
    public function setVenueProfile(CommonGenericRef $venueProfile): self
    {
        $this->initialized['venueProfile'] = true;
        $this->venueProfile = $venueProfile;
        return $this;
    }
    /**
     * channel evaluation Interval of the zone
     *
     * @return int
     */
    public function getChannelEvaluationInterval(): int
    {
        return $this->channelEvaluationInterval;
    }
    /**
     * channel evaluation Interval of the zone
     *
     * @param int $channelEvaluationInterval
     *
     * @return self
     */
    public function setChannelEvaluationInterval(int $channelEvaluationInterval): self
    {
        $this->initialized['channelEvaluationInterval'] = true;
        $this->channelEvaluationInterval = $channelEvaluationInterval;
        return $this;
    }
    /**
     * @return CommonApManagementVlan
     */
    public function getApMgmtVlan(): CommonApManagementVlan
    {
        return $this->apMgmtVlan;
    }
    /**
     * @param CommonApManagementVlan $apMgmtVlan
     *
     * @return self
     */
    public function setApMgmtVlan(CommonApManagementVlan $apMgmtVlan): self
    {
        $this->initialized['apMgmtVlan'] = true;
        $this->apMgmtVlan = $apMgmtVlan;
        return $this;
    }
    /**
     * @return CommonApLatencyInterval
     */
    public function getApLatencyInterval(): CommonApLatencyInterval
    {
        return $this->apLatencyInterval;
    }
    /**
     * @param CommonApLatencyInterval $apLatencyInterval
     *
     * @return self
     */
    public function setApLatencyInterval(CommonApLatencyInterval $apLatencyInterval): self
    {
        $this->initialized['apLatencyInterval'] = true;
        $this->apLatencyInterval = $apLatencyInterval;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getIpsecProfile(): CommonGenericRef
    {
        return $this->ipsecProfile;
    }
    /**
     * @param CommonGenericRef $ipsecProfile
     *
     * @return self
     */
    public function setIpsecProfile(CommonGenericRef $ipsecProfile): self
    {
        $this->initialized['ipsecProfile'] = true;
        $this->ipsecProfile = $ipsecProfile;
        return $this;
    }
    /**
     * IPv6 Traffic filtering on the AP
     *
     * @return int
     */
    public function getIpv6TrafficFilterEnabled(): int
    {
        return $this->ipv6TrafficFilterEnabled;
    }
    /**
     * IPv6 Traffic filtering on the AP
     *
     * @param int $ipv6TrafficFilterEnabled
     *
     * @return self
     */
    public function setIpv6TrafficFilterEnabled(int $ipv6TrafficFilterEnabled): self
    {
        $this->initialized['ipv6TrafficFilterEnabled'] = true;
        $this->ipv6TrafficFilterEnabled = $ipv6TrafficFilterEnabled;
        return $this;
    }
    /**
     * Enable Bonjour Fencing Policy on the AP
     *
     * @return bool
     */
    public function getBonjourFencingPolicyEnabled(): bool
    {
        return $this->bonjourFencingPolicyEnabled;
    }
    /**
     * Enable Bonjour Fencing Policy on the AP
     *
     * @param bool $bonjourFencingPolicyEnabled
     *
     * @return self
     */
    public function setBonjourFencingPolicyEnabled(bool $bonjourFencingPolicyEnabled): self
    {
        $this->initialized['bonjourFencingPolicyEnabled'] = true;
        $this->bonjourFencingPolicyEnabled = $bonjourFencingPolicyEnabled;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getBonjourFencingPolicy(): CommonGenericRef
    {
        return $this->bonjourFencingPolicy;
    }
    /**
     * @param CommonGenericRef $bonjourFencingPolicy
     *
     * @return self
     */
    public function setBonjourFencingPolicy(CommonGenericRef $bonjourFencingPolicy): self
    {
        $this->initialized['bonjourFencingPolicy'] = true;
        $this->bonjourFencingPolicy = $bonjourFencingPolicy;
        return $this;
    }
    /**
     * @return CommonDhcpSiteConfigRef
     */
    public function getDhcpSiteConfig(): CommonDhcpSiteConfigRef
    {
        return $this->dhcpSiteConfig;
    }
    /**
     * @param CommonDhcpSiteConfigRef $dhcpSiteConfig
     *
     * @return self
     */
    public function setDhcpSiteConfig(CommonDhcpSiteConfigRef $dhcpSiteConfig): self
    {
        $this->initialized['dhcpSiteConfig'] = true;
        $this->dhcpSiteConfig = $dhcpSiteConfig;
        return $this;
    }
    /**
     * @return ZoneApSnmpOptions
     */
    public function getSnmpAgent(): ZoneApSnmpOptions
    {
        return $this->snmpAgent;
    }
    /**
     * @param ZoneApSnmpOptions $snmpAgent
     *
     * @return self
     */
    public function setSnmpAgent(ZoneApSnmpOptions $snmpAgent): self
    {
        $this->initialized['snmpAgent'] = true;
        $this->snmpAgent = $snmpAgent;
        return $this;
    }
    /**
     * @return ZoneRecoverySsidSet
     */
    public function getRecoverySsid(): ZoneRecoverySsidSet
    {
        return $this->recoverySsid;
    }
    /**
     * @param ZoneRecoverySsidSet $recoverySsid
     *
     * @return self
     */
    public function setRecoverySsid(ZoneRecoverySsidSet $recoverySsid): self
    {
        $this->initialized['recoverySsid'] = true;
        $this->recoverySsid = $recoverySsid;
        return $this;
    }
    /**
     * Enable Cluster redundancy on zone.
     *
     * @return bool
     */
    public function getClusterRedundancyEnabled(): bool
    {
        return $this->clusterRedundancyEnabled;
    }
    /**
     * Enable Cluster redundancy on zone.
     *
     * @param bool $clusterRedundancyEnabled
     *
     * @return self
     */
    public function setClusterRedundancyEnabled(bool $clusterRedundancyEnabled): self
    {
        $this->initialized['clusterRedundancyEnabled'] = true;
        $this->clusterRedundancyEnabled = $clusterRedundancyEnabled;
        return $this;
    }
    /**
     * Rogue AP report will leave out all entries that have signal strength lower than this threshold.
     *
     * @return int
     */
    public function getRogueApReportThreshold(): int
    {
        return $this->rogueApReportThreshold;
    }
    /**
     * Rogue AP report will leave out all entries that have signal strength lower than this threshold.
     *
     * @param int $rogueApReportThreshold
     *
     * @return self
     */
    public function setRogueApReportThreshold(int $rogueApReportThreshold): self
    {
        $this->initialized['rogueApReportThreshold'] = true;
        $this->rogueApReportThreshold = $rogueApReportThreshold;
        return $this;
    }
    /**
     * Adjust the frequency interval to de-authenticate rogue APs.
     *
     * @return int
     */
    public function getRogueApAggressivenessMode(): int
    {
        return $this->rogueApAggressivenessMode;
    }
    /**
     * Adjust the frequency interval to de-authenticate rogue APs.
     *
     * @param int $rogueApAggressivenessMode
     *
     * @return self
     */
    public function setRogueApAggressivenessMode(int $rogueApAggressivenessMode): self
    {
        $this->initialized['rogueApAggressivenessMode'] = true;
        $this->rogueApAggressivenessMode = $rogueApAggressivenessMode;
        return $this;
    }
    /**
     * Enable jamming detection.
     *
     * @return bool
     */
    public function getRogueApJammingDetection(): bool
    {
        return $this->rogueApJammingDetection;
    }
    /**
     * Enable jamming detection.
     *
     * @param bool $rogueApJammingDetection
     *
     * @return self
     */
    public function setRogueApJammingDetection(bool $rogueApJammingDetection): self
    {
        $this->initialized['rogueApJammingDetection'] = true;
        $this->rogueApJammingDetection = $rogueApJammingDetection;
        return $this;
    }
    /**
     * @return int
     */
    public function getRogueApJammingThreshold(): int
    {
        return $this->rogueApJammingThreshold;
    }
    /**
     * @param int $rogueApJammingThreshold
     *
     * @return self
     */
    public function setRogueApJammingThreshold(int $rogueApJammingThreshold): self
    {
        $this->initialized['rogueApJammingThreshold'] = true;
        $this->rogueApJammingThreshold = $rogueApJammingThreshold;
        return $this;
    }
    /**
     * Directed multicast from wired client.
     *
     * @return bool
     */
    public function getDirectedMulticastFromWiredClientEnabled(): bool
    {
        return $this->directedMulticastFromWiredClientEnabled;
    }
    /**
     * Directed multicast from wired client.
     *
     * @param bool $directedMulticastFromWiredClientEnabled
     *
     * @return self
     */
    public function setDirectedMulticastFromWiredClientEnabled(bool $directedMulticastFromWiredClientEnabled): self
    {
        $this->initialized['directedMulticastFromWiredClientEnabled'] = true;
        $this->directedMulticastFromWiredClientEnabled = $directedMulticastFromWiredClientEnabled;
        return $this;
    }
    /**
     * Directed multicast from wireless client.
     *
     * @return bool
     */
    public function getDirectedMulticastFromWirelessClientEnabled(): bool
    {
        return $this->directedMulticastFromWirelessClientEnabled;
    }
    /**
     * Directed multicast from wireless client.
     *
     * @param bool $directedMulticastFromWirelessClientEnabled
     *
     * @return self
     */
    public function setDirectedMulticastFromWirelessClientEnabled(bool $directedMulticastFromWirelessClientEnabled): self
    {
        $this->initialized['directedMulticastFromWirelessClientEnabled'] = true;
        $this->directedMulticastFromWirelessClientEnabled = $directedMulticastFromWirelessClientEnabled;
        return $this;
    }
    /**
     * Directed multicast from network.
     *
     * @return bool
     */
    public function getDirectedMulticastFromNetworkEnabled(): bool
    {
        return $this->directedMulticastFromNetworkEnabled;
    }
    /**
     * Directed multicast from network.
     *
     * @param bool $directedMulticastFromNetworkEnabled
     *
     * @return self
     */
    public function setDirectedMulticastFromNetworkEnabled(bool $directedMulticastFromNetworkEnabled): self
    {
        $this->initialized['directedMulticastFromNetworkEnabled'] = true;
        $this->directedMulticastFromNetworkEnabled = $directedMulticastFromNetworkEnabled;
        return $this;
    }
    /**
     * Enabled Health Check Sites.
     *
     * @return bool
     */
    public function getHealthCheckSitesEnabled(): bool
    {
        return $this->healthCheckSitesEnabled;
    }
    /**
     * Enabled Health Check Sites. 
     *
     * @param bool $healthCheckSitesEnabled
     *
     * @return self
     */
    public function setHealthCheckSitesEnabled(bool $healthCheckSitesEnabled): self
    {
        $this->initialized['healthCheckSitesEnabled'] = true;
        $this->healthCheckSitesEnabled = $healthCheckSitesEnabled;
        return $this;
    }
    /**
     * Health Check Sites.
     *
     * @return list<string>
     */
    public function getHealthCheckSites(): array
    {
        return $this->healthCheckSites;
    }
    /**
     * Health Check Sites.
     *
     * @param list<string> $healthCheckSites
     *
     * @return self
     */
    public function setHealthCheckSites(array $healthCheckSites): self
    {
        $this->initialized['healthCheckSites'] = true;
        $this->healthCheckSites = $healthCheckSites;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getRuckusGreTunnelProfile(): CommonGenericRef
    {
        return $this->ruckusGreTunnelProfile;
    }
    /**
     * @param CommonGenericRef $ruckusGreTunnelProfile
     *
     * @return self
     */
    public function setRuckusGreTunnelProfile(CommonGenericRef $ruckusGreTunnelProfile): self
    {
        $this->initialized['ruckusGreTunnelProfile'] = true;
        $this->ruckusGreTunnelProfile = $ruckusGreTunnelProfile;
        return $this;
    }
    /**
     * SoftGRE Profiles for Multiple Tunnel (Start from SZ 5.0)
     *
     * @return list<ZoneSoftGreRef>
     */
    public function getSoftGreTunnelProflies(): array
    {
        return $this->softGreTunnelProflies;
    }
    /**
     * SoftGRE Profiles for Multiple Tunnel (Start from SZ 5.0)
     *
     * @param list<ZoneSoftGreRef> $softGreTunnelProflies
     *
     * @return self
     */
    public function setSoftGreTunnelProflies(array $softGreTunnelProflies): self
    {
        $this->initialized['softGreTunnelProflies'] = true;
        $this->softGreTunnelProflies = $softGreTunnelProflies;
        return $this;
    }
    /**
     * Ipsec profile for Multiple Tunnel (Start from SZ 5.0)
     *
     * @return list<CommonGenericRef>
     */
    public function getIpsecProfiles(): array
    {
        return $this->ipsecProfiles;
    }
    /**
     * Ipsec profile for Multiple Tunnel (Start from SZ 5.0)
     *
     * @param list<CommonGenericRef> $ipsecProfiles
     *
     * @return self
     */
    public function setIpsecProfiles(array $ipsecProfiles): self
    {
        $this->initialized['ipsecProfiles'] = true;
        $this->ipsecProfiles = $ipsecProfiles;
        return $this;
    }
    /**
     * @return string
     */
    public function getIpsecTunnelMode(): string
    {
        return $this->ipsecTunnelMode;
    }
    /**
     * @param string $ipsecTunnelMode
     *
     * @return self
     */
    public function setIpsecTunnelMode(string $ipsecTunnelMode): self
    {
        $this->initialized['ipsecTunnelMode'] = true;
        $this->ipsecTunnelMode = $ipsecTunnelMode;
        return $this;
    }
    /**
     * Ruckus GRE tunnel broadcast packet forwarding
     *
     * @return bool
     */
    public function getRksGreForwardBroadcast(): bool
    {
        return $this->rksGreForwardBroadcast;
    }
    /**
     * Ruckus GRE tunnel broadcast packet forwarding
     *
     * @param bool $rksGreForwardBroadcast
     *
     * @return self
     */
    public function setRksGreForwardBroadcast(bool $rksGreForwardBroadcast): self
    {
        $this->initialized['rksGreForwardBroadcast'] = true;
        $this->rksGreForwardBroadcast = $rksGreForwardBroadcast;
        return $this;
    }
    /**
     * @return string
     */
    public function getSshTunnelEncryption(): string
    {
        return $this->sshTunnelEncryption;
    }
    /**
     * @param string $sshTunnelEncryption
     *
     * @return self
     */
    public function setSshTunnelEncryption(string $sshTunnelEncryption): self
    {
        $this->initialized['sshTunnelEncryption'] = true;
        $this->sshTunnelEncryption = $sshTunnelEncryption;
        return $this;
    }
    /**
     * LTE band lock channels options
     *
     * @return list<CommonLteBandLockChannel>
     */
    public function getLteBandLockChannels(): array
    {
        return $this->lteBandLockChannels;
    }
    /**
     * LTE band lock channels options
     *
     * @param list<CommonLteBandLockChannel> $lteBandLockChannels
     *
     * @return self
     */
    public function setLteBandLockChannels(array $lteBandLockChannels): self
    {
        $this->initialized['lteBandLockChannels'] = true;
        $this->lteBandLockChannels = $lteBandLockChannels;
        return $this;
    }
    /**
     * @return string
     */
    public function getPaloAltoFirewallProfileId(): string
    {
        return $this->paloAltoFirewallProfileId;
    }
    /**
     * @param string $paloAltoFirewallProfileId
     *
     * @return self
     */
    public function setPaloAltoFirewallProfileId(string $paloAltoFirewallProfileId): self
    {
        $this->initialized['paloAltoFirewallProfileId'] = true;
        $this->paloAltoFirewallProfileId = $paloAltoFirewallProfileId;
        return $this;
    }
    /**
     * Historical Connection Failures allows the AP to report historical client connection failures for this zone.
     *
     * @return bool
     */
    public function getApHccdEnabled(): bool
    {
        return $this->apHccdEnabled;
    }
    /**
     * Historical Connection Failures allows the AP to report historical client connection failures for this zone.
     *
     * @param bool $apHccdEnabled
     *
     * @return self
     */
    public function setApHccdEnabled(bool $apHccdEnabled): self
    {
        $this->initialized['apHccdEnabled'] = true;
        $this->apHccdEnabled = $apHccdEnabled;
        return $this;
    }
    /**
     * Allow Historical Connection Failures to be persisted.
     *
     * @return bool
     */
    public function getApHccdPersist(): bool
    {
        return $this->apHccdPersist;
    }
    /**
     * Allow Historical Connection Failures to be persisted.
     *
     * @param bool $apHccdPersist
     *
     * @return self
     */
    public function setApHccdPersist(bool $apHccdPersist): self
    {
        $this->initialized['apHccdPersist'] = true;
        $this->apHccdPersist = $apHccdPersist;
        return $this;
    }
    /**
     * @return CommonMyRuckusConfig
     */
    public function getMyRuckusConfig(): CommonMyRuckusConfig
    {
        return $this->myRuckusConfig;
    }
    /**
     * @param CommonMyRuckusConfig $myRuckusConfig
     *
     * @return self
     */
    public function setMyRuckusConfig(CommonMyRuckusConfig $myRuckusConfig): self
    {
        $this->initialized['myRuckusConfig'] = true;
        $this->myRuckusConfig = $myRuckusConfig;
        return $this;
    }
    /**
     * @return bool
     */
    public function getApHttp2CertChkEnable(): bool
    {
        return $this->apHttp2CertChkEnable;
    }
    /**
     * @param bool $apHttp2CertChkEnable
     *
     * @return self
     */
    public function setApHttp2CertChkEnable(bool $apHttp2CertChkEnable): self
    {
        $this->initialized['apHttp2CertChkEnable'] = true;
        $this->apHttp2CertChkEnable = $apHttp2CertChkEnable;
        return $this;
    }
    /**
     * Turn on/off BSS coloring mechanism.
     *
     * @return bool
     */
    public function getBssColoringEnable(): bool
    {
        return $this->bssColoringEnable;
    }
    /**
     * Turn on/off BSS coloring mechanism.
     *
     * @param bool $bssColoringEnable
     *
     * @return self
     */
    public function setBssColoringEnable(bool $bssColoringEnable): self
    {
        $this->initialized['bssColoringEnable'] = true;
        $this->bssColoringEnable = $bssColoringEnable;
        return $this;
    }
    /**
     * @return RadioRadioConfigZone
     */
    public function getRadioConfig(): RadioRadioConfigZone
    {
        return $this->radioConfig;
    }
    /**
     * @param RadioRadioConfigZone $radioConfig
     *
     * @return self
     */
    public function setRadioConfig(RadioRadioConfigZone $radioConfig): self
    {
        $this->initialized['radioConfig'] = true;
        $this->radioConfig = $radioConfig;
        return $this;
    }
}