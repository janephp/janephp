<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskGetDpskEnabledWlansListItem
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
     * Identifier of the DPSK enabled WLAN
     *
     * @var string
     */
    protected $wlanId;
    /**
     * SSID of the DPSK enabled WLAN
     *
     * @var string
     */
    protected $ssid;
    /**
     * Name of the the DPSK enabled WLAN
     *
     * @var string
     */
    protected $wlanName;
    /**
     * Identifier of the DPSK enabled WLAN
     *
     * @return string
     */
    public function getWlanId(): string
    {
        return $this->wlanId;
    }
    /**
     * Identifier of the DPSK enabled WLAN
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
     * SSID of the DPSK enabled WLAN
     *
     * @return string
     */
    public function getSsid(): string
    {
        return $this->ssid;
    }
    /**
     * SSID of the DPSK enabled WLAN
     *
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
     * Name of the the DPSK enabled WLAN
     *
     * @return string
     */
    public function getWlanName(): string
    {
        return $this->wlanName;
    }
    /**
     * Name of the the DPSK enabled WLAN
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
}