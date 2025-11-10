<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonDhcpSiteConfigRef
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
     * DHCP Service Enabling Status
     *
     * @var bool
     */
    protected $siteEnabled;
    /**
     * DHCP Port Selection Enabled
     *
     * @var bool
     */
    protected $portSelectionEnabled;
    /**
     * DHCP Service Dynamic WAN Port Detection
     *
     * @var bool
     */
    protected $dwpdEnabled;
    /**
     * DHCP Service AP Selection Mode. This value is effective when the siteMode is EnableOnMultipleAPs.
     *
     * @var bool
     */
    protected $manualSelect;
    /**
     * DHCP Service mode
     *
     * @var string
     */
    protected $siteMode;
    /**
     * @var int
     */
    protected $eth0ProfileId;
    /**
     * @var int
     */
    protected $eth1ProfileId;
    /**
     * @var list<CommonDhcpSiteConfigRefSiteApsItem>
     */
    protected $siteAps;
    /**
     * @var list<string>
     */
    protected $siteProfileIds;
    /**
     * DHCP Service Enabling Status
     *
     * @return bool
     */
    public function getSiteEnabled(): bool
    {
        return $this->siteEnabled;
    }
    /**
     * DHCP Service Enabling Status
     *
     * @param bool $siteEnabled
     *
     * @return self
     */
    public function setSiteEnabled(bool $siteEnabled): self
    {
        $this->initialized['siteEnabled'] = true;
        $this->siteEnabled = $siteEnabled;
        return $this;
    }
    /**
     * DHCP Port Selection Enabled
     *
     * @return bool
     */
    public function getPortSelectionEnabled(): bool
    {
        return $this->portSelectionEnabled;
    }
    /**
     * DHCP Port Selection Enabled
     *
     * @param bool $portSelectionEnabled
     *
     * @return self
     */
    public function setPortSelectionEnabled(bool $portSelectionEnabled): self
    {
        $this->initialized['portSelectionEnabled'] = true;
        $this->portSelectionEnabled = $portSelectionEnabled;
        return $this;
    }
    /**
     * DHCP Service Dynamic WAN Port Detection
     *
     * @return bool
     */
    public function getDwpdEnabled(): bool
    {
        return $this->dwpdEnabled;
    }
    /**
     * DHCP Service Dynamic WAN Port Detection
     *
     * @param bool $dwpdEnabled
     *
     * @return self
     */
    public function setDwpdEnabled(bool $dwpdEnabled): self
    {
        $this->initialized['dwpdEnabled'] = true;
        $this->dwpdEnabled = $dwpdEnabled;
        return $this;
    }
    /**
     * DHCP Service AP Selection Mode. This value is effective when the siteMode is EnableOnMultipleAPs.
     *
     * @return bool
     */
    public function getManualSelect(): bool
    {
        return $this->manualSelect;
    }
    /**
     * DHCP Service AP Selection Mode. This value is effective when the siteMode is EnableOnMultipleAPs.
     *
     * @param bool $manualSelect
     *
     * @return self
     */
    public function setManualSelect(bool $manualSelect): self
    {
        $this->initialized['manualSelect'] = true;
        $this->manualSelect = $manualSelect;
        return $this;
    }
    /**
     * DHCP Service mode
     *
     * @return string
     */
    public function getSiteMode(): string
    {
        return $this->siteMode;
    }
    /**
     * DHCP Service mode
     *
     * @param string $siteMode
     *
     * @return self
     */
    public function setSiteMode(string $siteMode): self
    {
        $this->initialized['siteMode'] = true;
        $this->siteMode = $siteMode;
        return $this;
    }
    /**
     * @return int
     */
    public function getEth0ProfileId(): int
    {
        return $this->eth0ProfileId;
    }
    /**
     * @param int $eth0ProfileId
     *
     * @return self
     */
    public function setEth0ProfileId(int $eth0ProfileId): self
    {
        $this->initialized['eth0ProfileId'] = true;
        $this->eth0ProfileId = $eth0ProfileId;
        return $this;
    }
    /**
     * @return int
     */
    public function getEth1ProfileId(): int
    {
        return $this->eth1ProfileId;
    }
    /**
     * @param int $eth1ProfileId
     *
     * @return self
     */
    public function setEth1ProfileId(int $eth1ProfileId): self
    {
        $this->initialized['eth1ProfileId'] = true;
        $this->eth1ProfileId = $eth1ProfileId;
        return $this;
    }
    /**
     * @return list<CommonDhcpSiteConfigRefSiteApsItem>
     */
    public function getSiteAps(): array
    {
        return $this->siteAps;
    }
    /**
     * @param list<CommonDhcpSiteConfigRefSiteApsItem> $siteAps
     *
     * @return self
     */
    public function setSiteAps(array $siteAps): self
    {
        $this->initialized['siteAps'] = true;
        $this->siteAps = $siteAps;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getSiteProfileIds(): array
    {
        return $this->siteProfileIds;
    }
    /**
     * @param list<string> $siteProfileIds
     *
     * @return self
     */
    public function setSiteProfileIds(array $siteProfileIds): self
    {
        $this->initialized['siteProfileIds'] = true;
        $this->siteProfileIds = $siteProfileIds;
        return $this;
    }
}