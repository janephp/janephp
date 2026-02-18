<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApgroupApGroupConfiguration
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
     * Identifier of the AP group
     *
     * @var string
     */
    protected $id;
    /**
     * Identifier of the zone to which the AP group belongs
     *
     * @var string
     */
    protected $zoneId;
    /**
     * Name of the AP group
     *
     * @var string
     */
    protected $name;
    /**
     * Description of the AP group
     *
     * @var string
     */
    protected $description;
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
     * @var CommonOverrideGenericRef
     */
    protected $locationBasedService;
    /**
     * @var CommonOverrideClientAdmissionControl
     */
    protected $clientAdmissionControl24;
    /**
     * @var CommonOverrideClientAdmissionControl
     */
    protected $clientAdmissionControl50;
    /**
     * @var ZoneApSnmpOptions
     */
    protected $snmpAgent;
    /**
     * @var CommonGenericRef
     */
    protected $venueProfile;
    /**
     * Members of the AP group
     *
     * @var list<ApgroupApGroupMember>
     */
    protected $members;
    /**
     * channel evaluation Interval of the ap group
     *
     * @var int
     */
    protected $channelEvaluationInterval = 600;
    /**
     * @var CommonApManagementVlan
     */
    protected $apMgmtVlan;
    /**
     * Venue Code
     *
     * @var string
     */
    protected $awsVenue;
    /**
     * @var CommonRecoverySsid
     */
    protected $recoverySsid;
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
     * @var int
     */
    protected $rogueApJammingThreshold;
    /**
     * @var bool
     */
    protected $directedMulticastFromWiredClientEnabled;
    /**
     * @var bool
     */
    protected $directedMulticastFromWirelessClientEnabled;
    /**
     * @var bool
     */
    protected $directedMulticastFromNetworkEnabled;
    /**
     * LTE band lock channels options
     *
     * @var list<CommonLteBandLockChannel>
     */
    protected $lteBandLockChannels;
    /**
     * Set AP group as monitoring group.
     *
     * @var bool
     */
    protected $monitoringEnabled;
    /**
     * Override Rogue AP policy ID (only for monitoring group).
     *
     * @var string
     */
    protected $apGroupRoguePolicy;
    /**
     * Set rogue scan frequency (only for monitoring group).
     *
     * @var string
     */
    protected $rogueScanFreq;
    /**
     * @var bool
     */
    protected $paloAltoFirewallProfileOverrided;
    /**
     * @var string
     */
    protected $paloAltoFirewallProfileId;
    /**
     * Ruckus GRE tunnel broadcast packet forwarding
     *
     * @var bool
     */
    protected $rksGreForwardBroadcast;
    /**
     * BSS coloring mechanism enabled.
     *
     * @var bool
     */
    protected $bssColoringEnable;
    /**
     * @var RadioRadioConfigResponse
     */
    protected $radioConfig;
    /**
     * Identifier of the AP group
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the AP group
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Identifier of the zone to which the AP group belongs
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Identifier of the zone to which the AP group belongs
     *
     * @param string $zoneId
     *
     * @return self
     */
    public function setZoneId(string $zoneId): self
    {
        $this->initialized['zoneId'] = true;
        $this->zoneId = $zoneId;
        return $this;
    }
    /**
     * Name of the AP group
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the AP group
     *
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
     * Description of the AP group
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the AP group
     *
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
     * @return CommonOverrideGenericRef
     */
    public function getLocationBasedService(): CommonOverrideGenericRef
    {
        return $this->locationBasedService;
    }
    /**
     * @param CommonOverrideGenericRef $locationBasedService
     *
     * @return self
     */
    public function setLocationBasedService(CommonOverrideGenericRef $locationBasedService): self
    {
        $this->initialized['locationBasedService'] = true;
        $this->locationBasedService = $locationBasedService;
        return $this;
    }
    /**
     * @return CommonOverrideClientAdmissionControl
     */
    public function getClientAdmissionControl24(): CommonOverrideClientAdmissionControl
    {
        return $this->clientAdmissionControl24;
    }
    /**
     * @param CommonOverrideClientAdmissionControl $clientAdmissionControl24
     *
     * @return self
     */
    public function setClientAdmissionControl24(CommonOverrideClientAdmissionControl $clientAdmissionControl24): self
    {
        $this->initialized['clientAdmissionControl24'] = true;
        $this->clientAdmissionControl24 = $clientAdmissionControl24;
        return $this;
    }
    /**
     * @return CommonOverrideClientAdmissionControl
     */
    public function getClientAdmissionControl50(): CommonOverrideClientAdmissionControl
    {
        return $this->clientAdmissionControl50;
    }
    /**
     * @param CommonOverrideClientAdmissionControl $clientAdmissionControl50
     *
     * @return self
     */
    public function setClientAdmissionControl50(CommonOverrideClientAdmissionControl $clientAdmissionControl50): self
    {
        $this->initialized['clientAdmissionControl50'] = true;
        $this->clientAdmissionControl50 = $clientAdmissionControl50;
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
     * Members of the AP group
     *
     * @return list<ApgroupApGroupMember>
     */
    public function getMembers(): array
    {
        return $this->members;
    }
    /**
     * Members of the AP group
     *
     * @param list<ApgroupApGroupMember> $members
     *
     * @return self
     */
    public function setMembers(array $members): self
    {
        $this->initialized['members'] = true;
        $this->members = $members;
        return $this;
    }
    /**
     * channel evaluation Interval of the ap group
     *
     * @return int
     */
    public function getChannelEvaluationInterval(): int
    {
        return $this->channelEvaluationInterval;
    }
    /**
     * channel evaluation Interval of the ap group
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
     * Venue Code
     *
     * @return string
     */
    public function getAwsVenue(): string
    {
        return $this->awsVenue;
    }
    /**
     * Venue Code
     *
     * @param string $awsVenue
     *
     * @return self
     */
    public function setAwsVenue(string $awsVenue): self
    {
        $this->initialized['awsVenue'] = true;
        $this->awsVenue = $awsVenue;
        return $this;
    }
    /**
     * @return CommonRecoverySsid
     */
    public function getRecoverySsid(): CommonRecoverySsid
    {
        return $this->recoverySsid;
    }
    /**
     * @param CommonRecoverySsid $recoverySsid
     *
     * @return self
     */
    public function setRecoverySsid(CommonRecoverySsid $recoverySsid): self
    {
        $this->initialized['recoverySsid'] = true;
        $this->recoverySsid = $recoverySsid;
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
     * @return bool
     */
    public function getDirectedMulticastFromWiredClientEnabled(): bool
    {
        return $this->directedMulticastFromWiredClientEnabled;
    }
    /**
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
     * @return bool
     */
    public function getDirectedMulticastFromWirelessClientEnabled(): bool
    {
        return $this->directedMulticastFromWirelessClientEnabled;
    }
    /**
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
     * @return bool
     */
    public function getDirectedMulticastFromNetworkEnabled(): bool
    {
        return $this->directedMulticastFromNetworkEnabled;
    }
    /**
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
     * Set AP group as monitoring group.
     *
     * @return bool
     */
    public function getMonitoringEnabled(): bool
    {
        return $this->monitoringEnabled;
    }
    /**
     * Set AP group as monitoring group.
     *
     * @param bool $monitoringEnabled
     *
     * @return self
     */
    public function setMonitoringEnabled(bool $monitoringEnabled): self
    {
        $this->initialized['monitoringEnabled'] = true;
        $this->monitoringEnabled = $monitoringEnabled;
        return $this;
    }
    /**
     * Override Rogue AP policy ID (only for monitoring group).
     *
     * @return string
     */
    public function getApGroupRoguePolicy(): string
    {
        return $this->apGroupRoguePolicy;
    }
    /**
     * Override Rogue AP policy ID (only for monitoring group).
     *
     * @param string $apGroupRoguePolicy
     *
     * @return self
     */
    public function setApGroupRoguePolicy(string $apGroupRoguePolicy): self
    {
        $this->initialized['apGroupRoguePolicy'] = true;
        $this->apGroupRoguePolicy = $apGroupRoguePolicy;
        return $this;
    }
    /**
     * Set rogue scan frequency (only for monitoring group).
     *
     * @return string
     */
    public function getRogueScanFreq(): string
    {
        return $this->rogueScanFreq;
    }
    /**
     * Set rogue scan frequency (only for monitoring group).
     *
     * @param string $rogueScanFreq
     *
     * @return self
     */
    public function setRogueScanFreq(string $rogueScanFreq): self
    {
        $this->initialized['rogueScanFreq'] = true;
        $this->rogueScanFreq = $rogueScanFreq;
        return $this;
    }
    /**
     * @return bool
     */
    public function getPaloAltoFirewallProfileOverrided(): bool
    {
        return $this->paloAltoFirewallProfileOverrided;
    }
    /**
     * @param bool $paloAltoFirewallProfileOverrided
     *
     * @return self
     */
    public function setPaloAltoFirewallProfileOverrided(bool $paloAltoFirewallProfileOverrided): self
    {
        $this->initialized['paloAltoFirewallProfileOverrided'] = true;
        $this->paloAltoFirewallProfileOverrided = $paloAltoFirewallProfileOverrided;
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
     * BSS coloring mechanism enabled.
     *
     * @return bool
     */
    public function getBssColoringEnable(): bool
    {
        return $this->bssColoringEnable;
    }
    /**
     * BSS coloring mechanism enabled.
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
     * @return RadioRadioConfigResponse
     */
    public function getRadioConfig(): RadioRadioConfigResponse
    {
        return $this->radioConfig;
    }
    /**
     * @param RadioRadioConfigResponse $radioConfig
     *
     * @return self
     */
    public function setRadioConfig(RadioRadioConfigResponse $radioConfig): self
    {
        $this->initialized['radioConfig'] = true;
        $this->radioConfig = $radioConfig;
        return $this;
    }
}