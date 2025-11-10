<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApApConfiguration
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
    protected $mac;
    /**
     * Identifier of the AP group to which the AP belongs
     *
     * @var string
     */
    protected $zoneId;
    /**
     * @var string
     */
    protected $apGroupId;
    /**
     * Serial number of the AP
     *
     * @var string
     */
    protected $serial;
    /**
     * Model name of the AP
     *
     * @var string
     */
    protected $model;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * GPS Source of the AP
     *
     * @var string
     */
    protected $gpsSource;
    /**
     * @var float
     */
    protected $latitude;
    /**
     * @var float
     */
    protected $longitude;
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
     * Provision checklist of the AP. This field indicates the steps that have been completed in the AP provisioning process.
     *
     * @var string
     */
    protected $provisionChecklist;
    /**
     * Administrative state of the AP. A locked AP will not provide any WLAN services.
     *
     * @var string
     */
    protected $administrativeState = 'Unlocked';
    /**
     * @var ApLogin
     */
    protected $login;
    /**
     * @var ApSyslog
     */
    protected $syslog;
    /**
     * @var RadioRadioConfigResponseAp
     */
    protected $radioConfig;
    /**
     * @var ApNetwork
     */
    protected $network;
    /**
     * @var ApNetworkIpv6
     */
    protected $networkIpv6;
    /**
     * @var CommonOverrideSmartMonitor
     */
    protected $smartMonitor;
    /**
     * @var CommonGenericRef
     */
    protected $bonjourGateway;
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
     * channel evaluation Interval of the AP
     *
     * @var int
     */
    protected $channelEvaluationInterval = 600;
    /**
     * @var CommonApManagementVlan
     */
    protected $apMgmtVlan;
    /**
     * @var ApmodelApModel
     */
    protected $specific;
    /**
     * @var ApMesh
     */
    protected $meshOptions;
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
     * Venue Code
     *
     * @var string
     */
    protected $awsVenue;
    /**
     * Ruckus GRE tunnel broadcast packet forwarding
     *
     * @var bool
     */
    protected $rksGreForwardBroadcast;
    /**
     * Test Speed is enabled or disabled
     *
     * @var bool
     */
    protected $testSpeedEnabled;
    /**
     * @var string
     */
    protected $swapInMac;
    /**
     * @var string
     */
    protected $swapOutMac;
    /**
     * BSS Coloring mechanism enabled.
     *
     * @var bool
     */
    protected $bssColoringEnable;
    /**
     * @return string
     */
    public function getMac(): string
    {
        return $this->mac;
    }
    /**
     * @param string $mac
     *
     * @return self
     */
    public function setMac(string $mac): self
    {
        $this->initialized['mac'] = true;
        $this->mac = $mac;
        return $this;
    }
    /**
     * Identifier of the AP group to which the AP belongs
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Identifier of the AP group to which the AP belongs
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
     * @return string
     */
    public function getApGroupId(): string
    {
        return $this->apGroupId;
    }
    /**
     * @param string $apGroupId
     *
     * @return self
     */
    public function setApGroupId(string $apGroupId): self
    {
        $this->initialized['apGroupId'] = true;
        $this->apGroupId = $apGroupId;
        return $this;
    }
    /**
     * Serial number of the AP
     *
     * @return string
     */
    public function getSerial(): string
    {
        return $this->serial;
    }
    /**
     * Serial number of the AP
     *
     * @param string $serial
     *
     * @return self
     */
    public function setSerial(string $serial): self
    {
        $this->initialized['serial'] = true;
        $this->serial = $serial;
        return $this;
    }
    /**
     * Model name of the AP
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }
    /**
     * Model name of the AP
     *
     * @param string $model
     *
     * @return self
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
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
     * GPS Source of the AP
     *
     * @return string
     */
    public function getGpsSource(): string
    {
        return $this->gpsSource;
    }
    /**
     * GPS Source of the AP
     *
     * @param string $gpsSource
     *
     * @return self
     */
    public function setGpsSource(string $gpsSource): self
    {
        $this->initialized['gpsSource'] = true;
        $this->gpsSource = $gpsSource;
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
     * Provision checklist of the AP. This field indicates the steps that have been completed in the AP provisioning process.
     *
     * @return string
     */
    public function getProvisionChecklist(): string
    {
        return $this->provisionChecklist;
    }
    /**
     * Provision checklist of the AP. This field indicates the steps that have been completed in the AP provisioning process.
     *
     * @param string $provisionChecklist
     *
     * @return self
     */
    public function setProvisionChecklist(string $provisionChecklist): self
    {
        $this->initialized['provisionChecklist'] = true;
        $this->provisionChecklist = $provisionChecklist;
        return $this;
    }
    /**
     * Administrative state of the AP. A locked AP will not provide any WLAN services.
     *
     * @return string
     */
    public function getAdministrativeState(): string
    {
        return $this->administrativeState;
    }
    /**
     * Administrative state of the AP. A locked AP will not provide any WLAN services.
     *
     * @param string $administrativeState
     *
     * @return self
     */
    public function setAdministrativeState(string $administrativeState): self
    {
        $this->initialized['administrativeState'] = true;
        $this->administrativeState = $administrativeState;
        return $this;
    }
    /**
     * @return ApLogin
     */
    public function getLogin(): ApLogin
    {
        return $this->login;
    }
    /**
     * @param ApLogin $login
     *
     * @return self
     */
    public function setLogin(ApLogin $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;
        return $this;
    }
    /**
     * @return ApSyslog
     */
    public function getSyslog(): ApSyslog
    {
        return $this->syslog;
    }
    /**
     * @param ApSyslog $syslog
     *
     * @return self
     */
    public function setSyslog(ApSyslog $syslog): self
    {
        $this->initialized['syslog'] = true;
        $this->syslog = $syslog;
        return $this;
    }
    /**
     * @return RadioRadioConfigResponseAp
     */
    public function getRadioConfig(): RadioRadioConfigResponseAp
    {
        return $this->radioConfig;
    }
    /**
     * @param RadioRadioConfigResponseAp $radioConfig
     *
     * @return self
     */
    public function setRadioConfig(RadioRadioConfigResponseAp $radioConfig): self
    {
        $this->initialized['radioConfig'] = true;
        $this->radioConfig = $radioConfig;
        return $this;
    }
    /**
     * @return ApNetwork
     */
    public function getNetwork(): ApNetwork
    {
        return $this->network;
    }
    /**
     * @param ApNetwork $network
     *
     * @return self
     */
    public function setNetwork(ApNetwork $network): self
    {
        $this->initialized['network'] = true;
        $this->network = $network;
        return $this;
    }
    /**
     * @return ApNetworkIpv6
     */
    public function getNetworkIpv6(): ApNetworkIpv6
    {
        return $this->networkIpv6;
    }
    /**
     * @param ApNetworkIpv6 $networkIpv6
     *
     * @return self
     */
    public function setNetworkIpv6(ApNetworkIpv6 $networkIpv6): self
    {
        $this->initialized['networkIpv6'] = true;
        $this->networkIpv6 = $networkIpv6;
        return $this;
    }
    /**
     * @return CommonOverrideSmartMonitor
     */
    public function getSmartMonitor(): CommonOverrideSmartMonitor
    {
        return $this->smartMonitor;
    }
    /**
     * @param CommonOverrideSmartMonitor $smartMonitor
     *
     * @return self
     */
    public function setSmartMonitor(CommonOverrideSmartMonitor $smartMonitor): self
    {
        $this->initialized['smartMonitor'] = true;
        $this->smartMonitor = $smartMonitor;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getBonjourGateway(): CommonGenericRef
    {
        return $this->bonjourGateway;
    }
    /**
     * @param CommonGenericRef $bonjourGateway
     *
     * @return self
     */
    public function setBonjourGateway(CommonGenericRef $bonjourGateway): self
    {
        $this->initialized['bonjourGateway'] = true;
        $this->bonjourGateway = $bonjourGateway;
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
     * channel evaluation Interval of the AP
     *
     * @return int
     */
    public function getChannelEvaluationInterval(): int
    {
        return $this->channelEvaluationInterval;
    }
    /**
     * channel evaluation Interval of the AP
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
     * @return ApmodelApModel
     */
    public function getSpecific(): ApmodelApModel
    {
        return $this->specific;
    }
    /**
     * @param ApmodelApModel $specific
     *
     * @return self
     */
    public function setSpecific(ApmodelApModel $specific): self
    {
        $this->initialized['specific'] = true;
        $this->specific = $specific;
        return $this;
    }
    /**
     * @return ApMesh
     */
    public function getMeshOptions(): ApMesh
    {
        return $this->meshOptions;
    }
    /**
     * @param ApMesh $meshOptions
     *
     * @return self
     */
    public function setMeshOptions(ApMesh $meshOptions): self
    {
        $this->initialized['meshOptions'] = true;
        $this->meshOptions = $meshOptions;
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
     * Test Speed is enabled or disabled
     *
     * @return bool
     */
    public function getTestSpeedEnabled(): bool
    {
        return $this->testSpeedEnabled;
    }
    /**
     * Test Speed is enabled or disabled
     *
     * @param bool $testSpeedEnabled
     *
     * @return self
     */
    public function setTestSpeedEnabled(bool $testSpeedEnabled): self
    {
        $this->initialized['testSpeedEnabled'] = true;
        $this->testSpeedEnabled = $testSpeedEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getSwapInMac(): string
    {
        return $this->swapInMac;
    }
    /**
     * @param string $swapInMac
     *
     * @return self
     */
    public function setSwapInMac(string $swapInMac): self
    {
        $this->initialized['swapInMac'] = true;
        $this->swapInMac = $swapInMac;
        return $this;
    }
    /**
     * @return string
     */
    public function getSwapOutMac(): string
    {
        return $this->swapOutMac;
    }
    /**
     * @param string $swapOutMac
     *
     * @return self
     */
    public function setSwapOutMac(string $swapOutMac): self
    {
        $this->initialized['swapOutMac'] = true;
        $this->swapOutMac = $swapOutMac;
        return $this;
    }
    /**
     * BSS Coloring mechanism enabled.
     *
     * @return bool
     */
    public function getBssColoringEnable(): bool
    {
        return $this->bssColoringEnable;
    }
    /**
     * BSS Coloring mechanism enabled.
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
}