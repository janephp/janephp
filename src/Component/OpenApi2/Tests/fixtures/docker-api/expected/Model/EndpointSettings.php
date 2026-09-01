<?php

namespace Docker\Api\Model;

class EndpointSettings
{
    /**
     * EndpointIPAMConfig represents an endpoint's IPAM configuration.
     * 
     *
     * @var EndpointIPAMConfig|null
     */
    public ?EndpointIPAMConfig $iPAMConfig;
    /**
     * @var list<string>
     */
    public array $links;
    /**
     * @var list<string>
     */
    public array $aliases;
    /**
     * Unique ID of the network.
     * 
     *
     * @var string
     */
    public string $networkID;
    /**
     * Unique ID for the service endpoint in a Sandbox.
     * 
     *
     * @var string
     */
    public string $endpointID;
    /**
     * Gateway address for this network.
     * 
     *
     * @var string
     */
    public string $gateway;
    /**
     * IPv4 address.
     * 
     *
     * @var string
     */
    public string $iPAddress;
    /**
     * Mask length of the IPv4 address.
     * 
     *
     * @var int
     */
    public int $iPPrefixLen;
    /**
     * IPv6 gateway address.
     * 
     *
     * @var string
     */
    public string $iPv6Gateway;
    /**
     * Global IPv6 address.
     * 
     *
     * @var string
     */
    public string $globalIPv6Address;
    /**
     * Mask length of the global IPv6 address.
     * 
     *
     * @var int
     */
    public int $globalIPv6PrefixLen;
    /**
     * MAC address for the endpoint on this network.
     * 
     *
     * @var string
     */
    public string $macAddress;
    /**
     * DriverOpts is a mapping of driver options and values. These options
     * are passed directly to the driver and are driver specific.
     * 
     *
     * @var array<string, string>|null
     */
    public ?iterable $driverOpts;
}