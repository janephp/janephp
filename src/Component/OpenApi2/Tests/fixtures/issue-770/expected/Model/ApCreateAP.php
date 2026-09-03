<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApCreateAP
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
     * Identifier of the AP group to which the AP belongs. If the AP belongs to the default AP group, this property is not needed.
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
    public string $description;
    /**
     * Administrative state of the AP. A locked AP will not provide any WLAN services.
     *
     * @var string
     */
    public string $administrativeState = 'Unlocked';
    /**
     * Provision checklist of the AP. This field indicates the steps that have been completed in the AP provisioning process.
     *
     * @var string
     */
    public string $provisionChecklist;
    /**
     * Venue Code
     *
     * @var string
     */
    public string $awsVenue;
    /**
     * Test Speed is enabled or disabled
     *
     * @var bool
     */
    public bool $testSpeedEnabled;
    /**
     * Turn on/off BSS Coloring mechanism.
     *
     * @var bool
     */
    public bool $bssColoringEnable;
}