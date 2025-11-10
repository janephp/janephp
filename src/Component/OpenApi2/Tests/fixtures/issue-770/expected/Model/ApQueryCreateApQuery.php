<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApQueryCreateApQuery
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
     * @var int
     */
    protected $registrationTime;
    /**
     * @var string
     */
    protected $poePortStatus;
    /**
     * @var string
     */
    protected $indoorMapId;
    /**
     * @var string
     */
    protected $channel24G;
    /**
     * @var int
     */
    protected $channel24gValue;
    /**
     * @var bool
     */
    protected $configOverride;
    /**
     * @var string
     */
    protected $deviceName;
    /**
     * @var bool
     */
    protected $enabledBonjourGateway;
    /**
     * @var int
     */
    protected $numClients24G;
    /**
     * @var string
     */
    protected $dataBladeName;
    /**
     * @var int
     */
    protected $retry24G;
    /**
     * @var int
     */
    protected $airtime24G;
    /**
     * @var int
     */
    protected $noise5G;
    /**
     * @var int
     */
    protected $noise6G;
    /**
     * @var string
     */
    protected $model;
    /**
     * @var int
     */
    protected $numClients;
    /**
     * @var int
     */
    protected $capacity24G;
    /**
     * @var string
     */
    protected $firmwareVersion;
    /**
     * @var string
     */
    protected $provisionMethod;
    /**
     * @var int
     */
    protected $latency24G;
    /**
     * @var int
     */
    protected $retry5G;
    /**
     * @var int
     */
    protected $retry6G;
    /**
     * @var string
     */
    protected $ip;
    /**
     * @var string
     */
    protected $apMac;
    /**
     * @var int
     */
    protected $noise24G;
    /**
     * @var int
     */
    protected $lastSeen;
    /**
     * @var string
     */
    protected $configurationStatus;
    /**
     * @var int
     */
    protected $airtime5G;
    /**
     * @var int
     */
    protected $airtime6G;
    /**
     * @var int
     */
    protected $alerts;
    /**
     * @var string
     */
    protected $lbsStatus;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var int
     */
    protected $numClients5G;
    /**
     * @var int
     */
    protected $numClients6G;
    /**
     * @var string
     */
    protected $ipv6Address;
    /**
     * @var int
     */
    protected $capacity50G;
    /**
     * @var int
     */
    protected $capacity6G;
    /**
     * @var string
     */
    protected $wlanGroup24Name;
    /**
     * @var float
     */
    protected $connectionFailure;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var int
     */
    protected $capacity;
    /**
     * @var string
     */
    protected $meshRole;
    /**
     * @var string
     */
    protected $channel5G;
    /**
     * @var int
     */
    protected $channel50gValue;
    /**
     * @var string
     */
    protected $channel6G;
    /**
     * @var int
     */
    protected $channel6gValue;
    /**
     * @var int
     */
    protected $managementVlan;
    /**
     * @var string
     */
    protected $wlanGroup6gName;
    /**
     * @var string
     */
    protected $wlanGroup50Name;
    /**
     * @var string
     */
    protected $wlanGroup24Id;
    /**
     * @var string
     */
    protected $controlBladeName;
    /**
     * @var string
     */
    protected $zoneName;
    /**
     * The total data size transmitted in a period of time
     *
     * @var int
     */
    protected $tx;
    /**
     * The total data size received in a period of time
     *
     * @var int
     */
    protected $rx;
    /**
     * The total data size transmitted and received in a period of time
     *
     * @var int
     */
    protected $txRx;
    /**
     * The total data size transmitted in a period of time
     *
     * @var int
     */
    protected $tx24G;
    /**
     * The total data size transmitted in a period of time
     *
     * @var int
     */
    protected $tx50G;
    /**
     * @var int
     */
    protected $tx6G;
    /**
     * The total data size received in a period of time
     *
     * @var int
     */
    protected $rx24G;
    /**
     * The total data size received in a period of time
     *
     * @var int
     */
    protected $rx50G;
    /**
     * @var int
     */
    protected $rx6G;
    /**
     * The total data size transmitted and received in a period of time
     *
     * @var int
     */
    protected $txRx24G;
    /**
     * The total data size transmitted and received in a period of time
     *
     * @var int
     */
    protected $txRx50G;
    /**
     * @var int
     */
    protected $txRx6G;
    /**
     * @var string
     */
    protected $meshMode;
    /**
     * @var string
     */
    protected $extPort;
    /**
     * @var string
     */
    protected $administrativeState;
    /**
     * @var string
     */
    protected $apGroupName;
    /**
     * @var int
     */
    protected $latency50G;
    /**
     * @var int
     */
    protected $latency6G;
    /**
     * @var ApQueryCreateApQueryIndoorMapXy
     */
    protected $indoorMapXy;
    /**
     * @var string
     */
    protected $apGroupId;
    /**
     * @var string
     */
    protected $extIp;
    /**
     * @var int
     */
    protected $airtime;
    /**
     * @var string
     */
    protected $provisionStage;
    /**
     * @var string
     */
    protected $indoorMapName;
    /**
     * @var string
     */
    protected $indoorMapLocation;
    /**
     * @var string
     */
    protected $deviceGps;
    /**
     * @var string
     */
    protected $serial;
    /**
     * @var string
     */
    protected $location;
    /**
     * @var string
     */
    protected $wlanGroup50Id;
    /**
     * @var string
     */
    protected $wlanGroup6gId;
    /**
     * @var string
     */
    protected $registrationState;
    /**
     * @var string
     */
    protected $zoneId;
    /**
     * @var string
     */
    protected $zoneFirmwareVersion;
    /**
     * @var string
     */
    protected $zoneAffinityProfileName;
    /**
     * @var string
     */
    protected $connectionStatus;
    /**
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $domainName;
    /**
     * @var string
     */
    protected $partnerDomainId;
    /**
     * @var string
     */
    protected $dpIp;
    /**
     * @var string
     */
    protected $controlBladeId;
    /**
     * @var bool
     */
    protected $isCriticalAp;
    /**
     * @var int
     */
    protected $crashDump;
    /**
     * @var bool
     */
    protected $cableModemSupported;
    /**
     * @var bool
     */
    protected $cableModemResetSupported;
    /**
     * @var string
     */
    protected $swapInMac;
    /**
     * @var string
     */
    protected $swapOutMac;
    /**
     * @var string
     */
    protected $packetCaptureState;
    /**
     * @var bool
     */
    protected $isOverallHealthStatusFlagged;
    /**
     * @var bool
     */
    protected $isLatency24GFlagged;
    /**
     * @var bool
     */
    protected $isCapacity24GFlagged;
    /**
     * @var bool
     */
    protected $isConnectionFailure24GFlagged;
    /**
     * @var bool
     */
    protected $isLatency50GFlagged;
    /**
     * @var bool
     */
    protected $isCapacity50GFlagged;
    /**
     * @var bool
     */
    protected $isConnectionFailure50GFlagged;
    /**
     * @var bool
     */
    protected $isLatency6GFlagged;
    /**
     * @var bool
     */
    protected $isCapacity6GFlagged;
    /**
     * @var bool
     */
    protected $isConnectionFailure6GFlagged;
    /**
     * @var bool
     */
    protected $isConnectionTotalCountFlagged;
    /**
     * @var bool
     */
    protected $isConnectionFailureFlagged;
    /**
     * @var bool
     */
    protected $isAirtimeUtilization24GFlagged;
    /**
     * @var bool
     */
    protected $isAirtimeUtilization50GFlagged;
    /**
     * @var bool
     */
    protected $isAirtimeUtilization6GFlagged;
    /**
     * @var int
     */
    protected $eirp24G;
    /**
     * @var int
     */
    protected $eirp50G;
    /**
     * @var int
     */
    protected $eirp6G;
    /**
     * @var bool
     */
    protected $supportFips;
    /**
     * @var bool
     */
    protected $fipsEnabled;
    /**
     * @var int
     */
    protected $uptime;
    /**
     * @var int
     */
    protected $ipsecSessionTime;
    /**
     * @var int
     */
    protected $ipsecTxPkts;
    /**
     * @var int
     */
    protected $ipsecRxPkts;
    /**
     * @var int
     */
    protected $ipsecTxBytes;
    /**
     * @var int
     */
    protected $ipsecRxBytes;
    /**
     * @var int
     */
    protected $ipsecTxDropPkts;
    /**
     * @var int
     */
    protected $ipsecRxDropPkts;
    /**
     * @var int
     */
    protected $ipsecTxIdleTime;
    /**
     * @var int
     */
    protected $ipsecRxIdleTime;
    /**
     * @var string
     */
    protected $ipType;
    /**
     * @var string
     */
    protected $ipv6Type;
    /**
     * @var string
     */
    protected $cellularWanInterface;
    /**
     * @var string
     */
    protected $cellularConnectionStatus;
    /**
     * @var string
     */
    protected $cellularSignalStrength;
    /**
     * @var string
     */
    protected $cellularIMSISIM0;
    /**
     * @var string
     */
    protected $cellularIMSISIM1;
    /**
     * @var string
     */
    protected $cellularICCIDSIM0;
    /**
     * @var string
     */
    protected $cellularICCIDSIM1;
    /**
     * @var string
     */
    protected $cellularIsSIM0Present;
    /**
     * @var string
     */
    protected $cellularIsSIM1Present;
    /**
     * @var int
     */
    protected $cellularTxBytesSIM0;
    /**
     * @var int
     */
    protected $cellularTxBytesSIM1;
    /**
     * @var int
     */
    protected $cellularRxBytesSIM0;
    /**
     * @var int
     */
    protected $cellularRxBytesSIM1;
    /**
     * @var string
     */
    protected $cellularActiveSim;
    /**
     * @var string
     */
    protected $cellularIPaddress;
    /**
     * @var string
     */
    protected $cellularSubnetMask;
    /**
     * @var string
     */
    protected $cellularDefaultGateway;
    /**
     * @var string
     */
    protected $cellularOperator;
    /**
     * @var int
     */
    protected $cellular3G4GChannel;
    /**
     * @var string
     */
    protected $cellularCountry;
    /**
     * @var int
     */
    protected $cellularRadioUptime;
    /**
     * @var list<ApQueryCreateApQueryCellularGpsHistoryItem>
     */
    protected $cellularGpsHistory;
    /**
     * @var int
     */
    protected $medianTxRadioMCSRate24G;
    /**
     * @var int
     */
    protected $medianTxRadioMCSRate50G;
    /**
     * @var int
     */
    protected $medianTxRadioMCSRate6G;
    /**
     * @var int
     */
    protected $medianRxRadioMCSRate24G;
    /**
     * @var int
     */
    protected $medianRxRadioMCSRate50G;
    /**
     * @var int
     */
    protected $medianRxRadioMCSRate6G;
    /**
     * @var bool
     */
    protected $monitoringEnabled;
    /**
     * @var int
     */
    protected $txPowerOffset24G;
    /**
     * @var int
     */
    protected $txPowerOffset5G;
    /**
     * @var int
     */
    protected $txPowerOffset6G;
    /**
     * @var int
     */
    protected $rxDesense24G;
    /**
     * @var int
     */
    protected $rxDesense5G;
    /**
     * @var int
     */
    protected $rxDesense6G;
    /**
     * @var int
     */
    protected $cumulativeTx24G;
    /**
     * @var int
     */
    protected $cumulativeRx24G;
    /**
     * @var int
     */
    protected $cumulativeTxRx24G;
    /**
     * @var int
     */
    protected $cumulativeTx5G;
    /**
     * @var int
     */
    protected $cumulativeRx5G;
    /**
     * @var int
     */
    protected $cumulativeTxRx5G;
    /**
     * @var int
     */
    protected $cumulativeTx6G;
    /**
     * @var int
     */
    protected $cumulativeRx6G;
    /**
     * @var int
     */
    protected $cumulativeTxRx6G;
    /**
     * @var bool
     */
    protected $isDual5gMode;
    /**
     * @return int
     */
    public function getRegistrationTime(): int
    {
        return $this->registrationTime;
    }
    /**
     * @param int $registrationTime
     *
     * @return self
     */
    public function setRegistrationTime(int $registrationTime): self
    {
        $this->initialized['registrationTime'] = true;
        $this->registrationTime = $registrationTime;
        return $this;
    }
    /**
     * @return string
     */
    public function getPoePortStatus(): string
    {
        return $this->poePortStatus;
    }
    /**
     * @param string $poePortStatus
     *
     * @return self
     */
    public function setPoePortStatus(string $poePortStatus): self
    {
        $this->initialized['poePortStatus'] = true;
        $this->poePortStatus = $poePortStatus;
        return $this;
    }
    /**
     * @return string
     */
    public function getIndoorMapId(): string
    {
        return $this->indoorMapId;
    }
    /**
     * @param string $indoorMapId
     *
     * @return self
     */
    public function setIndoorMapId(string $indoorMapId): self
    {
        $this->initialized['indoorMapId'] = true;
        $this->indoorMapId = $indoorMapId;
        return $this;
    }
    /**
     * @return string
     */
    public function getChannel24G(): string
    {
        return $this->channel24G;
    }
    /**
     * @param string $channel24G
     *
     * @return self
     */
    public function setChannel24G(string $channel24G): self
    {
        $this->initialized['channel24G'] = true;
        $this->channel24G = $channel24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getChannel24gValue(): int
    {
        return $this->channel24gValue;
    }
    /**
     * @param int $channel24gValue
     *
     * @return self
     */
    public function setChannel24gValue(int $channel24gValue): self
    {
        $this->initialized['channel24gValue'] = true;
        $this->channel24gValue = $channel24gValue;
        return $this;
    }
    /**
     * @return bool
     */
    public function getConfigOverride(): bool
    {
        return $this->configOverride;
    }
    /**
     * @param bool $configOverride
     *
     * @return self
     */
    public function setConfigOverride(bool $configOverride): self
    {
        $this->initialized['configOverride'] = true;
        $this->configOverride = $configOverride;
        return $this;
    }
    /**
     * @return string
     */
    public function getDeviceName(): string
    {
        return $this->deviceName;
    }
    /**
     * @param string $deviceName
     *
     * @return self
     */
    public function setDeviceName(string $deviceName): self
    {
        $this->initialized['deviceName'] = true;
        $this->deviceName = $deviceName;
        return $this;
    }
    /**
     * @return bool
     */
    public function getEnabledBonjourGateway(): bool
    {
        return $this->enabledBonjourGateway;
    }
    /**
     * @param bool $enabledBonjourGateway
     *
     * @return self
     */
    public function setEnabledBonjourGateway(bool $enabledBonjourGateway): self
    {
        $this->initialized['enabledBonjourGateway'] = true;
        $this->enabledBonjourGateway = $enabledBonjourGateway;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumClients24G(): int
    {
        return $this->numClients24G;
    }
    /**
     * @param int $numClients24G
     *
     * @return self
     */
    public function setNumClients24G(int $numClients24G): self
    {
        $this->initialized['numClients24G'] = true;
        $this->numClients24G = $numClients24G;
        return $this;
    }
    /**
     * @return string
     */
    public function getDataBladeName(): string
    {
        return $this->dataBladeName;
    }
    /**
     * @param string $dataBladeName
     *
     * @return self
     */
    public function setDataBladeName(string $dataBladeName): self
    {
        $this->initialized['dataBladeName'] = true;
        $this->dataBladeName = $dataBladeName;
        return $this;
    }
    /**
     * @return int
     */
    public function getRetry24G(): int
    {
        return $this->retry24G;
    }
    /**
     * @param int $retry24G
     *
     * @return self
     */
    public function setRetry24G(int $retry24G): self
    {
        $this->initialized['retry24G'] = true;
        $this->retry24G = $retry24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getAirtime24G(): int
    {
        return $this->airtime24G;
    }
    /**
     * @param int $airtime24G
     *
     * @return self
     */
    public function setAirtime24G(int $airtime24G): self
    {
        $this->initialized['airtime24G'] = true;
        $this->airtime24G = $airtime24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getNoise5G(): int
    {
        return $this->noise5G;
    }
    /**
     * @param int $noise5G
     *
     * @return self
     */
    public function setNoise5G(int $noise5G): self
    {
        $this->initialized['noise5G'] = true;
        $this->noise5G = $noise5G;
        return $this;
    }
    /**
     * @return int
     */
    public function getNoise6G(): int
    {
        return $this->noise6G;
    }
    /**
     * @param int $noise6G
     *
     * @return self
     */
    public function setNoise6G(int $noise6G): self
    {
        $this->initialized['noise6G'] = true;
        $this->noise6G = $noise6G;
        return $this;
    }
    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }
    /**
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
     * @return int
     */
    public function getNumClients(): int
    {
        return $this->numClients;
    }
    /**
     * @param int $numClients
     *
     * @return self
     */
    public function setNumClients(int $numClients): self
    {
        $this->initialized['numClients'] = true;
        $this->numClients = $numClients;
        return $this;
    }
    /**
     * @return int
     */
    public function getCapacity24G(): int
    {
        return $this->capacity24G;
    }
    /**
     * @param int $capacity24G
     *
     * @return self
     */
    public function setCapacity24G(int $capacity24G): self
    {
        $this->initialized['capacity24G'] = true;
        $this->capacity24G = $capacity24G;
        return $this;
    }
    /**
     * @return string
     */
    public function getFirmwareVersion(): string
    {
        return $this->firmwareVersion;
    }
    /**
     * @param string $firmwareVersion
     *
     * @return self
     */
    public function setFirmwareVersion(string $firmwareVersion): self
    {
        $this->initialized['firmwareVersion'] = true;
        $this->firmwareVersion = $firmwareVersion;
        return $this;
    }
    /**
     * @return string
     */
    public function getProvisionMethod(): string
    {
        return $this->provisionMethod;
    }
    /**
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
     * @return int
     */
    public function getLatency24G(): int
    {
        return $this->latency24G;
    }
    /**
     * @param int $latency24G
     *
     * @return self
     */
    public function setLatency24G(int $latency24G): self
    {
        $this->initialized['latency24G'] = true;
        $this->latency24G = $latency24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getRetry5G(): int
    {
        return $this->retry5G;
    }
    /**
     * @param int $retry5G
     *
     * @return self
     */
    public function setRetry5G(int $retry5G): self
    {
        $this->initialized['retry5G'] = true;
        $this->retry5G = $retry5G;
        return $this;
    }
    /**
     * @return int
     */
    public function getRetry6G(): int
    {
        return $this->retry6G;
    }
    /**
     * @param int $retry6G
     *
     * @return self
     */
    public function setRetry6G(int $retry6G): self
    {
        $this->initialized['retry6G'] = true;
        $this->retry6G = $retry6G;
        return $this;
    }
    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
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
     * @return int
     */
    public function getNoise24G(): int
    {
        return $this->noise24G;
    }
    /**
     * @param int $noise24G
     *
     * @return self
     */
    public function setNoise24G(int $noise24G): self
    {
        $this->initialized['noise24G'] = true;
        $this->noise24G = $noise24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getLastSeen(): int
    {
        return $this->lastSeen;
    }
    /**
     * @param int $lastSeen
     *
     * @return self
     */
    public function setLastSeen(int $lastSeen): self
    {
        $this->initialized['lastSeen'] = true;
        $this->lastSeen = $lastSeen;
        return $this;
    }
    /**
     * @return string
     */
    public function getConfigurationStatus(): string
    {
        return $this->configurationStatus;
    }
    /**
     * @param string $configurationStatus
     *
     * @return self
     */
    public function setConfigurationStatus(string $configurationStatus): self
    {
        $this->initialized['configurationStatus'] = true;
        $this->configurationStatus = $configurationStatus;
        return $this;
    }
    /**
     * @return int
     */
    public function getAirtime5G(): int
    {
        return $this->airtime5G;
    }
    /**
     * @param int $airtime5G
     *
     * @return self
     */
    public function setAirtime5G(int $airtime5G): self
    {
        $this->initialized['airtime5G'] = true;
        $this->airtime5G = $airtime5G;
        return $this;
    }
    /**
     * @return int
     */
    public function getAirtime6G(): int
    {
        return $this->airtime6G;
    }
    /**
     * @param int $airtime6G
     *
     * @return self
     */
    public function setAirtime6G(int $airtime6G): self
    {
        $this->initialized['airtime6G'] = true;
        $this->airtime6G = $airtime6G;
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
     * @return string
     */
    public function getLbsStatus(): string
    {
        return $this->lbsStatus;
    }
    /**
     * @param string $lbsStatus
     *
     * @return self
     */
    public function setLbsStatus(string $lbsStatus): self
    {
        $this->initialized['lbsStatus'] = true;
        $this->lbsStatus = $lbsStatus;
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
     * @return int
     */
    public function getNumClients5G(): int
    {
        return $this->numClients5G;
    }
    /**
     * @param int $numClients5G
     *
     * @return self
     */
    public function setNumClients5G(int $numClients5G): self
    {
        $this->initialized['numClients5G'] = true;
        $this->numClients5G = $numClients5G;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumClients6G(): int
    {
        return $this->numClients6G;
    }
    /**
     * @param int $numClients6G
     *
     * @return self
     */
    public function setNumClients6G(int $numClients6G): self
    {
        $this->initialized['numClients6G'] = true;
        $this->numClients6G = $numClients6G;
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
     * @return int
     */
    public function getCapacity50G(): int
    {
        return $this->capacity50G;
    }
    /**
     * @param int $capacity50G
     *
     * @return self
     */
    public function setCapacity50G(int $capacity50G): self
    {
        $this->initialized['capacity50G'] = true;
        $this->capacity50G = $capacity50G;
        return $this;
    }
    /**
     * @return int
     */
    public function getCapacity6G(): int
    {
        return $this->capacity6G;
    }
    /**
     * @param int $capacity6G
     *
     * @return self
     */
    public function setCapacity6G(int $capacity6G): self
    {
        $this->initialized['capacity6G'] = true;
        $this->capacity6G = $capacity6G;
        return $this;
    }
    /**
     * @return string
     */
    public function getWlanGroup24Name(): string
    {
        return $this->wlanGroup24Name;
    }
    /**
     * @param string $wlanGroup24Name
     *
     * @return self
     */
    public function setWlanGroup24Name(string $wlanGroup24Name): self
    {
        $this->initialized['wlanGroup24Name'] = true;
        $this->wlanGroup24Name = $wlanGroup24Name;
        return $this;
    }
    /**
     * @return float
     */
    public function getConnectionFailure(): float
    {
        return $this->connectionFailure;
    }
    /**
     * @param float $connectionFailure
     *
     * @return self
     */
    public function setConnectionFailure(float $connectionFailure): self
    {
        $this->initialized['connectionFailure'] = true;
        $this->connectionFailure = $connectionFailure;
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
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }
    /**
     * @param int $capacity
     *
     * @return self
     */
    public function setCapacity(int $capacity): self
    {
        $this->initialized['capacity'] = true;
        $this->capacity = $capacity;
        return $this;
    }
    /**
     * @return string
     */
    public function getMeshRole(): string
    {
        return $this->meshRole;
    }
    /**
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
     * @return string
     */
    public function getChannel5G(): string
    {
        return $this->channel5G;
    }
    /**
     * @param string $channel5G
     *
     * @return self
     */
    public function setChannel5G(string $channel5G): self
    {
        $this->initialized['channel5G'] = true;
        $this->channel5G = $channel5G;
        return $this;
    }
    /**
     * @return int
     */
    public function getChannel50gValue(): int
    {
        return $this->channel50gValue;
    }
    /**
     * @param int $channel50gValue
     *
     * @return self
     */
    public function setChannel50gValue(int $channel50gValue): self
    {
        $this->initialized['channel50gValue'] = true;
        $this->channel50gValue = $channel50gValue;
        return $this;
    }
    /**
     * @return string
     */
    public function getChannel6G(): string
    {
        return $this->channel6G;
    }
    /**
     * @param string $channel6G
     *
     * @return self
     */
    public function setChannel6G(string $channel6G): self
    {
        $this->initialized['channel6G'] = true;
        $this->channel6G = $channel6G;
        return $this;
    }
    /**
     * @return int
     */
    public function getChannel6gValue(): int
    {
        return $this->channel6gValue;
    }
    /**
     * @param int $channel6gValue
     *
     * @return self
     */
    public function setChannel6gValue(int $channel6gValue): self
    {
        $this->initialized['channel6gValue'] = true;
        $this->channel6gValue = $channel6gValue;
        return $this;
    }
    /**
     * @return int
     */
    public function getManagementVlan(): int
    {
        return $this->managementVlan;
    }
    /**
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
    /**
     * @return string
     */
    public function getWlanGroup6gName(): string
    {
        return $this->wlanGroup6gName;
    }
    /**
     * @param string $wlanGroup6gName
     *
     * @return self
     */
    public function setWlanGroup6gName(string $wlanGroup6gName): self
    {
        $this->initialized['wlanGroup6gName'] = true;
        $this->wlanGroup6gName = $wlanGroup6gName;
        return $this;
    }
    /**
     * @return string
     */
    public function getWlanGroup50Name(): string
    {
        return $this->wlanGroup50Name;
    }
    /**
     * @param string $wlanGroup50Name
     *
     * @return self
     */
    public function setWlanGroup50Name(string $wlanGroup50Name): self
    {
        $this->initialized['wlanGroup50Name'] = true;
        $this->wlanGroup50Name = $wlanGroup50Name;
        return $this;
    }
    /**
     * @return string
     */
    public function getWlanGroup24Id(): string
    {
        return $this->wlanGroup24Id;
    }
    /**
     * @param string $wlanGroup24Id
     *
     * @return self
     */
    public function setWlanGroup24Id(string $wlanGroup24Id): self
    {
        $this->initialized['wlanGroup24Id'] = true;
        $this->wlanGroup24Id = $wlanGroup24Id;
        return $this;
    }
    /**
     * @return string
     */
    public function getControlBladeName(): string
    {
        return $this->controlBladeName;
    }
    /**
     * @param string $controlBladeName
     *
     * @return self
     */
    public function setControlBladeName(string $controlBladeName): self
    {
        $this->initialized['controlBladeName'] = true;
        $this->controlBladeName = $controlBladeName;
        return $this;
    }
    /**
     * @return string
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }
    /**
     * @param string $zoneName
     *
     * @return self
     */
    public function setZoneName(string $zoneName): self
    {
        $this->initialized['zoneName'] = true;
        $this->zoneName = $zoneName;
        return $this;
    }
    /**
     * The total data size transmitted in a period of time
     *
     * @return int
     */
    public function getTx(): int
    {
        return $this->tx;
    }
    /**
     * The total data size transmitted in a period of time
     *
     * @param int $tx
     *
     * @return self
     */
    public function setTx(int $tx): self
    {
        $this->initialized['tx'] = true;
        $this->tx = $tx;
        return $this;
    }
    /**
     * The total data size received in a period of time
     *
     * @return int
     */
    public function getRx(): int
    {
        return $this->rx;
    }
    /**
     * The total data size received in a period of time
     *
     * @param int $rx
     *
     * @return self
     */
    public function setRx(int $rx): self
    {
        $this->initialized['rx'] = true;
        $this->rx = $rx;
        return $this;
    }
    /**
     * The total data size transmitted and received in a period of time
     *
     * @return int
     */
    public function getTxRx(): int
    {
        return $this->txRx;
    }
    /**
     * The total data size transmitted and received in a period of time
     *
     * @param int $txRx
     *
     * @return self
     */
    public function setTxRx(int $txRx): self
    {
        $this->initialized['txRx'] = true;
        $this->txRx = $txRx;
        return $this;
    }
    /**
     * The total data size transmitted in a period of time
     *
     * @return int
     */
    public function getTx24G(): int
    {
        return $this->tx24G;
    }
    /**
     * The total data size transmitted in a period of time
     *
     * @param int $tx24G
     *
     * @return self
     */
    public function setTx24G(int $tx24G): self
    {
        $this->initialized['tx24G'] = true;
        $this->tx24G = $tx24G;
        return $this;
    }
    /**
     * The total data size transmitted in a period of time
     *
     * @return int
     */
    public function getTx50G(): int
    {
        return $this->tx50G;
    }
    /**
     * The total data size transmitted in a period of time
     *
     * @param int $tx50G
     *
     * @return self
     */
    public function setTx50G(int $tx50G): self
    {
        $this->initialized['tx50G'] = true;
        $this->tx50G = $tx50G;
        return $this;
    }
    /**
     * @return int
     */
    public function getTx6G(): int
    {
        return $this->tx6G;
    }
    /**
     * @param int $tx6G
     *
     * @return self
     */
    public function setTx6G(int $tx6G): self
    {
        $this->initialized['tx6G'] = true;
        $this->tx6G = $tx6G;
        return $this;
    }
    /**
     * The total data size received in a period of time
     *
     * @return int
     */
    public function getRx24G(): int
    {
        return $this->rx24G;
    }
    /**
     * The total data size received in a period of time
     *
     * @param int $rx24G
     *
     * @return self
     */
    public function setRx24G(int $rx24G): self
    {
        $this->initialized['rx24G'] = true;
        $this->rx24G = $rx24G;
        return $this;
    }
    /**
     * The total data size received in a period of time
     *
     * @return int
     */
    public function getRx50G(): int
    {
        return $this->rx50G;
    }
    /**
     * The total data size received in a period of time
     *
     * @param int $rx50G
     *
     * @return self
     */
    public function setRx50G(int $rx50G): self
    {
        $this->initialized['rx50G'] = true;
        $this->rx50G = $rx50G;
        return $this;
    }
    /**
     * @return int
     */
    public function getRx6G(): int
    {
        return $this->rx6G;
    }
    /**
     * @param int $rx6G
     *
     * @return self
     */
    public function setRx6G(int $rx6G): self
    {
        $this->initialized['rx6G'] = true;
        $this->rx6G = $rx6G;
        return $this;
    }
    /**
     * The total data size transmitted and received in a period of time
     *
     * @return int
     */
    public function getTxRx24G(): int
    {
        return $this->txRx24G;
    }
    /**
     * The total data size transmitted and received in a period of time
     *
     * @param int $txRx24G
     *
     * @return self
     */
    public function setTxRx24G(int $txRx24G): self
    {
        $this->initialized['txRx24G'] = true;
        $this->txRx24G = $txRx24G;
        return $this;
    }
    /**
     * The total data size transmitted and received in a period of time
     *
     * @return int
     */
    public function getTxRx50G(): int
    {
        return $this->txRx50G;
    }
    /**
     * The total data size transmitted and received in a period of time
     *
     * @param int $txRx50G
     *
     * @return self
     */
    public function setTxRx50G(int $txRx50G): self
    {
        $this->initialized['txRx50G'] = true;
        $this->txRx50G = $txRx50G;
        return $this;
    }
    /**
     * @return int
     */
    public function getTxRx6G(): int
    {
        return $this->txRx6G;
    }
    /**
     * @param int $txRx6G
     *
     * @return self
     */
    public function setTxRx6G(int $txRx6G): self
    {
        $this->initialized['txRx6G'] = true;
        $this->txRx6G = $txRx6G;
        return $this;
    }
    /**
     * @return string
     */
    public function getMeshMode(): string
    {
        return $this->meshMode;
    }
    /**
     * @param string $meshMode
     *
     * @return self
     */
    public function setMeshMode(string $meshMode): self
    {
        $this->initialized['meshMode'] = true;
        $this->meshMode = $meshMode;
        return $this;
    }
    /**
     * @return string
     */
    public function getExtPort(): string
    {
        return $this->extPort;
    }
    /**
     * @param string $extPort
     *
     * @return self
     */
    public function setExtPort(string $extPort): self
    {
        $this->initialized['extPort'] = true;
        $this->extPort = $extPort;
        return $this;
    }
    /**
     * @return string
     */
    public function getAdministrativeState(): string
    {
        return $this->administrativeState;
    }
    /**
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
     * @return string
     */
    public function getApGroupName(): string
    {
        return $this->apGroupName;
    }
    /**
     * @param string $apGroupName
     *
     * @return self
     */
    public function setApGroupName(string $apGroupName): self
    {
        $this->initialized['apGroupName'] = true;
        $this->apGroupName = $apGroupName;
        return $this;
    }
    /**
     * @return int
     */
    public function getLatency50G(): int
    {
        return $this->latency50G;
    }
    /**
     * @param int $latency50G
     *
     * @return self
     */
    public function setLatency50G(int $latency50G): self
    {
        $this->initialized['latency50G'] = true;
        $this->latency50G = $latency50G;
        return $this;
    }
    /**
     * @return int
     */
    public function getLatency6G(): int
    {
        return $this->latency6G;
    }
    /**
     * @param int $latency6G
     *
     * @return self
     */
    public function setLatency6G(int $latency6G): self
    {
        $this->initialized['latency6G'] = true;
        $this->latency6G = $latency6G;
        return $this;
    }
    /**
     * @return ApQueryCreateApQueryIndoorMapXy
     */
    public function getIndoorMapXy(): ApQueryCreateApQueryIndoorMapXy
    {
        return $this->indoorMapXy;
    }
    /**
     * @param ApQueryCreateApQueryIndoorMapXy $indoorMapXy
     *
     * @return self
     */
    public function setIndoorMapXy(ApQueryCreateApQueryIndoorMapXy $indoorMapXy): self
    {
        $this->initialized['indoorMapXy'] = true;
        $this->indoorMapXy = $indoorMapXy;
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
     * @return string
     */
    public function getExtIp(): string
    {
        return $this->extIp;
    }
    /**
     * @param string $extIp
     *
     * @return self
     */
    public function setExtIp(string $extIp): self
    {
        $this->initialized['extIp'] = true;
        $this->extIp = $extIp;
        return $this;
    }
    /**
     * @return int
     */
    public function getAirtime(): int
    {
        return $this->airtime;
    }
    /**
     * @param int $airtime
     *
     * @return self
     */
    public function setAirtime(int $airtime): self
    {
        $this->initialized['airtime'] = true;
        $this->airtime = $airtime;
        return $this;
    }
    /**
     * @return string
     */
    public function getProvisionStage(): string
    {
        return $this->provisionStage;
    }
    /**
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
     * @return string
     */
    public function getIndoorMapName(): string
    {
        return $this->indoorMapName;
    }
    /**
     * @param string $indoorMapName
     *
     * @return self
     */
    public function setIndoorMapName(string $indoorMapName): self
    {
        $this->initialized['indoorMapName'] = true;
        $this->indoorMapName = $indoorMapName;
        return $this;
    }
    /**
     * @return string
     */
    public function getIndoorMapLocation(): string
    {
        return $this->indoorMapLocation;
    }
    /**
     * @param string $indoorMapLocation
     *
     * @return self
     */
    public function setIndoorMapLocation(string $indoorMapLocation): self
    {
        $this->initialized['indoorMapLocation'] = true;
        $this->indoorMapLocation = $indoorMapLocation;
        return $this;
    }
    /**
     * @return string
     */
    public function getDeviceGps(): string
    {
        return $this->deviceGps;
    }
    /**
     * @param string $deviceGps
     *
     * @return self
     */
    public function setDeviceGps(string $deviceGps): self
    {
        $this->initialized['deviceGps'] = true;
        $this->deviceGps = $deviceGps;
        return $this;
    }
    /**
     * @return string
     */
    public function getSerial(): string
    {
        return $this->serial;
    }
    /**
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
    public function getWlanGroup50Id(): string
    {
        return $this->wlanGroup50Id;
    }
    /**
     * @param string $wlanGroup50Id
     *
     * @return self
     */
    public function setWlanGroup50Id(string $wlanGroup50Id): self
    {
        $this->initialized['wlanGroup50Id'] = true;
        $this->wlanGroup50Id = $wlanGroup50Id;
        return $this;
    }
    /**
     * @return string
     */
    public function getWlanGroup6gId(): string
    {
        return $this->wlanGroup6gId;
    }
    /**
     * @param string $wlanGroup6gId
     *
     * @return self
     */
    public function setWlanGroup6gId(string $wlanGroup6gId): self
    {
        $this->initialized['wlanGroup6gId'] = true;
        $this->wlanGroup6gId = $wlanGroup6gId;
        return $this;
    }
    /**
     * @return string
     */
    public function getRegistrationState(): string
    {
        return $this->registrationState;
    }
    /**
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
    public function getZoneFirmwareVersion(): string
    {
        return $this->zoneFirmwareVersion;
    }
    /**
     * @param string $zoneFirmwareVersion
     *
     * @return self
     */
    public function setZoneFirmwareVersion(string $zoneFirmwareVersion): self
    {
        $this->initialized['zoneFirmwareVersion'] = true;
        $this->zoneFirmwareVersion = $zoneFirmwareVersion;
        return $this;
    }
    /**
     * @return string
     */
    public function getZoneAffinityProfileName(): string
    {
        return $this->zoneAffinityProfileName;
    }
    /**
     * @param string $zoneAffinityProfileName
     *
     * @return self
     */
    public function setZoneAffinityProfileName(string $zoneAffinityProfileName): self
    {
        $this->initialized['zoneAffinityProfileName'] = true;
        $this->zoneAffinityProfileName = $zoneAffinityProfileName;
        return $this;
    }
    /**
     * @return string
     */
    public function getConnectionStatus(): string
    {
        return $this->connectionStatus;
    }
    /**
     * @param string $connectionStatus
     *
     * @return self
     */
    public function setConnectionStatus(string $connectionStatus): self
    {
        $this->initialized['connectionStatus'] = true;
        $this->connectionStatus = $connectionStatus;
        return $this;
    }
    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
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
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }
    /**
     * @param string $domainName
     *
     * @return self
     */
    public function setDomainName(string $domainName): self
    {
        $this->initialized['domainName'] = true;
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * @return string
     */
    public function getPartnerDomainId(): string
    {
        return $this->partnerDomainId;
    }
    /**
     * @param string $partnerDomainId
     *
     * @return self
     */
    public function setPartnerDomainId(string $partnerDomainId): self
    {
        $this->initialized['partnerDomainId'] = true;
        $this->partnerDomainId = $partnerDomainId;
        return $this;
    }
    /**
     * @return string
     */
    public function getDpIp(): string
    {
        return $this->dpIp;
    }
    /**
     * @param string $dpIp
     *
     * @return self
     */
    public function setDpIp(string $dpIp): self
    {
        $this->initialized['dpIp'] = true;
        $this->dpIp = $dpIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getControlBladeId(): string
    {
        return $this->controlBladeId;
    }
    /**
     * @param string $controlBladeId
     *
     * @return self
     */
    public function setControlBladeId(string $controlBladeId): self
    {
        $this->initialized['controlBladeId'] = true;
        $this->controlBladeId = $controlBladeId;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsCriticalAp(): bool
    {
        return $this->isCriticalAp;
    }
    /**
     * @param bool $isCriticalAp
     *
     * @return self
     */
    public function setIsCriticalAp(bool $isCriticalAp): self
    {
        $this->initialized['isCriticalAp'] = true;
        $this->isCriticalAp = $isCriticalAp;
        return $this;
    }
    /**
     * @return int
     */
    public function getCrashDump(): int
    {
        return $this->crashDump;
    }
    /**
     * @param int $crashDump
     *
     * @return self
     */
    public function setCrashDump(int $crashDump): self
    {
        $this->initialized['crashDump'] = true;
        $this->crashDump = $crashDump;
        return $this;
    }
    /**
     * @return bool
     */
    public function getCableModemSupported(): bool
    {
        return $this->cableModemSupported;
    }
    /**
     * @param bool $cableModemSupported
     *
     * @return self
     */
    public function setCableModemSupported(bool $cableModemSupported): self
    {
        $this->initialized['cableModemSupported'] = true;
        $this->cableModemSupported = $cableModemSupported;
        return $this;
    }
    /**
     * @return bool
     */
    public function getCableModemResetSupported(): bool
    {
        return $this->cableModemResetSupported;
    }
    /**
     * @param bool $cableModemResetSupported
     *
     * @return self
     */
    public function setCableModemResetSupported(bool $cableModemResetSupported): self
    {
        $this->initialized['cableModemResetSupported'] = true;
        $this->cableModemResetSupported = $cableModemResetSupported;
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
     * @return string
     */
    public function getPacketCaptureState(): string
    {
        return $this->packetCaptureState;
    }
    /**
     * @param string $packetCaptureState
     *
     * @return self
     */
    public function setPacketCaptureState(string $packetCaptureState): self
    {
        $this->initialized['packetCaptureState'] = true;
        $this->packetCaptureState = $packetCaptureState;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsOverallHealthStatusFlagged(): bool
    {
        return $this->isOverallHealthStatusFlagged;
    }
    /**
     * @param bool $isOverallHealthStatusFlagged
     *
     * @return self
     */
    public function setIsOverallHealthStatusFlagged(bool $isOverallHealthStatusFlagged): self
    {
        $this->initialized['isOverallHealthStatusFlagged'] = true;
        $this->isOverallHealthStatusFlagged = $isOverallHealthStatusFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsLatency24GFlagged(): bool
    {
        return $this->isLatency24GFlagged;
    }
    /**
     * @param bool $isLatency24GFlagged
     *
     * @return self
     */
    public function setIsLatency24GFlagged(bool $isLatency24GFlagged): self
    {
        $this->initialized['isLatency24GFlagged'] = true;
        $this->isLatency24GFlagged = $isLatency24GFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsCapacity24GFlagged(): bool
    {
        return $this->isCapacity24GFlagged;
    }
    /**
     * @param bool $isCapacity24GFlagged
     *
     * @return self
     */
    public function setIsCapacity24GFlagged(bool $isCapacity24GFlagged): self
    {
        $this->initialized['isCapacity24GFlagged'] = true;
        $this->isCapacity24GFlagged = $isCapacity24GFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsConnectionFailure24GFlagged(): bool
    {
        return $this->isConnectionFailure24GFlagged;
    }
    /**
     * @param bool $isConnectionFailure24GFlagged
     *
     * @return self
     */
    public function setIsConnectionFailure24GFlagged(bool $isConnectionFailure24GFlagged): self
    {
        $this->initialized['isConnectionFailure24GFlagged'] = true;
        $this->isConnectionFailure24GFlagged = $isConnectionFailure24GFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsLatency50GFlagged(): bool
    {
        return $this->isLatency50GFlagged;
    }
    /**
     * @param bool $isLatency50GFlagged
     *
     * @return self
     */
    public function setIsLatency50GFlagged(bool $isLatency50GFlagged): self
    {
        $this->initialized['isLatency50GFlagged'] = true;
        $this->isLatency50GFlagged = $isLatency50GFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsCapacity50GFlagged(): bool
    {
        return $this->isCapacity50GFlagged;
    }
    /**
     * @param bool $isCapacity50GFlagged
     *
     * @return self
     */
    public function setIsCapacity50GFlagged(bool $isCapacity50GFlagged): self
    {
        $this->initialized['isCapacity50GFlagged'] = true;
        $this->isCapacity50GFlagged = $isCapacity50GFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsConnectionFailure50GFlagged(): bool
    {
        return $this->isConnectionFailure50GFlagged;
    }
    /**
     * @param bool $isConnectionFailure50GFlagged
     *
     * @return self
     */
    public function setIsConnectionFailure50GFlagged(bool $isConnectionFailure50GFlagged): self
    {
        $this->initialized['isConnectionFailure50GFlagged'] = true;
        $this->isConnectionFailure50GFlagged = $isConnectionFailure50GFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsLatency6GFlagged(): bool
    {
        return $this->isLatency6GFlagged;
    }
    /**
     * @param bool $isLatency6GFlagged
     *
     * @return self
     */
    public function setIsLatency6GFlagged(bool $isLatency6GFlagged): self
    {
        $this->initialized['isLatency6GFlagged'] = true;
        $this->isLatency6GFlagged = $isLatency6GFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsCapacity6GFlagged(): bool
    {
        return $this->isCapacity6GFlagged;
    }
    /**
     * @param bool $isCapacity6GFlagged
     *
     * @return self
     */
    public function setIsCapacity6GFlagged(bool $isCapacity6GFlagged): self
    {
        $this->initialized['isCapacity6GFlagged'] = true;
        $this->isCapacity6GFlagged = $isCapacity6GFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsConnectionFailure6GFlagged(): bool
    {
        return $this->isConnectionFailure6GFlagged;
    }
    /**
     * @param bool $isConnectionFailure6GFlagged
     *
     * @return self
     */
    public function setIsConnectionFailure6GFlagged(bool $isConnectionFailure6GFlagged): self
    {
        $this->initialized['isConnectionFailure6GFlagged'] = true;
        $this->isConnectionFailure6GFlagged = $isConnectionFailure6GFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsConnectionTotalCountFlagged(): bool
    {
        return $this->isConnectionTotalCountFlagged;
    }
    /**
     * @param bool $isConnectionTotalCountFlagged
     *
     * @return self
     */
    public function setIsConnectionTotalCountFlagged(bool $isConnectionTotalCountFlagged): self
    {
        $this->initialized['isConnectionTotalCountFlagged'] = true;
        $this->isConnectionTotalCountFlagged = $isConnectionTotalCountFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsConnectionFailureFlagged(): bool
    {
        return $this->isConnectionFailureFlagged;
    }
    /**
     * @param bool $isConnectionFailureFlagged
     *
     * @return self
     */
    public function setIsConnectionFailureFlagged(bool $isConnectionFailureFlagged): self
    {
        $this->initialized['isConnectionFailureFlagged'] = true;
        $this->isConnectionFailureFlagged = $isConnectionFailureFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsAirtimeUtilization24GFlagged(): bool
    {
        return $this->isAirtimeUtilization24GFlagged;
    }
    /**
     * @param bool $isAirtimeUtilization24GFlagged
     *
     * @return self
     */
    public function setIsAirtimeUtilization24GFlagged(bool $isAirtimeUtilization24GFlagged): self
    {
        $this->initialized['isAirtimeUtilization24GFlagged'] = true;
        $this->isAirtimeUtilization24GFlagged = $isAirtimeUtilization24GFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsAirtimeUtilization50GFlagged(): bool
    {
        return $this->isAirtimeUtilization50GFlagged;
    }
    /**
     * @param bool $isAirtimeUtilization50GFlagged
     *
     * @return self
     */
    public function setIsAirtimeUtilization50GFlagged(bool $isAirtimeUtilization50GFlagged): self
    {
        $this->initialized['isAirtimeUtilization50GFlagged'] = true;
        $this->isAirtimeUtilization50GFlagged = $isAirtimeUtilization50GFlagged;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsAirtimeUtilization6GFlagged(): bool
    {
        return $this->isAirtimeUtilization6GFlagged;
    }
    /**
     * @param bool $isAirtimeUtilization6GFlagged
     *
     * @return self
     */
    public function setIsAirtimeUtilization6GFlagged(bool $isAirtimeUtilization6GFlagged): self
    {
        $this->initialized['isAirtimeUtilization6GFlagged'] = true;
        $this->isAirtimeUtilization6GFlagged = $isAirtimeUtilization6GFlagged;
        return $this;
    }
    /**
     * @return int
     */
    public function getEirp24G(): int
    {
        return $this->eirp24G;
    }
    /**
     * @param int $eirp24G
     *
     * @return self
     */
    public function setEirp24G(int $eirp24G): self
    {
        $this->initialized['eirp24G'] = true;
        $this->eirp24G = $eirp24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getEirp50G(): int
    {
        return $this->eirp50G;
    }
    /**
     * @param int $eirp50G
     *
     * @return self
     */
    public function setEirp50G(int $eirp50G): self
    {
        $this->initialized['eirp50G'] = true;
        $this->eirp50G = $eirp50G;
        return $this;
    }
    /**
     * @return int
     */
    public function getEirp6G(): int
    {
        return $this->eirp6G;
    }
    /**
     * @param int $eirp6G
     *
     * @return self
     */
    public function setEirp6G(int $eirp6G): self
    {
        $this->initialized['eirp6G'] = true;
        $this->eirp6G = $eirp6G;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSupportFips(): bool
    {
        return $this->supportFips;
    }
    /**
     * @param bool $supportFips
     *
     * @return self
     */
    public function setSupportFips(bool $supportFips): self
    {
        $this->initialized['supportFips'] = true;
        $this->supportFips = $supportFips;
        return $this;
    }
    /**
     * @return bool
     */
    public function getFipsEnabled(): bool
    {
        return $this->fipsEnabled;
    }
    /**
     * @param bool $fipsEnabled
     *
     * @return self
     */
    public function setFipsEnabled(bool $fipsEnabled): self
    {
        $this->initialized['fipsEnabled'] = true;
        $this->fipsEnabled = $fipsEnabled;
        return $this;
    }
    /**
     * @return int
     */
    public function getUptime(): int
    {
        return $this->uptime;
    }
    /**
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
     * @return int
     */
    public function getIpsecSessionTime(): int
    {
        return $this->ipsecSessionTime;
    }
    /**
     * @param int $ipsecSessionTime
     *
     * @return self
     */
    public function setIpsecSessionTime(int $ipsecSessionTime): self
    {
        $this->initialized['ipsecSessionTime'] = true;
        $this->ipsecSessionTime = $ipsecSessionTime;
        return $this;
    }
    /**
     * @return int
     */
    public function getIpsecTxPkts(): int
    {
        return $this->ipsecTxPkts;
    }
    /**
     * @param int $ipsecTxPkts
     *
     * @return self
     */
    public function setIpsecTxPkts(int $ipsecTxPkts): self
    {
        $this->initialized['ipsecTxPkts'] = true;
        $this->ipsecTxPkts = $ipsecTxPkts;
        return $this;
    }
    /**
     * @return int
     */
    public function getIpsecRxPkts(): int
    {
        return $this->ipsecRxPkts;
    }
    /**
     * @param int $ipsecRxPkts
     *
     * @return self
     */
    public function setIpsecRxPkts(int $ipsecRxPkts): self
    {
        $this->initialized['ipsecRxPkts'] = true;
        $this->ipsecRxPkts = $ipsecRxPkts;
        return $this;
    }
    /**
     * @return int
     */
    public function getIpsecTxBytes(): int
    {
        return $this->ipsecTxBytes;
    }
    /**
     * @param int $ipsecTxBytes
     *
     * @return self
     */
    public function setIpsecTxBytes(int $ipsecTxBytes): self
    {
        $this->initialized['ipsecTxBytes'] = true;
        $this->ipsecTxBytes = $ipsecTxBytes;
        return $this;
    }
    /**
     * @return int
     */
    public function getIpsecRxBytes(): int
    {
        return $this->ipsecRxBytes;
    }
    /**
     * @param int $ipsecRxBytes
     *
     * @return self
     */
    public function setIpsecRxBytes(int $ipsecRxBytes): self
    {
        $this->initialized['ipsecRxBytes'] = true;
        $this->ipsecRxBytes = $ipsecRxBytes;
        return $this;
    }
    /**
     * @return int
     */
    public function getIpsecTxDropPkts(): int
    {
        return $this->ipsecTxDropPkts;
    }
    /**
     * @param int $ipsecTxDropPkts
     *
     * @return self
     */
    public function setIpsecTxDropPkts(int $ipsecTxDropPkts): self
    {
        $this->initialized['ipsecTxDropPkts'] = true;
        $this->ipsecTxDropPkts = $ipsecTxDropPkts;
        return $this;
    }
    /**
     * @return int
     */
    public function getIpsecRxDropPkts(): int
    {
        return $this->ipsecRxDropPkts;
    }
    /**
     * @param int $ipsecRxDropPkts
     *
     * @return self
     */
    public function setIpsecRxDropPkts(int $ipsecRxDropPkts): self
    {
        $this->initialized['ipsecRxDropPkts'] = true;
        $this->ipsecRxDropPkts = $ipsecRxDropPkts;
        return $this;
    }
    /**
     * @return int
     */
    public function getIpsecTxIdleTime(): int
    {
        return $this->ipsecTxIdleTime;
    }
    /**
     * @param int $ipsecTxIdleTime
     *
     * @return self
     */
    public function setIpsecTxIdleTime(int $ipsecTxIdleTime): self
    {
        $this->initialized['ipsecTxIdleTime'] = true;
        $this->ipsecTxIdleTime = $ipsecTxIdleTime;
        return $this;
    }
    /**
     * @return int
     */
    public function getIpsecRxIdleTime(): int
    {
        return $this->ipsecRxIdleTime;
    }
    /**
     * @param int $ipsecRxIdleTime
     *
     * @return self
     */
    public function setIpsecRxIdleTime(int $ipsecRxIdleTime): self
    {
        $this->initialized['ipsecRxIdleTime'] = true;
        $this->ipsecRxIdleTime = $ipsecRxIdleTime;
        return $this;
    }
    /**
     * @return string
     */
    public function getIpType(): string
    {
        return $this->ipType;
    }
    /**
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
     * @return string
     */
    public function getIpv6Type(): string
    {
        return $this->ipv6Type;
    }
    /**
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
     * @return string
     */
    public function getCellularWanInterface(): string
    {
        return $this->cellularWanInterface;
    }
    /**
     * @param string $cellularWanInterface
     *
     * @return self
     */
    public function setCellularWanInterface(string $cellularWanInterface): self
    {
        $this->initialized['cellularWanInterface'] = true;
        $this->cellularWanInterface = $cellularWanInterface;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularConnectionStatus(): string
    {
        return $this->cellularConnectionStatus;
    }
    /**
     * @param string $cellularConnectionStatus
     *
     * @return self
     */
    public function setCellularConnectionStatus(string $cellularConnectionStatus): self
    {
        $this->initialized['cellularConnectionStatus'] = true;
        $this->cellularConnectionStatus = $cellularConnectionStatus;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularSignalStrength(): string
    {
        return $this->cellularSignalStrength;
    }
    /**
     * @param string $cellularSignalStrength
     *
     * @return self
     */
    public function setCellularSignalStrength(string $cellularSignalStrength): self
    {
        $this->initialized['cellularSignalStrength'] = true;
        $this->cellularSignalStrength = $cellularSignalStrength;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularIMSISIM0(): string
    {
        return $this->cellularIMSISIM0;
    }
    /**
     * @param string $cellularIMSISIM0
     *
     * @return self
     */
    public function setCellularIMSISIM0(string $cellularIMSISIM0): self
    {
        $this->initialized['cellularIMSISIM0'] = true;
        $this->cellularIMSISIM0 = $cellularIMSISIM0;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularIMSISIM1(): string
    {
        return $this->cellularIMSISIM1;
    }
    /**
     * @param string $cellularIMSISIM1
     *
     * @return self
     */
    public function setCellularIMSISIM1(string $cellularIMSISIM1): self
    {
        $this->initialized['cellularIMSISIM1'] = true;
        $this->cellularIMSISIM1 = $cellularIMSISIM1;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularICCIDSIM0(): string
    {
        return $this->cellularICCIDSIM0;
    }
    /**
     * @param string $cellularICCIDSIM0
     *
     * @return self
     */
    public function setCellularICCIDSIM0(string $cellularICCIDSIM0): self
    {
        $this->initialized['cellularICCIDSIM0'] = true;
        $this->cellularICCIDSIM0 = $cellularICCIDSIM0;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularICCIDSIM1(): string
    {
        return $this->cellularICCIDSIM1;
    }
    /**
     * @param string $cellularICCIDSIM1
     *
     * @return self
     */
    public function setCellularICCIDSIM1(string $cellularICCIDSIM1): self
    {
        $this->initialized['cellularICCIDSIM1'] = true;
        $this->cellularICCIDSIM1 = $cellularICCIDSIM1;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularIsSIM0Present(): string
    {
        return $this->cellularIsSIM0Present;
    }
    /**
     * @param string $cellularIsSIM0Present
     *
     * @return self
     */
    public function setCellularIsSIM0Present(string $cellularIsSIM0Present): self
    {
        $this->initialized['cellularIsSIM0Present'] = true;
        $this->cellularIsSIM0Present = $cellularIsSIM0Present;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularIsSIM1Present(): string
    {
        return $this->cellularIsSIM1Present;
    }
    /**
     * @param string $cellularIsSIM1Present
     *
     * @return self
     */
    public function setCellularIsSIM1Present(string $cellularIsSIM1Present): self
    {
        $this->initialized['cellularIsSIM1Present'] = true;
        $this->cellularIsSIM1Present = $cellularIsSIM1Present;
        return $this;
    }
    /**
     * @return int
     */
    public function getCellularTxBytesSIM0(): int
    {
        return $this->cellularTxBytesSIM0;
    }
    /**
     * @param int $cellularTxBytesSIM0
     *
     * @return self
     */
    public function setCellularTxBytesSIM0(int $cellularTxBytesSIM0): self
    {
        $this->initialized['cellularTxBytesSIM0'] = true;
        $this->cellularTxBytesSIM0 = $cellularTxBytesSIM0;
        return $this;
    }
    /**
     * @return int
     */
    public function getCellularTxBytesSIM1(): int
    {
        return $this->cellularTxBytesSIM1;
    }
    /**
     * @param int $cellularTxBytesSIM1
     *
     * @return self
     */
    public function setCellularTxBytesSIM1(int $cellularTxBytesSIM1): self
    {
        $this->initialized['cellularTxBytesSIM1'] = true;
        $this->cellularTxBytesSIM1 = $cellularTxBytesSIM1;
        return $this;
    }
    /**
     * @return int
     */
    public function getCellularRxBytesSIM0(): int
    {
        return $this->cellularRxBytesSIM0;
    }
    /**
     * @param int $cellularRxBytesSIM0
     *
     * @return self
     */
    public function setCellularRxBytesSIM0(int $cellularRxBytesSIM0): self
    {
        $this->initialized['cellularRxBytesSIM0'] = true;
        $this->cellularRxBytesSIM0 = $cellularRxBytesSIM0;
        return $this;
    }
    /**
     * @return int
     */
    public function getCellularRxBytesSIM1(): int
    {
        return $this->cellularRxBytesSIM1;
    }
    /**
     * @param int $cellularRxBytesSIM1
     *
     * @return self
     */
    public function setCellularRxBytesSIM1(int $cellularRxBytesSIM1): self
    {
        $this->initialized['cellularRxBytesSIM1'] = true;
        $this->cellularRxBytesSIM1 = $cellularRxBytesSIM1;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularActiveSim(): string
    {
        return $this->cellularActiveSim;
    }
    /**
     * @param string $cellularActiveSim
     *
     * @return self
     */
    public function setCellularActiveSim(string $cellularActiveSim): self
    {
        $this->initialized['cellularActiveSim'] = true;
        $this->cellularActiveSim = $cellularActiveSim;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularIPaddress(): string
    {
        return $this->cellularIPaddress;
    }
    /**
     * @param string $cellularIPaddress
     *
     * @return self
     */
    public function setCellularIPaddress(string $cellularIPaddress): self
    {
        $this->initialized['cellularIPaddress'] = true;
        $this->cellularIPaddress = $cellularIPaddress;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularSubnetMask(): string
    {
        return $this->cellularSubnetMask;
    }
    /**
     * @param string $cellularSubnetMask
     *
     * @return self
     */
    public function setCellularSubnetMask(string $cellularSubnetMask): self
    {
        $this->initialized['cellularSubnetMask'] = true;
        $this->cellularSubnetMask = $cellularSubnetMask;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularDefaultGateway(): string
    {
        return $this->cellularDefaultGateway;
    }
    /**
     * @param string $cellularDefaultGateway
     *
     * @return self
     */
    public function setCellularDefaultGateway(string $cellularDefaultGateway): self
    {
        $this->initialized['cellularDefaultGateway'] = true;
        $this->cellularDefaultGateway = $cellularDefaultGateway;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularOperator(): string
    {
        return $this->cellularOperator;
    }
    /**
     * @param string $cellularOperator
     *
     * @return self
     */
    public function setCellularOperator(string $cellularOperator): self
    {
        $this->initialized['cellularOperator'] = true;
        $this->cellularOperator = $cellularOperator;
        return $this;
    }
    /**
     * @return int
     */
    public function getCellular3G4GChannel(): int
    {
        return $this->cellular3G4GChannel;
    }
    /**
     * @param int $cellular3G4GChannel
     *
     * @return self
     */
    public function setCellular3G4GChannel(int $cellular3G4GChannel): self
    {
        $this->initialized['cellular3G4GChannel'] = true;
        $this->cellular3G4GChannel = $cellular3G4GChannel;
        return $this;
    }
    /**
     * @return string
     */
    public function getCellularCountry(): string
    {
        return $this->cellularCountry;
    }
    /**
     * @param string $cellularCountry
     *
     * @return self
     */
    public function setCellularCountry(string $cellularCountry): self
    {
        $this->initialized['cellularCountry'] = true;
        $this->cellularCountry = $cellularCountry;
        return $this;
    }
    /**
     * @return int
     */
    public function getCellularRadioUptime(): int
    {
        return $this->cellularRadioUptime;
    }
    /**
     * @param int $cellularRadioUptime
     *
     * @return self
     */
    public function setCellularRadioUptime(int $cellularRadioUptime): self
    {
        $this->initialized['cellularRadioUptime'] = true;
        $this->cellularRadioUptime = $cellularRadioUptime;
        return $this;
    }
    /**
     * @return list<ApQueryCreateApQueryCellularGpsHistoryItem>
     */
    public function getCellularGpsHistory(): array
    {
        return $this->cellularGpsHistory;
    }
    /**
     * @param list<ApQueryCreateApQueryCellularGpsHistoryItem> $cellularGpsHistory
     *
     * @return self
     */
    public function setCellularGpsHistory(array $cellularGpsHistory): self
    {
        $this->initialized['cellularGpsHistory'] = true;
        $this->cellularGpsHistory = $cellularGpsHistory;
        return $this;
    }
    /**
     * @return int
     */
    public function getMedianTxRadioMCSRate24G(): int
    {
        return $this->medianTxRadioMCSRate24G;
    }
    /**
     * @param int $medianTxRadioMCSRate24G
     *
     * @return self
     */
    public function setMedianTxRadioMCSRate24G(int $medianTxRadioMCSRate24G): self
    {
        $this->initialized['medianTxRadioMCSRate24G'] = true;
        $this->medianTxRadioMCSRate24G = $medianTxRadioMCSRate24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getMedianTxRadioMCSRate50G(): int
    {
        return $this->medianTxRadioMCSRate50G;
    }
    /**
     * @param int $medianTxRadioMCSRate50G
     *
     * @return self
     */
    public function setMedianTxRadioMCSRate50G(int $medianTxRadioMCSRate50G): self
    {
        $this->initialized['medianTxRadioMCSRate50G'] = true;
        $this->medianTxRadioMCSRate50G = $medianTxRadioMCSRate50G;
        return $this;
    }
    /**
     * @return int
     */
    public function getMedianTxRadioMCSRate6G(): int
    {
        return $this->medianTxRadioMCSRate6G;
    }
    /**
     * @param int $medianTxRadioMCSRate6G
     *
     * @return self
     */
    public function setMedianTxRadioMCSRate6G(int $medianTxRadioMCSRate6G): self
    {
        $this->initialized['medianTxRadioMCSRate6G'] = true;
        $this->medianTxRadioMCSRate6G = $medianTxRadioMCSRate6G;
        return $this;
    }
    /**
     * @return int
     */
    public function getMedianRxRadioMCSRate24G(): int
    {
        return $this->medianRxRadioMCSRate24G;
    }
    /**
     * @param int $medianRxRadioMCSRate24G
     *
     * @return self
     */
    public function setMedianRxRadioMCSRate24G(int $medianRxRadioMCSRate24G): self
    {
        $this->initialized['medianRxRadioMCSRate24G'] = true;
        $this->medianRxRadioMCSRate24G = $medianRxRadioMCSRate24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getMedianRxRadioMCSRate50G(): int
    {
        return $this->medianRxRadioMCSRate50G;
    }
    /**
     * @param int $medianRxRadioMCSRate50G
     *
     * @return self
     */
    public function setMedianRxRadioMCSRate50G(int $medianRxRadioMCSRate50G): self
    {
        $this->initialized['medianRxRadioMCSRate50G'] = true;
        $this->medianRxRadioMCSRate50G = $medianRxRadioMCSRate50G;
        return $this;
    }
    /**
     * @return int
     */
    public function getMedianRxRadioMCSRate6G(): int
    {
        return $this->medianRxRadioMCSRate6G;
    }
    /**
     * @param int $medianRxRadioMCSRate6G
     *
     * @return self
     */
    public function setMedianRxRadioMCSRate6G(int $medianRxRadioMCSRate6G): self
    {
        $this->initialized['medianRxRadioMCSRate6G'] = true;
        $this->medianRxRadioMCSRate6G = $medianRxRadioMCSRate6G;
        return $this;
    }
    /**
     * @return bool
     */
    public function getMonitoringEnabled(): bool
    {
        return $this->monitoringEnabled;
    }
    /**
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
     * @return int
     */
    public function getTxPowerOffset24G(): int
    {
        return $this->txPowerOffset24G;
    }
    /**
     * @param int $txPowerOffset24G
     *
     * @return self
     */
    public function setTxPowerOffset24G(int $txPowerOffset24G): self
    {
        $this->initialized['txPowerOffset24G'] = true;
        $this->txPowerOffset24G = $txPowerOffset24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getTxPowerOffset5G(): int
    {
        return $this->txPowerOffset5G;
    }
    /**
     * @param int $txPowerOffset5G
     *
     * @return self
     */
    public function setTxPowerOffset5G(int $txPowerOffset5G): self
    {
        $this->initialized['txPowerOffset5G'] = true;
        $this->txPowerOffset5G = $txPowerOffset5G;
        return $this;
    }
    /**
     * @return int
     */
    public function getTxPowerOffset6G(): int
    {
        return $this->txPowerOffset6G;
    }
    /**
     * @param int $txPowerOffset6G
     *
     * @return self
     */
    public function setTxPowerOffset6G(int $txPowerOffset6G): self
    {
        $this->initialized['txPowerOffset6G'] = true;
        $this->txPowerOffset6G = $txPowerOffset6G;
        return $this;
    }
    /**
     * @return int
     */
    public function getRxDesense24G(): int
    {
        return $this->rxDesense24G;
    }
    /**
     * @param int $rxDesense24G
     *
     * @return self
     */
    public function setRxDesense24G(int $rxDesense24G): self
    {
        $this->initialized['rxDesense24G'] = true;
        $this->rxDesense24G = $rxDesense24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getRxDesense5G(): int
    {
        return $this->rxDesense5G;
    }
    /**
     * @param int $rxDesense5G
     *
     * @return self
     */
    public function setRxDesense5G(int $rxDesense5G): self
    {
        $this->initialized['rxDesense5G'] = true;
        $this->rxDesense5G = $rxDesense5G;
        return $this;
    }
    /**
     * @return int
     */
    public function getRxDesense6G(): int
    {
        return $this->rxDesense6G;
    }
    /**
     * @param int $rxDesense6G
     *
     * @return self
     */
    public function setRxDesense6G(int $rxDesense6G): self
    {
        $this->initialized['rxDesense6G'] = true;
        $this->rxDesense6G = $rxDesense6G;
        return $this;
    }
    /**
     * @return int
     */
    public function getCumulativeTx24G(): int
    {
        return $this->cumulativeTx24G;
    }
    /**
     * @param int $cumulativeTx24G
     *
     * @return self
     */
    public function setCumulativeTx24G(int $cumulativeTx24G): self
    {
        $this->initialized['cumulativeTx24G'] = true;
        $this->cumulativeTx24G = $cumulativeTx24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getCumulativeRx24G(): int
    {
        return $this->cumulativeRx24G;
    }
    /**
     * @param int $cumulativeRx24G
     *
     * @return self
     */
    public function setCumulativeRx24G(int $cumulativeRx24G): self
    {
        $this->initialized['cumulativeRx24G'] = true;
        $this->cumulativeRx24G = $cumulativeRx24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getCumulativeTxRx24G(): int
    {
        return $this->cumulativeTxRx24G;
    }
    /**
     * @param int $cumulativeTxRx24G
     *
     * @return self
     */
    public function setCumulativeTxRx24G(int $cumulativeTxRx24G): self
    {
        $this->initialized['cumulativeTxRx24G'] = true;
        $this->cumulativeTxRx24G = $cumulativeTxRx24G;
        return $this;
    }
    /**
     * @return int
     */
    public function getCumulativeTx5G(): int
    {
        return $this->cumulativeTx5G;
    }
    /**
     * @param int $cumulativeTx5G
     *
     * @return self
     */
    public function setCumulativeTx5G(int $cumulativeTx5G): self
    {
        $this->initialized['cumulativeTx5G'] = true;
        $this->cumulativeTx5G = $cumulativeTx5G;
        return $this;
    }
    /**
     * @return int
     */
    public function getCumulativeRx5G(): int
    {
        return $this->cumulativeRx5G;
    }
    /**
     * @param int $cumulativeRx5G
     *
     * @return self
     */
    public function setCumulativeRx5G(int $cumulativeRx5G): self
    {
        $this->initialized['cumulativeRx5G'] = true;
        $this->cumulativeRx5G = $cumulativeRx5G;
        return $this;
    }
    /**
     * @return int
     */
    public function getCumulativeTxRx5G(): int
    {
        return $this->cumulativeTxRx5G;
    }
    /**
     * @param int $cumulativeTxRx5G
     *
     * @return self
     */
    public function setCumulativeTxRx5G(int $cumulativeTxRx5G): self
    {
        $this->initialized['cumulativeTxRx5G'] = true;
        $this->cumulativeTxRx5G = $cumulativeTxRx5G;
        return $this;
    }
    /**
     * @return int
     */
    public function getCumulativeTx6G(): int
    {
        return $this->cumulativeTx6G;
    }
    /**
     * @param int $cumulativeTx6G
     *
     * @return self
     */
    public function setCumulativeTx6G(int $cumulativeTx6G): self
    {
        $this->initialized['cumulativeTx6G'] = true;
        $this->cumulativeTx6G = $cumulativeTx6G;
        return $this;
    }
    /**
     * @return int
     */
    public function getCumulativeRx6G(): int
    {
        return $this->cumulativeRx6G;
    }
    /**
     * @param int $cumulativeRx6G
     *
     * @return self
     */
    public function setCumulativeRx6G(int $cumulativeRx6G): self
    {
        $this->initialized['cumulativeRx6G'] = true;
        $this->cumulativeRx6G = $cumulativeRx6G;
        return $this;
    }
    /**
     * @return int
     */
    public function getCumulativeTxRx6G(): int
    {
        return $this->cumulativeTxRx6G;
    }
    /**
     * @param int $cumulativeTxRx6G
     *
     * @return self
     */
    public function setCumulativeTxRx6G(int $cumulativeTxRx6G): self
    {
        $this->initialized['cumulativeTxRx6G'] = true;
        $this->cumulativeTxRx6G = $cumulativeTxRx6G;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsDual5gMode(): bool
    {
        return $this->isDual5gMode;
    }
    /**
     * @param bool $isDual5gMode
     *
     * @return self
     */
    public function setIsDual5gMode(bool $isDual5gMode): self
    {
        $this->initialized['isDual5gMode'] = true;
        $this->isDual5gMode = $isDual5gMode;
        return $this;
    }
}