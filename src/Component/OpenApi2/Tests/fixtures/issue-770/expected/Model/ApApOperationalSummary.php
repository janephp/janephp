<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApApOperationalSummary
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
     * Identifier of the zone to which the AP belongs
     *
     * @var string
     */
    protected $zoneId;
    /**
     * Identifier of the AP group to which the AP belongs
     *
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
     * @var string
     */
    protected $version;
    /**
     * Country code of the AP
     *
     * @var string
     */
    protected $countryCode;
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
     * Identifier of the control plane to which the AP is currently connected
     *
     * @var string
     */
    protected $cpId;
    /**
     * Identifier of the data plane to which the AP is currently connected
     *
     * @var string
     */
    protected $dpId;
    /**
     * 2.4GHz radio channel number that the AP is currently using
     *
     * @var string
     */
    protected $wifi24Channel;
    /**
     * 5GHZ radio channel number that the AP is currently using
     *
     * @var string
     */
    protected $wifi50Channel;
    /**
     * @var string
     */
    protected $wifi6gChannel;
    /**
     * Mesh role of the AP
     *
     * @var string
     */
    protected $meshRole;
    /**
     * Number of mesh hops of the AP. This is only applicable to mesh APs.
     *
     * @var int
     */
    protected $meshHop;
    /**
     * Indicates how the AP's IP address was obtained. The AP's IP address can be statically or dynamically assigned or kept unchanged.
     *
     * @var string
     */
    protected $ipType;
    /**
     * IP address of the AP
     *
     * @var string
     */
    protected $ip;
    /**
     * Indicates how the AP's IP address was obtained. The AP's IP address can be statically or dynamically assigned or kept unchanged.
     *
     * @var string
     */
    protected $ipv6Type;
    /**
     * IP address of the AP
     *
     * @var string
     */
    protected $ipv6;
    /**
     * External IP address of the AP. This is only applicable when the AP is behind a NAT server.
     *
     * @var string
     */
    protected $externalIp;
    /**
     * External port number of the AP. This is only applicable when the AP is behind a NAT server.
     *
     * @var int
     */
    protected $externalPort;
    /**
     * State of the AP configuration.
     *
     * @var string
     */
    protected $configState;
    /**
     * Connection state of the AP (value: 'Discovery','Connect','Rebooting','Disconnect','Provisioned')
     *
     * @var string
     */
    protected $connectionState;
    /**
     * Registration state of the AP
     *
     * @var string
     */
    protected $registrationState;
    /**
     * Administrative state of the AP. A locked AP will not provide any WLAN services.
     *
     * @var string
     */
    protected $administrativeState;
    /**
     * Provisioning method of the AP. Discovered indicates that the AP contacted the controller using discovery and the AP did not have pre-existing record on the controller. Preprovision indicates that the AP was provisioned to the controller before AP made the first contact. Swap indicates that the AP was provisioned to be a replacement of an existing AP.
     *
     * @var string
     */
    protected $provisionMethod;
    /**
     * Provisioning stage of the AP. This indicates the stage at which the AP is at in the provisioning process. (value
     *
     * @var string
     */
    protected $provisionStage;
    /**
     * Indicates critical APs. Critical AP are APs that were tagged by the controller based on predefined rules.
     *
     * @var bool
     */
    protected $isCriticalAP;
    /**
     * Timestamp when the AP was approved by the controller
     *
     * @var int
     */
    protected $approvedTime;
    /**
     * Timestamp of the last successful communication with the AP
     *
     * @var int
     */
    protected $lastSeenTime;
    /**
     * Uptime of the AP since it was last rebooted (unit:second)
     *
     * @var int
     */
    protected $uptime;
    /**
     * Number of clients on the AP
     *
     * @var int
     */
    protected $clientCount;
    /**
     * Management vlan on the AP
     *
     * @var int
     */
    protected $managementVlan;
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
     * Identifier of the zone to which the AP belongs
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Identifier of the zone to which the AP belongs
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
     * Identifier of the AP group to which the AP belongs
     *
     * @return string
     */
    public function getApGroupId(): string
    {
        return $this->apGroupId;
    }
    /**
     * Identifier of the AP group to which the AP belongs
     *
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
     * Country code of the AP
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Country code of the AP
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
     * Identifier of the control plane to which the AP is currently connected
     *
     * @return string
     */
    public function getCpId(): string
    {
        return $this->cpId;
    }
    /**
     * Identifier of the control plane to which the AP is currently connected
     *
     * @param string $cpId
     *
     * @return self
     */
    public function setCpId(string $cpId): self
    {
        $this->initialized['cpId'] = true;
        $this->cpId = $cpId;
        return $this;
    }
    /**
     * Identifier of the data plane to which the AP is currently connected
     *
     * @return string
     */
    public function getDpId(): string
    {
        return $this->dpId;
    }
    /**
     * Identifier of the data plane to which the AP is currently connected
     *
     * @param string $dpId
     *
     * @return self
     */
    public function setDpId(string $dpId): self
    {
        $this->initialized['dpId'] = true;
        $this->dpId = $dpId;
        return $this;
    }
    /**
     * 2.4GHz radio channel number that the AP is currently using
     *
     * @return string
     */
    public function getWifi24Channel(): string
    {
        return $this->wifi24Channel;
    }
    /**
     * 2.4GHz radio channel number that the AP is currently using
     *
     * @param string $wifi24Channel
     *
     * @return self
     */
    public function setWifi24Channel(string $wifi24Channel): self
    {
        $this->initialized['wifi24Channel'] = true;
        $this->wifi24Channel = $wifi24Channel;
        return $this;
    }
    /**
     * 5GHZ radio channel number that the AP is currently using
     *
     * @return string
     */
    public function getWifi50Channel(): string
    {
        return $this->wifi50Channel;
    }
    /**
     * 5GHZ radio channel number that the AP is currently using
     *
     * @param string $wifi50Channel
     *
     * @return self
     */
    public function setWifi50Channel(string $wifi50Channel): self
    {
        $this->initialized['wifi50Channel'] = true;
        $this->wifi50Channel = $wifi50Channel;
        return $this;
    }
    /**
     * @return string
     */
    public function getWifi6gChannel(): string
    {
        return $this->wifi6gChannel;
    }
    /**
     * @param string $wifi6gChannel
     *
     * @return self
     */
    public function setWifi6gChannel(string $wifi6gChannel): self
    {
        $this->initialized['wifi6gChannel'] = true;
        $this->wifi6gChannel = $wifi6gChannel;
        return $this;
    }
    /**
     * Mesh role of the AP
     *
     * @return string
     */
    public function getMeshRole(): string
    {
        return $this->meshRole;
    }
    /**
     * Mesh role of the AP
     *
     * @param string $meshRole
     *
     * @return self
     */
    public function setMeshRole(string $meshRole): self
    {
        $this->initialized['meshRole'] = true;
        $this->meshRole = $meshRole;
        return $this;
    }
    /**
     * Number of mesh hops of the AP. This is only applicable to mesh APs.
     *
     * @return int
     */
    public function getMeshHop(): int
    {
        return $this->meshHop;
    }
    /**
     * Number of mesh hops of the AP. This is only applicable to mesh APs.
     *
     * @param int $meshHop
     *
     * @return self
     */
    public function setMeshHop(int $meshHop): self
    {
        $this->initialized['meshHop'] = true;
        $this->meshHop = $meshHop;
        return $this;
    }
    /**
     * Indicates how the AP's IP address was obtained. The AP's IP address can be statically or dynamically assigned or kept unchanged.
     *
     * @return string
     */
    public function getIpType(): string
    {
        return $this->ipType;
    }
    /**
     * Indicates how the AP's IP address was obtained. The AP's IP address can be statically or dynamically assigned or kept unchanged.
     *
     * @param string $ipType
     *
     * @return self
     */
    public function setIpType(string $ipType): self
    {
        $this->initialized['ipType'] = true;
        $this->ipType = $ipType;
        return $this;
    }
    /**
     * IP address of the AP
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * IP address of the AP
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * Indicates how the AP's IP address was obtained. The AP's IP address can be statically or dynamically assigned or kept unchanged.
     *
     * @return string
     */
    public function getIpv6Type(): string
    {
        return $this->ipv6Type;
    }
    /**
     * Indicates how the AP's IP address was obtained. The AP's IP address can be statically or dynamically assigned or kept unchanged.
     *
     * @param string $ipv6Type
     *
     * @return self
     */
    public function setIpv6Type(string $ipv6Type): self
    {
        $this->initialized['ipv6Type'] = true;
        $this->ipv6Type = $ipv6Type;
        return $this;
    }
    /**
     * IP address of the AP
     *
     * @return string
     */
    public function getIpv6(): string
    {
        return $this->ipv6;
    }
    /**
     * IP address of the AP
     *
     * @param string $ipv6
     *
     * @return self
     */
    public function setIpv6(string $ipv6): self
    {
        $this->initialized['ipv6'] = true;
        $this->ipv6 = $ipv6;
        return $this;
    }
    /**
     * External IP address of the AP. This is only applicable when the AP is behind a NAT server.
     *
     * @return string
     */
    public function getExternalIp(): string
    {
        return $this->externalIp;
    }
    /**
     * External IP address of the AP. This is only applicable when the AP is behind a NAT server.
     *
     * @param string $externalIp
     *
     * @return self
     */
    public function setExternalIp(string $externalIp): self
    {
        $this->initialized['externalIp'] = true;
        $this->externalIp = $externalIp;
        return $this;
    }
    /**
     * External port number of the AP. This is only applicable when the AP is behind a NAT server.
     *
     * @return int
     */
    public function getExternalPort(): int
    {
        return $this->externalPort;
    }
    /**
     * External port number of the AP. This is only applicable when the AP is behind a NAT server.
     *
     * @param int $externalPort
     *
     * @return self
     */
    public function setExternalPort(int $externalPort): self
    {
        $this->initialized['externalPort'] = true;
        $this->externalPort = $externalPort;
        return $this;
    }
    /**
     * State of the AP configuration.
     *
     * @return string
     */
    public function getConfigState(): string
    {
        return $this->configState;
    }
    /**
     * State of the AP configuration.
     *
     * @param string $configState
     *
     * @return self
     */
    public function setConfigState(string $configState): self
    {
        $this->initialized['configState'] = true;
        $this->configState = $configState;
        return $this;
    }
    /**
     * Connection state of the AP (value: 'Discovery','Connect','Rebooting','Disconnect','Provisioned')
     *
     * @return string
     */
    public function getConnectionState(): string
    {
        return $this->connectionState;
    }
    /**
     * Connection state of the AP (value: 'Discovery','Connect','Rebooting','Disconnect','Provisioned')
     *
     * @param string $connectionState
     *
     * @return self
     */
    public function setConnectionState(string $connectionState): self
    {
        $this->initialized['connectionState'] = true;
        $this->connectionState = $connectionState;
        return $this;
    }
    /**
     * Registration state of the AP
     *
     * @return string
     */
    public function getRegistrationState(): string
    {
        return $this->registrationState;
    }
    /**
     * Registration state of the AP
     *
     * @param string $registrationState
     *
     * @return self
     */
    public function setRegistrationState(string $registrationState): self
    {
        $this->initialized['registrationState'] = true;
        $this->registrationState = $registrationState;
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
     * Provisioning method of the AP. Discovered indicates that the AP contacted the controller using discovery and the AP did not have pre-existing record on the controller. Preprovision indicates that the AP was provisioned to the controller before AP made the first contact. Swap indicates that the AP was provisioned to be a replacement of an existing AP.
     *
     * @return string
     */
    public function getProvisionMethod(): string
    {
        return $this->provisionMethod;
    }
    /**
     * Provisioning method of the AP. Discovered indicates that the AP contacted the controller using discovery and the AP did not have pre-existing record on the controller. Preprovision indicates that the AP was provisioned to the controller before AP made the first contact. Swap indicates that the AP was provisioned to be a replacement of an existing AP.
     *
     * @param string $provisionMethod
     *
     * @return self
     */
    public function setProvisionMethod(string $provisionMethod): self
    {
        $this->initialized['provisionMethod'] = true;
        $this->provisionMethod = $provisionMethod;
        return $this;
    }
    /**
     * Provisioning stage of the AP. This indicates the stage at which the AP is at in the provisioning process. (value
     *
     * @return string
     */
    public function getProvisionStage(): string
    {
        return $this->provisionStage;
    }
    /**
     * Provisioning stage of the AP. This indicates the stage at which the AP is at in the provisioning process. (value
     *
     * @param string $provisionStage
     *
     * @return self
     */
    public function setProvisionStage(string $provisionStage): self
    {
        $this->initialized['provisionStage'] = true;
        $this->provisionStage = $provisionStage;
        return $this;
    }
    /**
     * Indicates critical APs. Critical AP are APs that were tagged by the controller based on predefined rules.
     *
     * @return bool
     */
    public function getIsCriticalAP(): bool
    {
        return $this->isCriticalAP;
    }
    /**
     * Indicates critical APs. Critical AP are APs that were tagged by the controller based on predefined rules.
     *
     * @param bool $isCriticalAP
     *
     * @return self
     */
    public function setIsCriticalAP(bool $isCriticalAP): self
    {
        $this->initialized['isCriticalAP'] = true;
        $this->isCriticalAP = $isCriticalAP;
        return $this;
    }
    /**
     * Timestamp when the AP was approved by the controller
     *
     * @return int
     */
    public function getApprovedTime(): int
    {
        return $this->approvedTime;
    }
    /**
     * Timestamp when the AP was approved by the controller
     *
     * @param int $approvedTime
     *
     * @return self
     */
    public function setApprovedTime(int $approvedTime): self
    {
        $this->initialized['approvedTime'] = true;
        $this->approvedTime = $approvedTime;
        return $this;
    }
    /**
     * Timestamp of the last successful communication with the AP
     *
     * @return int
     */
    public function getLastSeenTime(): int
    {
        return $this->lastSeenTime;
    }
    /**
     * Timestamp of the last successful communication with the AP
     *
     * @param int $lastSeenTime
     *
     * @return self
     */
    public function setLastSeenTime(int $lastSeenTime): self
    {
        $this->initialized['lastSeenTime'] = true;
        $this->lastSeenTime = $lastSeenTime;
        return $this;
    }
    /**
     * Uptime of the AP since it was last rebooted (unit:second)
     *
     * @return int
     */
    public function getUptime(): int
    {
        return $this->uptime;
    }
    /**
     * Uptime of the AP since it was last rebooted (unit:second)
     *
     * @param int $uptime
     *
     * @return self
     */
    public function setUptime(int $uptime): self
    {
        $this->initialized['uptime'] = true;
        $this->uptime = $uptime;
        return $this;
    }
    /**
     * Number of clients on the AP
     *
     * @return int
     */
    public function getClientCount(): int
    {
        return $this->clientCount;
    }
    /**
     * Number of clients on the AP
     *
     * @param int $clientCount
     *
     * @return self
     */
    public function setClientCount(int $clientCount): self
    {
        $this->initialized['clientCount'] = true;
        $this->clientCount = $clientCount;
        return $this;
    }
    /**
     * Management vlan on the AP
     *
     * @return int
     */
    public function getManagementVlan(): int
    {
        return $this->managementVlan;
    }
    /**
     * Management vlan on the AP
     *
     * @param int $managementVlan
     *
     * @return self
     */
    public function setManagementVlan(int $managementVlan): self
    {
        $this->initialized['managementVlan'] = true;
        $this->managementVlan = $managementVlan;
        return $this;
    }
}