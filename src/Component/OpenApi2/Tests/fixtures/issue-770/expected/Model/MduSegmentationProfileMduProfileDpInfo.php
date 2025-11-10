<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileMduProfileDpInfo
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
    protected $dpId;
    /**
     * @var string
     */
    protected $vniRange;
    /**
     * @var string
     */
    protected $dhcpProfileId;
    /**
     * @var string
     */
    protected $dhcpPoolId;
    /**
     * @var string
     */
    protected $natProfileId;
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
    protected $redundantDpId;
    /**
     * @var string
     */
    protected $redundantDhcpProfileId;
    /**
     * @var string
     */
    protected $redundantDhcpPoolId;
    /**
     * @var string
     */
    protected $redundantNatProfileId;
    /**
     * @var string
     */
    protected $redundantNatPoolId;
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