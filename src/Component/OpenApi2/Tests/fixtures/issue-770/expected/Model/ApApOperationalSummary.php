<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApApOperationalSummary
{
    /**
     * @var string
     */
    public string $mac;
    /**
     * Identifier of the zone to which the AP belongs
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Identifier of the AP group to which the AP belongs
     *
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
     * @var string
     */
    public string $version;
    /**
     * Country code of the AP
     *
     * @var string
     */
    public string $countryCode;
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
     * Identifier of the control plane to which the AP is currently connected
     *
     * @var string
     */
    public string $cpId;
    /**
     * Identifier of the data plane to which the AP is currently connected
     *
     * @var string
     */
    public string $dpId;
    /**
     * 2.4GHz radio channel number that the AP is currently using
     *
     * @var string
     */
    public string $wifi24Channel;
    /**
     * 5GHZ radio channel number that the AP is currently using
     *
     * @var string
     */
    public string $wifi50Channel;
    /**
     * @var string
     */
    public string $wifi6gChannel;
    /**
     * Mesh role of the AP
     *
     * @var string
     */
    public string $meshRole;
    /**
     * Number of mesh hops of the AP. This is only applicable to mesh APs.
     *
     * @var int
     */
    public int $meshHop;
    /**
     * Indicates how the AP's IP address was obtained. The AP's IP address can be statically or dynamically assigned or kept unchanged.
     *
     * @var string
     */
    public string $ipType;
    /**
     * IP address of the AP
     *
     * @var string
     */
    public string $ip;
    /**
     * Indicates how the AP's IP address was obtained. The AP's IP address can be statically or dynamically assigned or kept unchanged.
     *
     * @var string
     */
    public string $ipv6Type;
    /**
     * IP address of the AP
     *
     * @var string
     */
    public string $ipv6;
    /**
     * External IP address of the AP. This is only applicable when the AP is behind a NAT server.
     *
     * @var string
     */
    public string $externalIp;
    /**
     * External port number of the AP. This is only applicable when the AP is behind a NAT server.
     *
     * @var int
     */
    public int $externalPort;
    /**
     * State of the AP configuration.
     *
     * @var string
     */
    public string $configState;
    /**
     * Connection state of the AP (value: 'Discovery','Connect','Rebooting','Disconnect','Provisioned')
     *
     * @var string
     */
    public string $connectionState;
    /**
     * Registration state of the AP
     *
     * @var string
     */
    public string $registrationState;
    /**
     * Administrative state of the AP. A locked AP will not provide any WLAN services.
     *
     * @var string
     */
    public string $administrativeState;
    /**
     * Provisioning method of the AP. Discovered indicates that the AP contacted the controller using discovery and the AP did not have pre-existing record on the controller. Preprovision indicates that the AP was provisioned to the controller before AP made the first contact. Swap indicates that the AP was provisioned to be a replacement of an existing AP.
     *
     * @var string
     */
    public string $provisionMethod;
    /**
     * Provisioning stage of the AP. This indicates the stage at which the AP is at in the provisioning process. (value
     *
     * @var string
     */
    public string $provisionStage;
    /**
     * Indicates critical APs. Critical AP are APs that were tagged by the controller based on predefined rules.
     *
     * @var bool
     */
    public bool $isCriticalAP;
    /**
     * Timestamp when the AP was approved by the controller
     *
     * @var int
     */
    public int $approvedTime;
    /**
     * Timestamp of the last successful communication with the AP
     *
     * @var int
     */
    public int $lastSeenTime;
    /**
     * Uptime of the AP since it was last rebooted (unit:second)
     *
     * @var int
     */
    public int $uptime;
    /**
     * Number of clients on the AP
     *
     * @var int
     */
    public int $clientCount;
    /**
     * Management vlan on the AP
     *
     * @var int
     */
    public int $managementVlan;
}