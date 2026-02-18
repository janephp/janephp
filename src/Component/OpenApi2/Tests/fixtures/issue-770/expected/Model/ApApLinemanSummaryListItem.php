<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApApLinemanSummaryListItem
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
     * Name of the AP
     *
     * @var string
     */
    protected $name;
    /**
     * @var float
     */
    protected $latitude;
    /**
     * @var float
     */
    protected $longitude;
    /**
     * State of the AP configuration
     *
     * @var string
     */
    protected $configState;
    /**
     * @var string
     */
    protected $location;
    /**
     * @var ApAlarmSummary
     */
    protected $alarms;
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
     * Name of the AP
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the AP
     *
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
     * State of the AP configuration
     *
     * @return string
     */
    public function getConfigState(): string
    {
        return $this->configState;
    }
    /**
     * State of the AP configuration
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
     * @return ApAlarmSummary
     */
    public function getAlarms(): ApAlarmSummary
    {
        return $this->alarms;
    }
    /**
     * @param ApAlarmSummary $alarms
     *
     * @return self
     */
    public function setAlarms(ApAlarmSummary $alarms): self
    {
        $this->initialized['alarms'] = true;
        $this->alarms = $alarms;
        return $this;
    }
}