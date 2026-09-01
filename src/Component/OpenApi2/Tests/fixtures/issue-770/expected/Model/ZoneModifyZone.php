<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneModifyZone
{
    /**
     * Identifier of the management domain to which the zone belongs
     *
     * @var string
     */
    public string $domainId;
    /**
     * DP Group ID
     *
     * @var string
     */
    public string $dpGroupId;
    /**
     * Enable to enforce priority of DP Group
     *
     * @var bool
     */
    public bool $enforcePriorityDpGroupEnable;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Country code of the zone
     *
     * @var string
     */
    public string $countryCode;
    /**
     * @var ZoneTimezoneSetting
     */
    public ZoneTimezoneSetting $timezone;
    /**
     * @var ZoneApLogin
     */
    public ZoneApLogin $login;
    /**
     * @var ZoneMeshConfiguration
     */
    public ZoneMeshConfiguration $mesh;
    /**
     * @var ZoneSyslog
     */
    public ZoneSyslog $syslog;
    /**
     * @var CommonSmartMonitor
     */
    public CommonSmartMonitor $smartMonitor;
    /**
     * @var CommonClientAdmissionControl
     */
    public CommonClientAdmissionControl $clientAdmissionControl24;
    /**
     * @var CommonClientAdmissionControl
     */
    public CommonClientAdmissionControl $clientAdmissionControl50;
    /**
     * Tunnel type configuration of the zone. No_Tunneled is for IPv6 mode
     *
     * @var string
     */
    public string $tunnelType = 'RuckusGRE';
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $tunnelProfile;
    /**
     * @var ZoneLoadBalancing
     */
    public ZoneLoadBalancing $loadBalancing;
    /**
     * @var ZoneRogue
     */
    public ZoneRogue $rogue;
    /**
     * Enable DoS Protection(Barring UE) of the zone.
     *
     * @var int
     */
    public int $dosBarringEnable;
    /**
     * DoS Protection(Barring UE) blocking period of the zone.
     *
     * @var int
     */
    public int $dosBarringPeriod;
    /**
     * DoS Protection(Barring UE) threshold of the zone.
     *
     * @var int
     */
    public int $dosBarringThreshold;
    /**
     * DoS Protection(Barring UE) check period of the zone.
     *
     * @var int
     */
    public int $dosBarringCheckPeriod;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $locationBasedService;
    /**
     * @var CommonApRebootTimeout
     */
    public CommonApRebootTimeout $apRebootTimeout;
    /**
     * @var string
     */
    public string $location;
    /**
     * @var string
     */
    public string $locationAdditionalInfo;
    /**
     * @var CommonAltitude
     */
    public CommonAltitude $altitude;
    /**
     * @var float
     */
    public float $latitude;
    /**
     * @var float
     */
    public float $longitude;
    /**
     * VLAN pooling overlapping of the zone
     *
     * @var bool
     */
    public bool $vlanOverlappingEnabled;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $nodeAffinityProfile;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $venueProfile;
    /**
     * channel evaluation Interval of the zone
     *
     * @var int
     */
    public int $channelEvaluationInterval = 600;
    /**
     * @var CommonApManagementVlan
     */
    public CommonApManagementVlan $apMgmtVlan;
    /**
     * @var CommonApLatencyInterval
     */
    public CommonApLatencyInterval $apLatencyInterval;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $ipsecProfile;
    /**
     * IPv6 Traffic filtering on the AP
     *
     * @var int
     */
    public int $ipv6TrafficFilterEnabled;
    /**
     * Enable Restricted AP Access of the zone.
     *
     * @var bool
     */
    public bool $restrictedApAccessEnabled;
    /**
     * Restricted AP Access Profile Id of the zone.
     *
     * @var string
     */
    public string $restrictedApAccessProfileId;
    /**
     * Enable Bonjour Fencing Policy on the AP
     *
     * @var bool
     */
    public bool $bonjourFencingPolicyEnabled;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $bonjourFencingPolicy;
    /**
     * @var CommonDhcpSiteConfigRef
     */
    public CommonDhcpSiteConfigRef $dhcpSiteConfig;
    /**
     * @var ZoneApSnmpOptions
     */
    public ZoneApSnmpOptions $snmpAgent;
    /**
     * @var ZoneRecoverySsidSet
     */
    public ZoneRecoverySsidSet $recoverySsid;
    /**
     * Enable Cluster redundancy on zone
     *
     * @var bool
     */
    public bool $clusterRedundancyEnabled;
    /**
     * Rogue AP report will leave out all entries that have signal strength lower than this threshold.
     *
     * @var int
     */
    public int $rogueApReportThreshold;
    /**
     * Adjust the frequency interval to de-authenticate rogue APs.
     *
     * @var int
     */
    public int $rogueApAggressivenessMode;
    /**
     * Enable jamming detection.
     *
     * @var bool
     */
    public bool $rogueApJammingDetection;
    /**
     * @var int
     */
    public int $rogueApJammingThreshold;
    /**
     * Directed multicast from wired client.
     *
     * @var bool
     */
    public bool $directedMulticastFromWiredClientEnabled;
    /**
     * Directed multicast from wireless.
     *
     * @var bool
     */
    public bool $directedMulticastFromWirelessClientEnabled;
    /**
     * Directed multicast from network.
     *
     * @var bool
     */
    public bool $directedMulticastFromNetworkEnabled;
    /**
     * Enabled Health Check Sites.
     *
     * @var bool
     */
    public bool $healthCheckSitesEnabled = false;
    /**
     * Health Check Sites.
     *
     * @var list<string>
     */
    public array $healthCheckSites;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $ruckusGreTunnelProfile;
    /**
     * SoftGRE Profiles for Multiple Tunnel (Start from SZ 5.0)
     *
     * @var list<ZoneSoftGreRef>
     */
    public array $softGreTunnelProflies;
    /**
     * Ipsec profile for Multiple Tunnel (Start from SZ 5.0)
     *
     * @var list<CommonGenericRef>
     */
    public array $ipsecProfiles;
    /**
     * @var string
     */
    public string $ipsecTunnelMode;
    /**
     * Ruckus GRE tunnel broadcast packet forwarding
     *
     * @var bool
     */
    public bool $rksGreForwardBroadcast;
    /**
     * @var string
     */
    public string $sshTunnelEncryption;
    /**
     * LTE band lock channels options
     *
     * @var list<CommonLteBandLockChannel>
     */
    public array $lteBandLockChannels;
    /**
     * @var string
     */
    public string $paloAltoFirewallProfileId;
    /**
     * Historical Connection Failures allows the AP to report historical client connection failures for this zone.
     *
     * @var bool
     */
    public bool $apHccdEnabled = false;
    /**
     * Allow Historical Connection Failures to be persisted.
     *
     * @var bool
     */
    public bool $apHccdPersist = true;
    /**
     * @var bool
     */
    public bool $aaaAffinityEnabled;
    /**
     * Venue Code
     *
     * @var string
     */
    public string $awsVenue;
    /**
     * @var CommonMyRuckusConfig
     */
    public CommonMyRuckusConfig $myRuckusConfig;
    /**
     * @var bool
     */
    public bool $apHttp2CertChkEnable;
    /**
     * Turn on/off BSS coloring mechanism.
     *
     * @var bool
     */
    public bool $bssColoringEnable = true;
    /**
     * @var RadioRadioConfigZone
     */
    public RadioRadioConfigZone $radioConfig;
}