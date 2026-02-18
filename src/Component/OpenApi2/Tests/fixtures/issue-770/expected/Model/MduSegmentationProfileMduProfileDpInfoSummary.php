<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileMduProfileDpInfoSummary
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
    protected $dpName;
    /**
     * @var string
     */
    protected $dpId;
    /**
     * @var string
     */
    protected $vniRange;
    /**
     * @var string
     */
    protected $dhcpProfileName;
    /**
     * @var string
     */
    protected $dhcpProfileId;
    /**
     * @var string
     */
    protected $dhcpPoolName;
    /**
     * @var string
     */
    protected $dhcpPoolId;
    /**
     * @var string
     */
    protected $natProfileName;
    /**
     * @var string
     */
    protected $natProfileId;
    /**
     * @var string
     */
    protected $natPoolName;
    /**
     * @var string
     */
    protected $natPoolId;
    /**
     * @var bool
     */
    protected $enabledRedundant;
    /**
     * @var string
     */
    protected $redundantDpName;
    /**
     * @var string
     */
    protected $redundantDpId;
    /**
     * @var string
     */
    protected $redundantDhcpProfileName;
    /**
     * @var string
     */
    protected $redundantDhcpProfileId;
    /**
     * @var string
     */
    protected $redundantDhcpPoolName;
    /**
     * @var string
     */
    protected $redundantDhcpPoolId;
    /**
     * @var string
     */
    protected $redundantNatProfileName;
    /**
     * @var string
     */
    protected $redundantNatProfileId;
    /**
     * @var string
     */
    protected $redundantNatPoolName;
    /**
     * @var string
     */
    protected $redundantNatPoolId;
    /**
     * @return string
     */
    public function getDpName(): string
    {
        return $this->dpName;
    }
    /**
     * @param string $dpName
     *
     * @return self
     */
    public function setDpName(string $dpName): self
    {
        $this->initialized['dpName'] = true;
        $this->dpName = $dpName;
        return $this;
    }
    /**
     * @return string
     */
    public function getDpId(): string
    {
        return $this->dpId;
    }
    /**
     * @param string $dpId
     *
     * @return self
     */
    public function setDpId(string $dpId): self
    {
        $this->initialized['dpId'] = true;
        $this->dpId = $dpId;
        return $this;
    }
    /**
     * @return string
     */
    public function getVniRange(): string
    {
        return $this->vniRange;
    }
    /**
     * @param string $vniRange
     *
     * @return self
     */
    public function setVniRange(string $vniRange): self
    {
        $this->initialized['vniRange'] = true;
        $this->vniRange = $vniRange;
        return $this;
    }
    /**
     * @return string
     */
    public function getDhcpProfileName(): string
    {
        return $this->dhcpProfileName;
    }
    /**
     * @param string $dhcpProfileName
     *
     * @return self
     */
    public function setDhcpProfileName(string $dhcpProfileName): self
    {
        $this->initialized['dhcpProfileName'] = true;
        $this->dhcpProfileName = $dhcpProfileName;
        return $this;
    }
    /**
     * @return string
     */
    public function getDhcpProfileId(): string
    {
        return $this->dhcpProfileId;
    }
    /**
     * @param string $dhcpProfileId
     *
     * @return self
     */
    public function setDhcpProfileId(string $dhcpProfileId): self
    {
        $this->initialized['dhcpProfileId'] = true;
        $this->dhcpProfileId = $dhcpProfileId;
        return $this;
    }
    /**
     * @return string
     */
    public function getDhcpPoolName(): string
    {
        return $this->dhcpPoolName;
    }
    /**
     * @param string $dhcpPoolName
     *
     * @return self
     */
    public function setDhcpPoolName(string $dhcpPoolName): self
    {
        $this->initialized['dhcpPoolName'] = true;
        $this->dhcpPoolName = $dhcpPoolName;
        return $this;
    }
    /**
     * @return string
     */
    public function getDhcpPoolId(): string
    {
        return $this->dhcpPoolId;
    }
    /**
     * @param string $dhcpPoolId
     *
     * @return self
     */
    public function setDhcpPoolId(string $dhcpPoolId): self
    {
        $this->initialized['dhcpPoolId'] = true;
        $this->dhcpPoolId = $dhcpPoolId;
        return $this;
    }
    /**
     * @return string
     */
    public function getNatProfileName(): string
    {
        return $this->natProfileName;
    }
    /**
     * @param string $natProfileName
     *
     * @return self
     */
    public function setNatProfileName(string $natProfileName): self
    {
        $this->initialized['natProfileName'] = true;
        $this->natProfileName = $natProfileName;
        return $this;
    }
    /**
     * @return string
     */
    public function getNatProfileId(): string
    {
        return $this->natProfileId;
    }
    /**
     * @param string $natProfileId
     *
     * @return self
     */
    public function setNatProfileId(string $natProfileId): self
    {
        $this->initialized['natProfileId'] = true;
        $this->natProfileId = $natProfileId;
        return $this;
    }
    /**
     * @return string
     */
    public function getNatPoolName(): string
    {
        return $this->natPoolName;
    }
    /**
     * @param string $natPoolName
     *
     * @return self
     */
    public function setNatPoolName(string $natPoolName): self
    {
        $this->initialized['natPoolName'] = true;
        $this->natPoolName = $natPoolName;
        return $this;
    }
    /**
     * @return string
     */
    public function getNatPoolId(): string
    {
        return $this->natPoolId;
    }
    /**
     * @param string $natPoolId
     *
     * @return self
     */
    public function setNatPoolId(string $natPoolId): self
    {
        $this->initialized['natPoolId'] = true;
        $this->natPoolId = $natPoolId;
        return $this;
    }
    /**
     * @return bool
     */
    public function getEnabledRedundant(): bool
    {
        return $this->enabledRedundant;
    }
    /**
     * @param bool $enabledRedundant
     *
     * @return self
     */
    public function setEnabledRedundant(bool $enabledRedundant): self
    {
        $this->initialized['enabledRedundant'] = true;
        $this->enabledRedundant = $enabledRedundant;
        return $this;
    }
    /**
     * @return string
     */
    public function getRedundantDpName(): string
    {
        return $this->redundantDpName;
    }
    /**
     * @param string $redundantDpName
     *
     * @return self
     */
    public function setRedundantDpName(string $redundantDpName): self
    {
        $this->initialized['redundantDpName'] = true;
        $this->redundantDpName = $redundantDpName;
        return $this;
    }
    /**
     * @return string
     */
    public function getRedundantDpId(): string
    {
        return $this->redundantDpId;
    }
    /**
     * @param string $redundantDpId
     *
     * @return self
     */
    public function setRedundantDpId(string $redundantDpId): self
    {
        $this->initialized['redundantDpId'] = true;
        $this->redundantDpId = $redundantDpId;
        return $this;
    }
    /**
     * @return string
     */
    public function getRedundantDhcpProfileName(): string
    {
        return $this->redundantDhcpProfileName;
    }
    /**
     * @param string $redundantDhcpProfileName
     *
     * @return self
     */
    public function setRedundantDhcpProfileName(string $redundantDhcpProfileName): self
    {
        $this->initialized['redundantDhcpProfileName'] = true;
        $this->redundantDhcpProfileName = $redundantDhcpProfileName;
        return $this;
    }
    /**
     * @return string
     */
    public function getRedundantDhcpProfileId(): string
    {
        return $this->redundantDhcpProfileId;
    }
    /**
     * @param string $redundantDhcpProfileId
     *
     * @return self
     */
    public function setRedundantDhcpProfileId(string $redundantDhcpProfileId): self
    {
        $this->initialized['redundantDhcpProfileId'] = true;
        $this->redundantDhcpProfileId = $redundantDhcpProfileId;
        return $this;
    }
    /**
     * @return string
     */
    public function getRedundantDhcpPoolName(): string
    {
        return $this->redundantDhcpPoolName;
    }
    /**
     * @param string $redundantDhcpPoolName
     *
     * @return self
     */
    public function setRedundantDhcpPoolName(string $redundantDhcpPoolName): self
    {
        $this->initialized['redundantDhcpPoolName'] = true;
        $this->redundantDhcpPoolName = $redundantDhcpPoolName;
        return $this;
    }
    /**
     * @return string
     */
    public function getRedundantDhcpPoolId(): string
    {
        return $this->redundantDhcpPoolId;
    }
    /**
     * @param string $redundantDhcpPoolId
     *
     * @return self
     */
    public function setRedundantDhcpPoolId(string $redundantDhcpPoolId): self
    {
        $this->initialized['redundantDhcpPoolId'] = true;
        $this->redundantDhcpPoolId = $redundantDhcpPoolId;
        return $this;
    }
    /**
     * @return string
     */
    public function getRedundantNatProfileName(): string
    {
        return $this->redundantNatProfileName;
    }
    /**
     * @param string $redundantNatProfileName
     *
     * @return self
     */
    public function setRedundantNatProfileName(string $redundantNatProfileName): self
    {
        $this->initialized['redundantNatProfileName'] = true;
        $this->redundantNatProfileName = $redundantNatProfileName;
        return $this;
    }
    /**
     * @return string
     */
    public function getRedundantNatProfileId(): string
    {
        return $this->redundantNatProfileId;
    }
    /**
     * @param string $redundantNatProfileId
     *
     * @return self
     */
    public function setRedundantNatProfileId(string $redundantNatProfileId): self
    {
        $this->initialized['redundantNatProfileId'] = true;
        $this->redundantNatProfileId = $redundantNatProfileId;
        return $this;
    }
    /**
     * @return string
     */
    public function getRedundantNatPoolName(): string
    {
        return $this->redundantNatPoolName;
    }
    /**
     * @param string $redundantNatPoolName
     *
     * @return self
     */
    public function setRedundantNatPoolName(string $redundantNatPoolName): self
    {
        $this->initialized['redundantNatPoolName'] = true;
        $this->redundantNatPoolName = $redundantNatPoolName;
        return $this;
    }
    /**
     * @return string
     */
    public function getRedundantNatPoolId(): string
    {
        return $this->redundantNatPoolId;
    }
    /**
     * @param string $redundantNatPoolId
     *
     * @return self
     */
    public function setRedundantNatPoolId(string $redundantNatPoolId): self
    {
        $this->initialized['redundantNatPoolId'] = true;
        $this->redundantNatPoolId = $redundantNatPoolId;
        return $this;
    }
}