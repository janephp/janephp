<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApQueryCreateApQuery
{
    /**
     * @var int
     */
    public int $registrationTime;
    /**
     * @var string
     */
    public string $poePortStatus;
    /**
     * @var string
     */
    public string $indoorMapId;
    /**
     * @var string
     */
    public string $channel24G;
    /**
     * @var int
     */
    public int $channel24gValue;
    /**
     * @var bool
     */
    public bool $configOverride;
    /**
     * @var string
     */
    public string $deviceName;
    /**
     * @var bool
     */
    public bool $enabledBonjourGateway;
    /**
     * @var int
     */
    public int $numClients24G;
    /**
     * @var string
     */
    public string $dataBladeName;
    /**
     * @var int
     */
    public int $retry24G;
    /**
     * @var int
     */
    public int $airtime24G;
    /**
     * @var int
     */
    public int $noise5G;
    /**
     * @var int
     */
    public int $noise6G;
    /**
     * @var string
     */
    public string $model;
    /**
     * @var int
     */
    public int $numClients;
    /**
     * @var int
     */
    public int $capacity24G;
    /**
     * @var string
     */
    public string $firmwareVersion;
    /**
     * @var string
     */
    public string $provisionMethod;
    /**
     * @var int
     */
    public int $latency24G;
    /**
     * @var int
     */
    public int $retry5G;
    /**
     * @var int
     */
    public int $retry6G;
    /**
     * @var string
     */
    public string $ip;
    /**
     * @var string
     */
    public string $apMac;
    /**
     * @var int
     */
    public int $noise24G;
    /**
     * @var int
     */
    public int $lastSeen;
    /**
     * @var string
     */
    public string $configurationStatus;
    /**
     * @var int
     */
    public int $airtime5G;
    /**
     * @var int
     */
    public int $airtime6G;
    /**
     * @var int
     */
    public int $alerts;
    /**
     * @var string
     */
    public string $lbsStatus;
    /**
     * @var string
     */
    public string $status;
    /**
     * @var int
     */
    public int $numClients5G;
    /**
     * @var int
     */
    public int $numClients6G;
    /**
     * @var string
     */
    public string $ipv6Address;
    /**
     * @var int
     */
    public int $capacity50G;
    /**
     * @var int
     */
    public int $capacity6G;
    /**
     * @var string
     */
    public string $wlanGroup24Name;
    /**
     * @var float
     */
    public float $connectionFailure;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var int
     */
    public int $capacity;
    /**
     * @var string
     */
    public string $meshRole;
    /**
     * @var string
     */
    public string $channel5G;
    /**
     * @var int
     */
    public int $channel50gValue;
    /**
     * @var string
     */
    public string $channel6G;
    /**
     * @var int
     */
    public int $channel6gValue;
    /**
     * @var int
     */
    public int $managementVlan;
    /**
     * @var string
     */
    public string $wlanGroup6gName;
    /**
     * @var string
     */
    public string $wlanGroup50Name;
    /**
     * @var string
     */
    public string $wlanGroup24Id;
    /**
     * @var string
     */
    public string $controlBladeName;
    /**
     * @var string
     */
    public string $zoneName;
    /**
     * The total data size transmitted in a period of time
     *
     * @var int
     */
    public int $tx;
    /**
     * The total data size received in a period of time
     *
     * @var int
     */
    public int $rx;
    /**
     * The total data size transmitted and received in a period of time
     *
     * @var int
     */
    public int $txRx;
    /**
     * The total data size transmitted in a period of time
     *
     * @var int
     */
    public int $tx24G;
    /**
     * The total data size transmitted in a period of time
     *
     * @var int
     */
    public int $tx50G;
    /**
     * @var int
     */
    public int $tx6G;
    /**
     * The total data size received in a period of time
     *
     * @var int
     */
    public int $rx24G;
    /**
     * The total data size received in a period of time
     *
     * @var int
     */
    public int $rx50G;
    /**
     * @var int
     */
    public int $rx6G;
    /**
     * The total data size transmitted and received in a period of time
     *
     * @var int
     */
    public int $txRx24G;
    /**
     * The total data size transmitted and received in a period of time
     *
     * @var int
     */
    public int $txRx50G;
    /**
     * @var int
     */
    public int $txRx6G;
    /**
     * @var string
     */
    public string $meshMode;
    /**
     * @var string
     */
    public string $extPort;
    /**
     * @var string
     */
    public string $administrativeState;
    /**
     * @var string
     */
    public string $apGroupName;
    /**
     * @var int
     */
    public int $latency50G;
    /**
     * @var int
     */
    public int $latency6G;
    /**
     * @var ApQueryCreateApQueryIndoorMapXy
     */
    public ApQueryCreateApQueryIndoorMapXy $indoorMapXy;
    /**
     * @var string
     */
    public string $apGroupId;
    /**
     * @var string
     */
    public string $extIp;
    /**
     * @var int
     */
    public int $airtime;
    /**
     * @var string
     */
    public string $provisionStage;
    /**
     * @var string
     */
    public string $indoorMapName;
    /**
     * @var string
     */
    public string $indoorMapLocation;
    /**
     * @var string
     */
    public string $deviceGps;
    /**
     * @var string
     */
    public string $serial;
    /**
     * @var string
     */
    public string $location;
    /**
     * @var string
     */
    public string $wlanGroup50Id;
    /**
     * @var string
     */
    public string $wlanGroup6gId;
    /**
     * @var string
     */
    public string $registrationState;
    /**
     * @var string
     */
    public string $zoneId;
    /**
     * @var string
     */
    public string $zoneFirmwareVersion;
    /**
     * @var string
     */
    public string $zoneAffinityProfileName;
    /**
     * @var string
     */
    public string $connectionStatus;
    /**
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $domainName;
    /**
     * @var string
     */
    public string $partnerDomainId;
    /**
     * @var string
     */
    public string $dpIp;
    /**
     * @var string
     */
    public string $controlBladeId;
    /**
     * @var bool
     */
    public bool $isCriticalAp;
    /**
     * @var int
     */
    public int $crashDump;
    /**
     * @var bool
     */
    public bool $cableModemSupported;
    /**
     * @var bool
     */
    public bool $cableModemResetSupported;
    /**
     * @var string
     */
    public string $swapInMac;
    /**
     * @var string
     */
    public string $swapOutMac;
    /**
     * @var string
     */
    public string $packetCaptureState;
    /**
     * @var bool
     */
    public bool $isOverallHealthStatusFlagged;
    /**
     * @var bool
     */
    public bool $isLatency24GFlagged;
    /**
     * @var bool
     */
    public bool $isCapacity24GFlagged;
    /**
     * @var bool
     */
    public bool $isConnectionFailure24GFlagged;
    /**
     * @var bool
     */
    public bool $isLatency50GFlagged;
    /**
     * @var bool
     */
    public bool $isCapacity50GFlagged;
    /**
     * @var bool
     */
    public bool $isConnectionFailure50GFlagged;
    /**
     * @var bool
     */
    public bool $isLatency6GFlagged;
    /**
     * @var bool
     */
    public bool $isCapacity6GFlagged;
    /**
     * @var bool
     */
    public bool $isConnectionFailure6GFlagged;
    /**
     * @var bool
     */
    public bool $isConnectionTotalCountFlagged;
    /**
     * @var bool
     */
    public bool $isConnectionFailureFlagged;
    /**
     * @var bool
     */
    public bool $isAirtimeUtilization24GFlagged;
    /**
     * @var bool
     */
    public bool $isAirtimeUtilization50GFlagged;
    /**
     * @var bool
     */
    public bool $isAirtimeUtilization6GFlagged;
    /**
     * @var int
     */
    public int $eirp24G;
    /**
     * @var int
     */
    public int $eirp50G;
    /**
     * @var int
     */
    public int $eirp6G;
    /**
     * @var bool
     */
    public bool $supportFips;
    /**
     * @var bool
     */
    public bool $fipsEnabled;
    /**
     * @var int
     */
    public int $uptime;
    /**
     * @var int
     */
    public int $ipsecSessionTime;
    /**
     * @var int
     */
    public int $ipsecTxPkts;
    /**
     * @var int
     */
    public int $ipsecRxPkts;
    /**
     * @var int
     */
    public int $ipsecTxBytes;
    /**
     * @var int
     */
    public int $ipsecRxBytes;
    /**
     * @var int
     */
    public int $ipsecTxDropPkts;
    /**
     * @var int
     */
    public int $ipsecRxDropPkts;
    /**
     * @var int
     */
    public int $ipsecTxIdleTime;
    /**
     * @var int
     */
    public int $ipsecRxIdleTime;
    /**
     * @var string
     */
    public string $ipType;
    /**
     * @var string
     */
    public string $ipv6Type;
    /**
     * @var string
     */
    public string $cellularWanInterface;
    /**
     * @var string
     */
    public string $cellularConnectionStatus;
    /**
     * @var string
     */
    public string $cellularSignalStrength;
    /**
     * @var string
     */
    public string $cellularIMSISIM0;
    /**
     * @var string
     */
    public string $cellularIMSISIM1;
    /**
     * @var string
     */
    public string $cellularICCIDSIM0;
    /**
     * @var string
     */
    public string $cellularICCIDSIM1;
    /**
     * @var string
     */
    public string $cellularIsSIM0Present;
    /**
     * @var string
     */
    public string $cellularIsSIM1Present;
    /**
     * @var int
     */
    public int $cellularTxBytesSIM0;
    /**
     * @var int
     */
    public int $cellularTxBytesSIM1;
    /**
     * @var int
     */
    public int $cellularRxBytesSIM0;
    /**
     * @var int
     */
    public int $cellularRxBytesSIM1;
    /**
     * @var string
     */
    public string $cellularActiveSim;
    /**
     * @var string
     */
    public string $cellularIPaddress;
    /**
     * @var string
     */
    public string $cellularSubnetMask;
    /**
     * @var string
     */
    public string $cellularDefaultGateway;
    /**
     * @var string
     */
    public string $cellularOperator;
    /**
     * @var int
     */
    public int $cellular3G4GChannel;
    /**
     * @var string
     */
    public string $cellularCountry;
    /**
     * @var int
     */
    public int $cellularRadioUptime;
    /**
     * @var list<ApQueryCreateApQueryCellularGpsHistoryItem>
     */
    public array $cellularGpsHistory;
    /**
     * @var int
     */
    public int $medianTxRadioMCSRate24G;
    /**
     * @var int
     */
    public int $medianTxRadioMCSRate50G;
    /**
     * @var int
     */
    public int $medianTxRadioMCSRate6G;
    /**
     * @var int
     */
    public int $medianRxRadioMCSRate24G;
    /**
     * @var int
     */
    public int $medianRxRadioMCSRate50G;
    /**
     * @var int
     */
    public int $medianRxRadioMCSRate6G;
    /**
     * @var bool
     */
    public bool $monitoringEnabled;
    /**
     * @var int
     */
    public int $txPowerOffset24G;
    /**
     * @var int
     */
    public int $txPowerOffset5G;
    /**
     * @var int
     */
    public int $txPowerOffset6G;
    /**
     * @var int
     */
    public int $rxDesense24G;
    /**
     * @var int
     */
    public int $rxDesense5G;
    /**
     * @var int
     */
    public int $rxDesense6G;
    /**
     * @var int
     */
    public int $cumulativeTx24G;
    /**
     * @var int
     */
    public int $cumulativeRx24G;
    /**
     * @var int
     */
    public int $cumulativeTxRx24G;
    /**
     * @var int
     */
    public int $cumulativeTx5G;
    /**
     * @var int
     */
    public int $cumulativeRx5G;
    /**
     * @var int
     */
    public int $cumulativeTxRx5G;
    /**
     * @var int
     */
    public int $cumulativeTx6G;
    /**
     * @var int
     */
    public int $cumulativeRx6G;
    /**
     * @var int
     */
    public int $cumulativeTxRx6G;
    /**
     * @var bool
     */
    public bool $isDual5gMode;
}