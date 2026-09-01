<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApgroupApGroupConfiguration
{
    /**
     * Identifier of the AP group
     *
     * @var string
     */
    public string $id;
    /**
     * Identifier of the zone to which the AP group belongs
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Name of the AP group
     *
     * @var string
     */
    public string $name;
    /**
     * Description of the AP group
     *
     * @var string
     */
    public string $description;
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
     * @var CommonOverrideGenericRef
     */
    public CommonOverrideGenericRef $locationBasedService;
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
     * Members of the AP group
     *
     * @var list<ApgroupApGroupMember>
     */
    public array $members;
    /**
     * channel evaluation Interval of the ap group
     *
     * @var int
     */
    public int $channelEvaluationInterval = 600;
    /**
     * @var CommonApManagementVlan
     */
    public CommonApManagementVlan $apMgmtVlan;
    /**
     * Venue Code
     *
     * @var string
     */
    public string $awsVenue;
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
     * Set AP group as monitoring group.
     *
     * @var bool
     */
    public bool $monitoringEnabled;
    /**
     * Override Rogue AP policy ID (only for monitoring group).
     *
     * @var string
     */
    public string $apGroupRoguePolicy;
    /**
     * Set rogue scan frequency (only for monitoring group).
     *
     * @var string
     */
    public string $rogueScanFreq;
    /**
     * @var bool
     */
    public bool $paloAltoFirewallProfileOverrided;
    /**
     * @var string
     */
    public string $paloAltoFirewallProfileId;
    /**
     * Ruckus GRE tunnel broadcast packet forwarding
     *
     * @var bool
     */
    public bool $rksGreForwardBroadcast;
    /**
     * BSS coloring mechanism enabled.
     *
     * @var bool
     */
    public bool $bssColoringEnable;
    /**
     * @var RadioRadioConfigResponse
     */
    public RadioRadioConfigResponse $radioConfig;
}