<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceCreateHotspot20WlanProfile
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $operator;
    /**
     * Ddentity providers of the Hotspot 2.0 WLAN profile
     *
     * @var list<CommonGenericRef>
     */
    public array $identityProviders;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $defaultIdentityProvider;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $signupSsid;
    /**
     * Internet option of the Hotspot 2.0 WLAN profile
     *
     * @var bool
     */
    public bool $internetOption;
    /**
     * Access network type of the Hotspot 2.0 WLAN profile
     *
     * @var string
     */
    public string $accessNetworkType;
    /**
     * IPv4 address type of the Hotspot 2.0 WLAN profile
     *
     * @var string
     */
    public string $ipv4AddressType;
    /**
     * IPv6 address type of the Hotspot 2.0 WLAN profile
     *
     * @var string
     */
    public string $ipv6AddressType;
    /**
     * Single SSID of the Hotspot 2.0 WLAN profile. When Online Signup is enabled and Single SSID is disabled, Onboarding SSID will be required.
     *
     * @var bool
     */
    public bool $singleSsidEnabled = false;
}