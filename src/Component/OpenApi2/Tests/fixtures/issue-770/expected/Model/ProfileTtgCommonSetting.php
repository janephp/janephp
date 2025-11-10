<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileTtgCommonSetting
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
     * Mobile country code
     *
     * @var string
     */
    protected $mobileCountryCode;
    /**
     * Mobile network code
     *
     * @var string
     */
    protected $mobileNetworkCode;
    /**
     * Mobile country code
     *
     * @return string
     */
    public function getMobileCountryCode(): string
    {
        return $this->mobileCountryCode;
    }
    /**
     * Mobile country code
     *
     * @param string $mobileCountryCode
     *
     * @return self
     */
    public function setMobileCountryCode(string $mobileCountryCode): self
    {
        $this->initialized['mobileCountryCode'] = true;
        $this->mobileCountryCode = $mobileCountryCode;
        return $this;
    }
    /**
     * Mobile network code
     *
     * @return string
     */
    public function getMobileNetworkCode(): string
    {
        return $this->mobileNetworkCode;
    }
    /**
     * Mobile network code
     *
     * @param string $mobileNetworkCode
     *
     * @return self
     */
    public function setMobileNetworkCode(string $mobileNetworkCode): self
    {
        $this->initialized['mobileNetworkCode'] = true;
        $this->mobileNetworkCode = $mobileNetworkCode;
        return $this;
    }
}