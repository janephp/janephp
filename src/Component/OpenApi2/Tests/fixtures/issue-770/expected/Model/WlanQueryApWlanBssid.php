<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanQueryApWlanBssid
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
    protected $apMac;
    /**
     * @var string
     */
    protected $deviceName;
    /**
     * @var list<WlanQueryWlanBssid>
     */
    protected $wlanBssids;
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
     * @return list<WlanQueryWlanBssid>
     */
    public function getWlanBssids(): array
    {
        return $this->wlanBssids;
    }
    /**
     * @param list<WlanQueryWlanBssid> $wlanBssids
     *
     * @return self
     */
    public function setWlanBssids(array $wlanBssids): self
    {
        $this->initialized['wlanBssids'] = true;
        $this->wlanBssids = $wlanBssids;
        return $this;
    }
}