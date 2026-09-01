<?php

namespace Docker\Api\Model;

class NetworkSettings
{
    /**
     * Name of the network'a bridge (for example, `docker0`).
     *
     * @var string
     */
    public string $bridge;
    /**
     * SandboxID uniquely represents a container's network stack.
     *
     * @var string
     */
    public string $sandboxID;
    /**
     * Indicates if hairpin NAT should be enabled on the virtual interface.
     * 
     *
     * @var bool
     */
    public bool $hairpinMode;
    /**
     * IPv6 unicast address using the link-local prefix.
     *
     * @var string
     */
    public string $linkLocalIPv6Address;
    /**
     * Prefix length of the IPv6 unicast address.
     *
     * @var int
     */
    public int $linkLocalIPv6PrefixLen;
    /**
     * PortMap describes the mapping of container ports to host ports, using the
     * container's port-number and protocol as key in the format `<port>/<protocol>`,
     * for example, `80/udp`.
     * 
     * If a container's port is mapped for multiple protocols, separate entries
     * are added to the mapping table.
     * 
     *
     * @var array<string, list<PortBinding>>
     */
    public iterable $ports;
    /**
     * SandboxKey identifies the sandbox
     *
     * @var string
     */
    public string $sandboxKey;
    /**
     * @var list<Address>|null
     */
    public ?array $secondaryIPAddresses;
    /**
     * @var list<Address>|null
     */
    public ?array $secondaryIPv6Addresses;
    /**
     * EndpointID uniquely represents a service endpoint in a Sandbox.
     * 
     * <p><br /></p>
     * 
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     * 
     *
     * @var string
     */
    public string $endpointID;
    /**
     * Gateway address for the default "bridge" network.
     * 
     * <p><br /></p>
     * 
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     * 
     *
     * @var string
     */
    public string $gateway;
    /**
     * Global IPv6 address for the default "bridge" network.
     * 
     * <p><br /></p>
     * 
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     * 
     *
     * @var string
     */
    public string $globalIPv6Address;
    /**
     * Mask length of the global IPv6 address.
     * 
     * <p><br /></p>
     * 
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     * 
     *
     * @var int
     */
    public int $globalIPv6PrefixLen;
    /**
     * IPv4 address for the default "bridge" network.
     * 
     * <p><br /></p>
     * 
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     * 
     *
     * @var string
     */
    public string $iPAddress;
    /**
     * Mask length of the IPv4 address.
     * 
     * <p><br /></p>
     * 
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     * 
     *
     * @var int
     */
    public int $iPPrefixLen;
    /**
     * IPv6 gateway address for this network.
     * 
     * <p><br /></p>
     * 
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     * 
     *
     * @var string
     */
    public string $iPv6Gateway;
    /**
     * MAC address for the container on the default "bridge" network.
     * 
     * <p><br /></p>
     * 
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     * 
     *
     * @var string
     */
    public string $macAddress;
    /**
     * Information about all networks that the container is connected to.
     * 
     *
     * @var array<string, EndpointSettings>
     */
    public iterable $networks;
}