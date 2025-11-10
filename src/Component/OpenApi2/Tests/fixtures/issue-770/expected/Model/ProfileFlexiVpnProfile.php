<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileFlexiVpnProfile
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
     * Wlan ID
     *
     * @var string
     */
    protected $wlanId;
    /**
     * Wlan name
     *
     * @var string
     */
    protected $wlanName;
    /**
     * Zone ID
     *
     * @var string
     */
    protected $zoneId;
    /**
     * Zone name
     *
     * @var string
     */
    protected $zoneName;
    /**
     * Domain ID
     *
     * @var string
     */
    protected $domainId;
    /**
     * DP Group ID (Source)
     *
     * @var string
     */
    protected $sourceDpGroupId;
    /**
     * DP Group name(Source)
     *
     * @var string
     */
    protected $sourceDpGroupName;
    /**
     * Flexi-VPN Profile ID (Destination)
     *
     * @var string
     */
    protected $destinationDpGroupId;
    /**
     * Flexi-VPN Profile (Destination)
     *
     * @var string
     */
    protected $destinationDpGroupName;
    /**
     * Wlan ID
     *
     * @return string
     */
    public function getWlanId(): string
    {
        return $this->wlanId;
    }
    /**
     * Wlan ID
     *
     * @param string $wlanId
     *
     * @return self
     */
    public function setWlanId(string $wlanId): self
    {
        $this->initialized['wlanId'] = true;
        $this->wlanId = $wlanId;
        return $this;
    }
    /**
     * Wlan name
     *
     * @return string
     */
    public function getWlanName(): string
    {
        return $this->wlanName;
    }
    /**
     * Wlan name
     *
     * @param string $wlanName
     *
     * @return self
     */
    public function setWlanName(string $wlanName): self
    {
        $this->initialized['wlanName'] = true;
        $this->wlanName = $wlanName;
        return $this;
    }
    /**
     * Zone ID
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Zone ID
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
     * Zone name
     *
     * @return string
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }
    /**
     * Zone name
     *
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
     * Domain ID
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain ID
     *
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
     * DP Group ID (Source)
     *
     * @return string
     */
    public function getSourceDpGroupId(): string
    {
        return $this->sourceDpGroupId;
    }
    /**
     * DP Group ID (Source)
     *
     * @param string $sourceDpGroupId
     *
     * @return self
     */
    public function setSourceDpGroupId(string $sourceDpGroupId): self
    {
        $this->initialized['sourceDpGroupId'] = true;
        $this->sourceDpGroupId = $sourceDpGroupId;
        return $this;
    }
    /**
     * DP Group name(Source)
     *
     * @return string
     */
    public function getSourceDpGroupName(): string
    {
        return $this->sourceDpGroupName;
    }
    /**
     * DP Group name(Source)
     *
     * @param string $sourceDpGroupName
     *
     * @return self
     */
    public function setSourceDpGroupName(string $sourceDpGroupName): self
    {
        $this->initialized['sourceDpGroupName'] = true;
        $this->sourceDpGroupName = $sourceDpGroupName;
        return $this;
    }
    /**
     * Flexi-VPN Profile ID (Destination)
     *
     * @return string
     */
    public function getDestinationDpGroupId(): string
    {
        return $this->destinationDpGroupId;
    }
    /**
     * Flexi-VPN Profile ID (Destination)
     *
     * @param string $destinationDpGroupId
     *
     * @return self
     */
    public function setDestinationDpGroupId(string $destinationDpGroupId): self
    {
        $this->initialized['destinationDpGroupId'] = true;
        $this->destinationDpGroupId = $destinationDpGroupId;
        return $this;
    }
    /**
     * Flexi-VPN Profile (Destination)
     *
     * @return string
     */
    public function getDestinationDpGroupName(): string
    {
        return $this->destinationDpGroupName;
    }
    /**
     * Flexi-VPN Profile (Destination)
     *
     * @param string $destinationDpGroupName
     *
     * @return self
     */
    public function setDestinationDpGroupName(string $destinationDpGroupName): self
    {
        $this->initialized['destinationDpGroupName'] = true;
        $this->destinationDpGroupName = $destinationDpGroupName;
        return $this;
    }
}