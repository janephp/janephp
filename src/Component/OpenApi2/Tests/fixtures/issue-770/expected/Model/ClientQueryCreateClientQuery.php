<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClientQueryCreateClientQuery
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
    protected $role;
    /**
     * @var string
     */
    protected $ipv6Address;
    /**
     * @var string
     */
    protected $clientMac;
    /**
     * @var string
     */
    protected $dataPlaneName;
    /**
     * @var int
     */
    protected $channel;
    /**
     * @var string
     */
    protected $ssid;
    /**
     * @var string
     */
    protected $encryptionMethod;
    /**
     * @var string
     */
    protected $apName;
    /**
     * @var int
     */
    protected $traffic;
    /**
     * @var int
     */
    protected $uplink;
    /**
     * @var int
     */
    protected $downlink;
    /**
     * @var int
     */
    protected $txRxBytes;
    /**
     * @var int
     */
    protected $txDropDataFrames;
    /**
     * @var int
     */
    protected $txFrames;
    /**
     * @var string
     */
    protected $hostname;
    /**
     * @var int
     */
    protected $vlan;
    /**
     * @var int
     */
    protected $vni;
    /**
     * @var string
     */
    protected $controlPlaneName;
    /**
     * @var int
     */
    protected $rxFrames;
    /**
     * @var string
     */
    protected $wlanType;
    /**
     * @var string
     */
    protected $osType;
    /**
     * @var string
     */
    protected $deviceType;
    /**
     * @var string
     */
    protected $osVendorType;
    /**
     * @var string
     */
    protected $modelName;
    /**
     * @var int
     */
    protected $speedflex;
    /**
     * @var int
     */
    protected $rssi;
    /**
     * @var int
     */
    protected $rxBytes;
    /**
     * @var string
     */
    protected $ipAddress;
    /**
     * @var int
     */
    protected $sessionStartTime;
    /**
     * @var string
     */
    protected $apMac;
    /**
     * @var string
     */
    protected $userName;
    /**
     * @var string
     */
    protected $userRoleId;
    /**
     * @var string
     */
    protected $userRoleName;
    /**
     * @var int
     */
    protected $alerts;
    /**
     * @var int
     */
    protected $txBytes;
    /**
     * @var int
     */
    protected $snr;
    /**
     * @var string
     */
    protected $authMethod;
    /**
     * @var string
     */
    protected $radioType;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $zoneVersion;
    /**
     * @var string
     */
    protected $authStatus;
    /**
     * @var int
     */
    protected $uplinkRate;
    /**
     * @var int
     */
    protected $downlinkRate;
    /**
     * @var int
     */
    protected $txRatebps;
    /**
     * @var string
     */
    protected $zoneId;
    /**
     * @var string
     */
    protected $bssid;
    /**
     * @var list<ClientQueryTcWithQuota>
     */
    protected $tcWithQuotaList;
    /**
     * @var string
     */
    protected $cpeMac;
    /**
     * @var int
     */
    protected $medianTxMCSRate;
    /**
     * @var int
     */
    protected $medianRxMCSRate;
    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * @return string
     */
    public function getIpv6Address(): string
    {
        return $this->ipv6Address;
    }
    /**
     * @param string $ipv6Address
     *
     * @return self
     */
    public function setIpv6Address(string $ipv6Address): self
    {
        $this->initialized['ipv6Address'] = true;
        $this->ipv6Address = $ipv6Address;
        return $this;
    }
    /**
     * @return string
     */
    public function getClientMac(): string
    {
        return $this->clientMac;
    }
    /**
     * @param string $clientMac
     *
     * @return self
     */
    public function setClientMac(string $clientMac): self
    {
        $this->initialized['clientMac'] = true;
        $this->clientMac = $clientMac;
        return $this;
    }
    /**
     * @return string
     */
    public function getDataPlaneName(): string
    {
        return $this->dataPlaneName;
    }
    /**
     * @param string $dataPlaneName
     *
     * @return self
     */
    public function setDataPlaneName(string $dataPlaneName): self
    {
        $this->initialized['dataPlaneName'] = true;
        $this->dataPlaneName = $dataPlaneName;
        return $this;
    }
    /**
     * @return int
     */
    public function getChannel(): int
    {
        return $this->channel;
    }
    /**
     * @param int $channel
     *
     * @return self
     */
    public function setChannel(int $channel): self
    {
        $this->initialized['channel'] = true;
        $this->channel = $channel;
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
    public function getEncryptionMethod(): string
    {
        return $this->encryptionMethod;
    }
    /**
     * @param string $encryptionMethod
     *
     * @return self
     */
    public function setEncryptionMethod(string $encryptionMethod): self
    {
        $this->initialized['encryptionMethod'] = true;
        $this->encryptionMethod = $encryptionMethod;
        return $this;
    }
    /**
     * @return string
     */
    public function getApName(): string
    {
        return $this->apName;
    }
    /**
     * @param string $apName
     *
     * @return self
     */
    public function setApName(string $apName): self
    {
        $this->initialized['apName'] = true;
        $this->apName = $apName;
        return $this;
    }
    /**
     * @return int
     */
    public function getTraffic(): int
    {
        return $this->traffic;
    }
    /**
     * @param int $traffic
     *
     * @return self
     */
    public function setTraffic(int $traffic): self
    {
        $this->initialized['traffic'] = true;
        $this->traffic = $traffic;
        return $this;
    }
    /**
     * @return int
     */
    public function getUplink(): int
    {
        return $this->uplink;
    }
    /**
     * @param int $uplink
     *
     * @return self
     */
    public function setUplink(int $uplink): self
    {
        $this->initialized['uplink'] = true;
        $this->uplink = $uplink;
        return $this;
    }
    /**
     * @return int
     */
    public function getDownlink(): int
    {
        return $this->downlink;
    }
    /**
     * @param int $downlink
     *
     * @return self
     */
    public function setDownlink(int $downlink): self
    {
        $this->initialized['downlink'] = true;
        $this->downlink = $downlink;
        return $this;
    }
    /**
     * @return int
     */
    public function getTxRxBytes(): int
    {
        return $this->txRxBytes;
    }
    /**
     * @param int $txRxBytes
     *
     * @return self
     */
    public function setTxRxBytes(int $txRxBytes): self
    {
        $this->initialized['txRxBytes'] = true;
        $this->txRxBytes = $txRxBytes;
        return $this;
    }
    /**
     * @return int
     */
    public function getTxDropDataFrames(): int
    {
        return $this->txDropDataFrames;
    }
    /**
     * @param int $txDropDataFrames
     *
     * @return self
     */
    public function setTxDropDataFrames(int $txDropDataFrames): self
    {
        $this->initialized['txDropDataFrames'] = true;
        $this->txDropDataFrames = $txDropDataFrames;
        return $this;
    }
    /**
     * @return int
     */
    public function getTxFrames(): int
    {
        return $this->txFrames;
    }
    /**
     * @param int $txFrames
     *
     * @return self
     */
    public function setTxFrames(int $txFrames): self
    {
        $this->initialized['txFrames'] = true;
        $this->txFrames = $txFrames;
        return $this;
    }
    /**
     * @return string
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }
    /**
     * @param string $hostname
     *
     * @return self
     */
    public function setHostname(string $hostname): self
    {
        $this->initialized['hostname'] = true;
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * @return int
     */
    public function getVlan(): int
    {
        return $this->vlan;
    }
    /**
     * @param int $vlan
     *
     * @return self
     */
    public function setVlan(int $vlan): self
    {
        $this->initialized['vlan'] = true;
        $this->vlan = $vlan;
        return $this;
    }
    /**
     * @return int
     */
    public function getVni(): int
    {
        return $this->vni;
    }
    /**
     * @param int $vni
     *
     * @return self
     */
    public function setVni(int $vni): self
    {
        $this->initialized['vni'] = true;
        $this->vni = $vni;
        return $this;
    }
    /**
     * @return string
     */
    public function getControlPlaneName(): string
    {
        return $this->controlPlaneName;
    }
    /**
     * @param string $controlPlaneName
     *
     * @return self
     */
    public function setControlPlaneName(string $controlPlaneName): self
    {
        $this->initialized['controlPlaneName'] = true;
        $this->controlPlaneName = $controlPlaneName;
        return $this;
    }
    /**
     * @return int
     */
    public function getRxFrames(): int
    {
        return $this->rxFrames;
    }
    /**
     * @param int $rxFrames
     *
     * @return self
     */
    public function setRxFrames(int $rxFrames): self
    {
        $this->initialized['rxFrames'] = true;
        $this->rxFrames = $rxFrames;
        return $this;
    }
    /**
     * @return string
     */
    public function getWlanType(): string
    {
        return $this->wlanType;
    }
    /**
     * @param string $wlanType
     *
     * @return self
     */
    public function setWlanType(string $wlanType): self
    {
        $this->initialized['wlanType'] = true;
        $this->wlanType = $wlanType;
        return $this;
    }
    /**
     * @return string
     */
    public function getOsType(): string
    {
        return $this->osType;
    }
    /**
     * @param string $osType
     *
     * @return self
     */
    public function setOsType(string $osType): self
    {
        $this->initialized['osType'] = true;
        $this->osType = $osType;
        return $this;
    }
    /**
     * @return string
     */
    public function getDeviceType(): string
    {
        return $this->deviceType;
    }
    /**
     * @param string $deviceType
     *
     * @return self
     */
    public function setDeviceType(string $deviceType): self
    {
        $this->initialized['deviceType'] = true;
        $this->deviceType = $deviceType;
        return $this;
    }
    /**
     * @return string
     */
    public function getOsVendorType(): string
    {
        return $this->osVendorType;
    }
    /**
     * @param string $osVendorType
     *
     * @return self
     */
    public function setOsVendorType(string $osVendorType): self
    {
        $this->initialized['osVendorType'] = true;
        $this->osVendorType = $osVendorType;
        return $this;
    }
    /**
     * @return string
     */
    public function getModelName(): string
    {
        return $this->modelName;
    }
    /**
     * @param string $modelName
     *
     * @return self
     */
    public function setModelName(string $modelName): self
    {
        $this->initialized['modelName'] = true;
        $this->modelName = $modelName;
        return $this;
    }
    /**
     * @return int
     */
    public function getSpeedflex(): int
    {
        return $this->speedflex;
    }
    /**
     * @param int $speedflex
     *
     * @return self
     */
    public function setSpeedflex(int $speedflex): self
    {
        $this->initialized['speedflex'] = true;
        $this->speedflex = $speedflex;
        return $this;
    }
    /**
     * @return int
     */
    public function getRssi(): int
    {
        return $this->rssi;
    }
    /**
     * @param int $rssi
     *
     * @return self
     */
    public function setRssi(int $rssi): self
    {
        $this->initialized['rssi'] = true;
        $this->rssi = $rssi;
        return $this;
    }
    /**
     * @return int
     */
    public function getRxBytes(): int
    {
        return $this->rxBytes;
    }
    /**
     * @param int $rxBytes
     *
     * @return self
     */
    public function setRxBytes(int $rxBytes): self
    {
        $this->initialized['rxBytes'] = true;
        $this->rxBytes = $rxBytes;
        return $this;
    }
    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
    /**
     * @param string $ipAddress
     *
     * @return self
     */
    public function setIpAddress(string $ipAddress): self
    {
        $this->initialized['ipAddress'] = true;
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * @return int
     */
    public function getSessionStartTime(): int
    {
        return $this->sessionStartTime;
    }
    /**
     * @param int $sessionStartTime
     *
     * @return self
     */
    public function setSessionStartTime(int $sessionStartTime): self
    {
        $this->initialized['sessionStartTime'] = true;
        $this->sessionStartTime = $sessionStartTime;
        return $this;
    }
    /**
     * @return string
     */
    public function getApMac(): string
    {
        return $this->apMac;
    }
    /**
     * @param string $apMac
     *
     * @return self
     */
    public function setApMac(string $apMac): self
    {
        $this->initialized['apMac'] = true;
        $this->apMac = $apMac;
        return $this;
    }
    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;
        return $this;
    }
    /**
     * @return string
     */
    public function getUserRoleId(): string
    {
        return $this->userRoleId;
    }
    /**
     * @param string $userRoleId
     *
     * @return self
     */
    public function setUserRoleId(string $userRoleId): self
    {
        $this->initialized['userRoleId'] = true;
        $this->userRoleId = $userRoleId;
        return $this;
    }
    /**
     * @return string
     */
    public function getUserRoleName(): string
    {
        return $this->userRoleName;
    }
    /**
     * @param string $userRoleName
     *
     * @return self
     */
    public function setUserRoleName(string $userRoleName): self
    {
        $this->initialized['userRoleName'] = true;
        $this->userRoleName = $userRoleName;
        return $this;
    }
    /**
     * @return int
     */
    public function getAlerts(): int
    {
        return $this->alerts;
    }
    /**
     * @param int $alerts
     *
     * @return self
     */
    public function setAlerts(int $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
    /**
     * @return int
     */
    public function getTxBytes(): int
    {
        return $this->txBytes;
    }
    /**
     * @param int $txBytes
     *
     * @return self
     */
    public function setTxBytes(int $txBytes): self
    {
        $this->initialized['txBytes'] = true;
        $this->txBytes = $txBytes;
        return $this;
    }
    /**
     * @return int
     */
    public function getSnr(): int
    {
        return $this->snr;
    }
    /**
     * @param int $snr
     *
     * @return self
     */
    public function setSnr(int $snr): self
    {
        $this->initialized['snr'] = true;
        $this->snr = $snr;
        return $this;
    }
    /**
     * @return string
     */
    public function getAuthMethod(): string
    {
        return $this->authMethod;
    }
    /**
     * @param string $authMethod
     *
     * @return self
     */
    public function setAuthMethod(string $authMethod): self
    {
        $this->initialized['authMethod'] = true;
        $this->authMethod = $authMethod;
        return $this;
    }
    /**
     * @return string
     */
    public function getRadioType(): string
    {
        return $this->radioType;
    }
    /**
     * @param string $radioType
     *
     * @return self
     */
    public function setRadioType(string $radioType): self
    {
        $this->initialized['radioType'] = true;
        $this->radioType = $radioType;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return string
     */
    public function getZoneVersion(): string
    {
        return $this->zoneVersion;
    }
    /**
     * @param string $zoneVersion
     *
     * @return self
     */
    public function setZoneVersion(string $zoneVersion): self
    {
        $this->initialized['zoneVersion'] = true;
        $this->zoneVersion = $zoneVersion;
        return $this;
    }
    /**
     * @return string
     */
    public function getAuthStatus(): string
    {
        return $this->authStatus;
    }
    /**
     * @param string $authStatus
     *
     * @return self
     */
    public function setAuthStatus(string $authStatus): self
    {
        $this->initialized['authStatus'] = true;
        $this->authStatus = $authStatus;
        return $this;
    }
    /**
     * @return int
     */
    public function getUplinkRate(): int
    {
        return $this->uplinkRate;
    }
    /**
     * @param int $uplinkRate
     *
     * @return self
     */
    public function setUplinkRate(int $uplinkRate): self
    {
        $this->initialized['uplinkRate'] = true;
        $this->uplinkRate = $uplinkRate;
        return $this;
    }
    /**
     * @return int
     */
    public function getDownlinkRate(): int
    {
        return $this->downlinkRate;
    }
    /**
     * @param int $downlinkRate
     *
     * @return self
     */
    public function setDownlinkRate(int $downlinkRate): self
    {
        $this->initialized['downlinkRate'] = true;
        $this->downlinkRate = $downlinkRate;
        return $this;
    }
    /**
     * @return int
     */
    public function getTxRatebps(): int
    {
        return $this->txRatebps;
    }
    /**
     * @param int $txRatebps
     *
     * @return self
     */
    public function setTxRatebps(int $txRatebps): self
    {
        $this->initialized['txRatebps'] = true;
        $this->txRatebps = $txRatebps;
        return $this;
    }
    /**
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
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
    public function getBssid(): string
    {
        return $this->bssid;
    }
    /**
     * @param string $bssid
     *
     * @return self
     */
    public function setBssid(string $bssid): self
    {
        $this->initialized['bssid'] = true;
        $this->bssid = $bssid;
        return $this;
    }
    /**
     * @return list<ClientQueryTcWithQuota>
     */
    public function getTcWithQuotaList(): array
    {
        return $this->tcWithQuotaList;
    }
    /**
     * @param list<ClientQueryTcWithQuota> $tcWithQuotaList
     *
     * @return self
     */
    public function setTcWithQuotaList(array $tcWithQuotaList): self
    {
        $this->initialized['tcWithQuotaList'] = true;
        $this->tcWithQuotaList = $tcWithQuotaList;
        return $this;
    }
    /**
     * @return string
     */
    public function getCpeMac(): string
    {
        return $this->cpeMac;
    }
    /**
     * @param string $cpeMac
     *
     * @return self
     */
    public function setCpeMac(string $cpeMac): self
    {
        $this->initialized['cpeMac'] = true;
        $this->cpeMac = $cpeMac;
        return $this;
    }
    /**
     * @return int
     */
    public function getMedianTxMCSRate(): int
    {
        return $this->medianTxMCSRate;
    }
    /**
     * @param int $medianTxMCSRate
     *
     * @return self
     */
    public function setMedianTxMCSRate(int $medianTxMCSRate): self
    {
        $this->initialized['medianTxMCSRate'] = true;
        $this->medianTxMCSRate = $medianTxMCSRate;
        return $this;
    }
    /**
     * @return int
     */
    public function getMedianRxMCSRate(): int
    {
        return $this->medianRxMCSRate;
    }
    /**
     * @param int $medianRxMCSRate
     *
     * @return self
     */
    public function setMedianRxMCSRate(int $medianRxMCSRate): self
    {
        $this->initialized['medianRxMCSRate'] = true;
        $this->medianRxMCSRate = $medianRxMCSRate;
        return $this;
    }
}