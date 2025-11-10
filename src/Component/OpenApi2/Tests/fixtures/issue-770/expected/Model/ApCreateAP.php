<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApCreateAP
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
     * Identifier of the AP group to which the AP belongs. If the AP belongs to the default AP group, this property is not needed.
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
    protected $description;
    /**
     * Administrative state of the AP. A locked AP will not provide any WLAN services.
     *
     * @var string
     */
    protected $administrativeState = 'Unlocked';
    /**
     * Provision checklist of the AP. This field indicates the steps that have been completed in the AP provisioning process.
     *
     * @var string
     */
    protected $provisionChecklist;
    /**
     * Venue Code
     *
     * @var string
     */
    protected $awsVenue;
    /**
     * Test Speed is enabled or disabled
     *
     * @var bool
     */
    protected $testSpeedEnabled;
    /**
     * Turn on/off BSS Coloring mechanism.
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
     * Identifier of the AP group to which the AP belongs. If the AP belongs to the default AP group, this property is not needed.
     *
     * @return string
     */
    public function getApGroupId(): string
    {
        return $this->apGroupId;
    }
    /**
     * Identifier of the AP group to which the AP belongs. If the AP belongs to the default AP group, this property is not needed.
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
     * Turn on/off BSS Coloring mechanism.
     *
     * @return bool
     */
    public function getBssColoringEnable(): bool
    {
        return $this->bssColoringEnable;
    }
    /**
     * Turn on/off BSS Coloring mechanism.
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