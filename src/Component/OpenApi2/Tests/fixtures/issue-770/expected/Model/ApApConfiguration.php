<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApApConfiguration
{
    /**
     * @var string
     */
    public string $mac;
    /**
     * Identifier of the AP group to which the AP belongs
     *
     * @var string
     */
    public string $zoneId;
    /**
     * @var string
     */
    public string $apGroupId;
    /**
     * Serial number of the AP
     *
     * @var string
     */
    public string $serial;
    /**
     * Model name of the AP
     *
     * @var string
     */
    public string $model;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * GPS Source of the AP
     *
     * @var string
     */
    public string $gpsSource;
    /**
     * @var float
     */
    public float $latitude;
    /**
     * @var float
     */
    public float $longitude;
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
     * Provision checklist of the AP. This field indicates the steps that have been completed in the AP provisioning process.
     *
     * @var string
     */
    public string $provisionChecklist;
    /**
     * Administrative state of the AP. A locked AP will not provide any WLAN services.
     *
     * @var string
     */
    public string $administrativeState = 'Unlocked';
    /**
     * @var ApLogin
     */
    public ApLogin $login;
    /**
     * @var ApSyslog
     */
    public ApSyslog $syslog;
    /**
     * @var RadioRadioConfigResponseAp
     */
    public RadioRadioConfigResponseAp $radioConfig;
    /**
     * @var ApNetwork
     */
    public ApNetwork $network;
    /**
     * @var ApNetworkIpv6
     */
    public ApNetworkIpv6 $networkIpv6;
    /**
     * @var CommonOverrideSmartMonitor
     */
    public CommonOverrideSmartMonitor $smartMonitor;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $bonjourGateway;
    /**
     * @var CommonOverrideClientAdmissionControl
     */
    public CommonOverrideClientAdmissionControl $clientAdmissionControl24;
    /**
     * @var CommonOverrideClientAdmissionControl
     */
    public CommonOverrideClientAdmissionControl $clientAdmissionControl50;
    /**
     * @var ZoneApSnmpOptions
     */
    public ZoneApSnmpOptions $snmpAgent;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $venueProfile;
    /**
     * channel evaluation Interval of the AP
     *
     * @var int
     */
    public int $channelEvaluationInterval = 600;
    /**
     * @var CommonApManagementVlan
     */
    public CommonApManagementVlan $apMgmtVlan;
    /**
     * @var ApmodelApModel
     */
    public ApmodelApModel $specific;
    /**
     * @var ApMesh
     */
    public ApMesh $meshOptions;
    /**
     * @var CommonRecoverySsid
     */
    public CommonRecoverySsid $recoverySsid;
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
     * @var int
     */
    public int $rogueApJammingThreshold;
    /**
     * @var bool
     */
    public bool $directedMulticastFromWiredClientEnabled;
    /**
     * @var bool
     */
    public bool $directedMulticastFromWirelessClientEnabled;
    /**
     * @var bool
     */
    public bool $directedMulticastFromNetworkEnabled;
    /**
     * LTE band lock channels options
     *
     * @var list<CommonLteBandLockChannel>
     */
    public array $lteBandLockChannels;
    /**
     * Venue Code
     *
     * @var string
     */
    public string $awsVenue;
    /**
     * Ruckus GRE tunnel broadcast packet forwarding
     *
     * @var bool
     */
    public bool $rksGreForwardBroadcast;
    /**
     * Test Speed is enabled or disabled
     *
     * @var bool
     */
    public bool $testSpeedEnabled;
    /**
     * @var string
     */
    public string $swapInMac;
    /**
     * @var string
     */
    public string $swapOutMac;
    /**
     * BSS Coloring mechanism enabled.
     *
     * @var bool
     */
    public bool $bssColoringEnable;
}