<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceModifyHotspot20WlanProfile
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
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var CommonGenericRef
     */
    protected $operator;
    /**
     * Identity providers of the Hotspot 2.0 WLAN profile
     *
     * @var list<CommonGenericRef>
     */
    protected $identityProviders;
    /**
     * @var CommonGenericRef
     */
    protected $defaultIdentityProvider;
    /**
     * @var CommonGenericRef
     */
    protected $signupSsid;
    /**
     * Internet option of the Hotspot 2.0 WLAN profile
     *
     * @var bool
     */
    protected $internetOption;
    /**
     * Access network type of the Hotspot 2.0 WLAN profile
     *
     * @var string
     */
    protected $accessNetworkType;
    /**
     * IPv4 address type of the Hotspot 2.0 Wlan profile
     *
     * @var string
     */
    protected $ipv4AddressType;
    /**
     * IPv6 address type of the Hotspot 2.0 Wlan profile
     *
     * @var string
     */
    protected $ipv6AddressType;
    /**
     * Default connection capabilities of the Hotspot 2.0 WLAN profile
     *
     * @var list<PortalserviceDefaultConnectionCapability>
     */
    protected $connectionCapabilities;
    /**
     * Custom connection capabilities of the Hotspot 2.0 WLAN profile
     *
     * @var list<PortalserviceConnectionCapability>
     */
    protected $customConnectionCapabilities;
    /**
     * Single SSID of the Hotspot 2.0 WLAN profile. When Online Signup is enabled and Single SSID is disabled, Onboarding SSID will be required.
     *
     * @var bool
     */
    protected $singleSsidEnabled = false;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getOperator(): CommonGenericRef
    {
        return $this->operator;
    }
    /**
     * @param CommonGenericRef $operator
     *
     * @return self
     */
    public function setOperator(CommonGenericRef $operator): self
    {
        $this->initialized['operator'] = true;
        $this->operator = $operator;
        return $this;
    }
    /**
     * Identity providers of the Hotspot 2.0 WLAN profile
     *
     * @return list<CommonGenericRef>
     */
    public function getIdentityProviders(): array
    {
        return $this->identityProviders;
    }
    /**
     * Identity providers of the Hotspot 2.0 WLAN profile
     *
     * @param list<CommonGenericRef> $identityProviders
     *
     * @return self
     */
    public function setIdentityProviders(array $identityProviders): self
    {
        $this->initialized['identityProviders'] = true;
        $this->identityProviders = $identityProviders;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getDefaultIdentityProvider(): CommonGenericRef
    {
        return $this->defaultIdentityProvider;
    }
    /**
     * @param CommonGenericRef $defaultIdentityProvider
     *
     * @return self
     */
    public function setDefaultIdentityProvider(CommonGenericRef $defaultIdentityProvider): self
    {
        $this->initialized['defaultIdentityProvider'] = true;
        $this->defaultIdentityProvider = $defaultIdentityProvider;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getSignupSsid(): CommonGenericRef
    {
        return $this->signupSsid;
    }
    /**
     * @param CommonGenericRef $signupSsid
     *
     * @return self
     */
    public function setSignupSsid(CommonGenericRef $signupSsid): self
    {
        $this->initialized['signupSsid'] = true;
        $this->signupSsid = $signupSsid;
        return $this;
    }
    /**
     * Internet option of the Hotspot 2.0 WLAN profile
     *
     * @return bool
     */
    public function getInternetOption(): bool
    {
        return $this->internetOption;
    }
    /**
     * Internet option of the Hotspot 2.0 WLAN profile
     *
     * @param bool $internetOption
     *
     * @return self
     */
    public function setInternetOption(bool $internetOption): self
    {
        $this->initialized['internetOption'] = true;
        $this->internetOption = $internetOption;
        return $this;
    }
    /**
     * Access network type of the Hotspot 2.0 WLAN profile
     *
     * @return string
     */
    public function getAccessNetworkType(): string
    {
        return $this->accessNetworkType;
    }
    /**
     * Access network type of the Hotspot 2.0 WLAN profile
     *
     * @param string $accessNetworkType
     *
     * @return self
     */
    public function setAccessNetworkType(string $accessNetworkType): self
    {
        $this->initialized['accessNetworkType'] = true;
        $this->accessNetworkType = $accessNetworkType;
        return $this;
    }
    /**
     * IPv4 address type of the Hotspot 2.0 Wlan profile
     *
     * @return string
     */
    public function getIpv4AddressType(): string
    {
        return $this->ipv4AddressType;
    }
    /**
     * IPv4 address type of the Hotspot 2.0 Wlan profile
     *
     * @param string $ipv4AddressType
     *
     * @return self
     */
    public function setIpv4AddressType(string $ipv4AddressType): self
    {
        $this->initialized['ipv4AddressType'] = true;
        $this->ipv4AddressType = $ipv4AddressType;
        return $this;
    }
    /**
     * IPv6 address type of the Hotspot 2.0 Wlan profile
     *
     * @return string
     */
    public function getIpv6AddressType(): string
    {
        return $this->ipv6AddressType;
    }
    /**
     * IPv6 address type of the Hotspot 2.0 Wlan profile
     *
     * @param string $ipv6AddressType
     *
     * @return self
     */
    public function setIpv6AddressType(string $ipv6AddressType): self
    {
        $this->initialized['ipv6AddressType'] = true;
        $this->ipv6AddressType = $ipv6AddressType;
        return $this;
    }
    /**
     * Default connection capabilities of the Hotspot 2.0 WLAN profile
     *
     * @return list<PortalserviceDefaultConnectionCapability>
     */
    public function getConnectionCapabilities(): array
    {
        return $this->connectionCapabilities;
    }
    /**
     * Default connection capabilities of the Hotspot 2.0 WLAN profile
     *
     * @param list<PortalserviceDefaultConnectionCapability> $connectionCapabilities
     *
     * @return self
     */
    public function setConnectionCapabilities(array $connectionCapabilities): self
    {
        $this->initialized['connectionCapabilities'] = true;
        $this->connectionCapabilities = $connectionCapabilities;
        return $this;
    }
    /**
     * Custom connection capabilities of the Hotspot 2.0 WLAN profile
     *
     * @return list<PortalserviceConnectionCapability>
     */
    public function getCustomConnectionCapabilities(): array
    {
        return $this->customConnectionCapabilities;
    }
    /**
     * Custom connection capabilities of the Hotspot 2.0 WLAN profile
     *
     * @param list<PortalserviceConnectionCapability> $customConnectionCapabilities
     *
     * @return self
     */
    public function setCustomConnectionCapabilities(array $customConnectionCapabilities): self
    {
        $this->initialized['customConnectionCapabilities'] = true;
        $this->customConnectionCapabilities = $customConnectionCapabilities;
        return $this;
    }
    /**
     * Single SSID of the Hotspot 2.0 WLAN profile. When Online Signup is enabled and Single SSID is disabled, Onboarding SSID will be required.
     *
     * @return bool
     */
    public function getSingleSsidEnabled(): bool
    {
        return $this->singleSsidEnabled;
    }
    /**
     * Single SSID of the Hotspot 2.0 WLAN profile. When Online Signup is enabled and Single SSID is disabled, Onboarding SSID will be required. 
     *
     * @param bool $singleSsidEnabled
     *
     * @return self
     */
    public function setSingleSsidEnabled(bool $singleSsidEnabled): self
    {
        $this->initialized['singleSsidEnabled'] = true;
        $this->singleSsidEnabled = $singleSsidEnabled;
        return $this;
    }
}