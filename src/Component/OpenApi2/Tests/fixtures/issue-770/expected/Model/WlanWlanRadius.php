<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanRadius
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
     * NAS ID type
     *
     * @var string
     */
    protected $nasIdType = 'WLAN_BSSID';
    /**
     * User defined NAS ID
     *
     * @var string
     */
    protected $customizedNasId;
    /**
     * NAS request timeout in seconds
     *
     * @var int
     */
    protected $nasRequestTimeoutSec = 3;
    /**
     * NAS request maximum retry
     *
     * @var int
     */
    protected $nasMaxRetry = 2;
    /**
     * NAS reconnect primary time in minutes
     *
     * @var int
     */
    protected $nasReconnectPrimaryMin = 5;
    /**
     * Called station ID type
     *
     * @var string
     */
    protected $calledStaIdType = 'WLAN_BSSID';
    /**
     * NAS IP type
     *
     * @var string
     */
    protected $nasIpType = 'disabled';
    /**
     * User-defined NAS IP
     *
     * @var string
     */
    protected $nasIpUserDefined;
    /**
     * When Single Accounting Session ID is enabled, APs will maintain one accounting session for client roaming
     *
     * @var bool
     */
    protected $singleSessionIdAcctEnabled = false;
    /**
     * Vendor Specific Attribute Profile ID
     *
     * @var string
     */
    protected $vendorSpecificAttributeProfileId;
    /**
     * NAS ID type
     *
     * @return string
     */
    public function getNasIdType(): string
    {
        return $this->nasIdType;
    }
    /**
     * NAS ID type
     *
     * @param string $nasIdType
     *
     * @return self
     */
    public function setNasIdType(string $nasIdType): self
    {
        $this->initialized['nasIdType'] = true;
        $this->nasIdType = $nasIdType;
        return $this;
    }
    /**
     * User defined NAS ID
     *
     * @return string
     */
    public function getCustomizedNasId(): string
    {
        return $this->customizedNasId;
    }
    /**
     * User defined NAS ID
     *
     * @param string $customizedNasId
     *
     * @return self
     */
    public function setCustomizedNasId(string $customizedNasId): self
    {
        $this->initialized['customizedNasId'] = true;
        $this->customizedNasId = $customizedNasId;
        return $this;
    }
    /**
     * NAS request timeout in seconds
     *
     * @return int
     */
    public function getNasRequestTimeoutSec(): int
    {
        return $this->nasRequestTimeoutSec;
    }
    /**
     * NAS request timeout in seconds
     *
     * @param int $nasRequestTimeoutSec
     *
     * @return self
     */
    public function setNasRequestTimeoutSec(int $nasRequestTimeoutSec): self
    {
        $this->initialized['nasRequestTimeoutSec'] = true;
        $this->nasRequestTimeoutSec = $nasRequestTimeoutSec;
        return $this;
    }
    /**
     * NAS request maximum retry
     *
     * @return int
     */
    public function getNasMaxRetry(): int
    {
        return $this->nasMaxRetry;
    }
    /**
     * NAS request maximum retry
     *
     * @param int $nasMaxRetry
     *
     * @return self
     */
    public function setNasMaxRetry(int $nasMaxRetry): self
    {
        $this->initialized['nasMaxRetry'] = true;
        $this->nasMaxRetry = $nasMaxRetry;
        return $this;
    }
    /**
     * NAS reconnect primary time in minutes
     *
     * @return int
     */
    public function getNasReconnectPrimaryMin(): int
    {
        return $this->nasReconnectPrimaryMin;
    }
    /**
     * NAS reconnect primary time in minutes
     *
     * @param int $nasReconnectPrimaryMin
     *
     * @return self
     */
    public function setNasReconnectPrimaryMin(int $nasReconnectPrimaryMin): self
    {
        $this->initialized['nasReconnectPrimaryMin'] = true;
        $this->nasReconnectPrimaryMin = $nasReconnectPrimaryMin;
        return $this;
    }
    /**
     * Called station ID type
     *
     * @return string
     */
    public function getCalledStaIdType(): string
    {
        return $this->calledStaIdType;
    }
    /**
     * Called station ID type
     *
     * @param string $calledStaIdType
     *
     * @return self
     */
    public function setCalledStaIdType(string $calledStaIdType): self
    {
        $this->initialized['calledStaIdType'] = true;
        $this->calledStaIdType = $calledStaIdType;
        return $this;
    }
    /**
     * NAS IP type
     *
     * @return string
     */
    public function getNasIpType(): string
    {
        return $this->nasIpType;
    }
    /**
     * NAS IP type
     *
     * @param string $nasIpType
     *
     * @return self
     */
    public function setNasIpType(string $nasIpType): self
    {
        $this->initialized['nasIpType'] = true;
        $this->nasIpType = $nasIpType;
        return $this;
    }
    /**
     * User-defined NAS IP
     *
     * @return string
     */
    public function getNasIpUserDefined(): string
    {
        return $this->nasIpUserDefined;
    }
    /**
     * User-defined NAS IP
     *
     * @param string $nasIpUserDefined
     *
     * @return self
     */
    public function setNasIpUserDefined(string $nasIpUserDefined): self
    {
        $this->initialized['nasIpUserDefined'] = true;
        $this->nasIpUserDefined = $nasIpUserDefined;
        return $this;
    }
    /**
     * When Single Accounting Session ID is enabled, APs will maintain one accounting session for client roaming
     *
     * @return bool
     */
    public function getSingleSessionIdAcctEnabled(): bool
    {
        return $this->singleSessionIdAcctEnabled;
    }
    /**
     * When Single Accounting Session ID is enabled, APs will maintain one accounting session for client roaming
     *
     * @param bool $singleSessionIdAcctEnabled
     *
     * @return self
     */
    public function setSingleSessionIdAcctEnabled(bool $singleSessionIdAcctEnabled): self
    {
        $this->initialized['singleSessionIdAcctEnabled'] = true;
        $this->singleSessionIdAcctEnabled = $singleSessionIdAcctEnabled;
        return $this;
    }
    /**
     * Vendor Specific Attribute Profile ID
     *
     * @return string
     */
    public function getVendorSpecificAttributeProfileId(): string
    {
        return $this->vendorSpecificAttributeProfileId;
    }
    /**
     * Vendor Specific Attribute Profile ID
     *
     * @param string $vendorSpecificAttributeProfileId
     *
     * @return self
     */
    public function setVendorSpecificAttributeProfileId(string $vendorSpecificAttributeProfileId): self
    {
        $this->initialized['vendorSpecificAttributeProfileId'] = true;
        $this->vendorSpecificAttributeProfileId = $vendorSpecificAttributeProfileId;
        return $this;
    }
}