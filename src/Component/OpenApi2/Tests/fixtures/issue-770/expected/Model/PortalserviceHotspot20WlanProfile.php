<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceHotspot20WlanProfile
{
    /**
     * Identifier of the Hotspot 2.0 WLAN profile
     *
     * @var string
     */
    public string $id;
    /**
     * Identifier of the zone which the Hotspot 2.0 WLAN profile belongs to
     *
     * @var string
     */
    public string $zoneId;
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
     * Identity providers of the Hotspot 2.0 WLAN profile
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
     * IPv4 address type of the v WLAN profile
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
     * Default connection capabilities of the Hotspot 2.0 WLAN profile
     *
     * @var list<PortalserviceDefaultConnectionCapability>
     */
    public array $connectionCapabilities;
    /**
     * Custom connection capabilities of the Hotspot 2.0 WLAN profile
     *
     * @var list<PortalserviceConnectionCapability>
     */
    public array $customConnectionCapabilities;
    /**
     * Single SSID of the Hotspot 2.0 WLAN profile. When Online Signup is enabled and Single SSID is disabled, Onboarding SSID will be required.
     *
     * @var bool
     */
    public bool $singleSsidEnabled = false;
}