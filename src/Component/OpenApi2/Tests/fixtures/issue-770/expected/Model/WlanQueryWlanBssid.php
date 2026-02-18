<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanQueryWlanBssid
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
    protected $wlanName;
    /**
     * @var string
     */
    protected $bssid;
    /**
     * @var int
     */
    protected $wlanId;
    /**
     * @var int
     */
    protected $radioId;
    /**
     * @return string
     */
    public function getWlanName(): string
    {
        return $this->wlanName;
    }
    /**
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
     * @return string
     */
    public function getBssid(): string
    {
        return $this->bssid;
    }
    /**
     * @param string $bssid
     *
     * @return self
     */
    public function setBssid(string $bssid): self
    {
        $this->initialized['bssid'] = true;
        $this->bssid = $bssid;
        return $this;
    }
    /**
     * @return int
     */
    public function getWlanId(): int
    {
        return $this->wlanId;
    }
    /**
     * @param int $wlanId
     *
     * @return self
     */
    public function setWlanId(int $wlanId): self
    {
        $this->initialized['wlanId'] = true;
        $this->wlanId = $wlanId;
        return $this;
    }
    /**
     * @return int
     */
    public function getRadioId(): int
    {
        return $this->radioId;
    }
    /**
     * @param int $radioId
     *
     * @return self
     */
    public function setRadioId(int $radioId): self
    {
        $this->initialized['radioId'] = true;
        $this->radioId = $radioId;
        return $this;
    }
}