<?php

namespace Docker\Api\Model;

class IPAM
{
    /**
     * Name of the IPAM driver to use.
     *
     * @var string
     */
    public string $driver = 'default';
    /**
     * List of IPAM configuration options, specified as a map:
     * 
     * ```
     * {"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}
     * ```
     * 
     *
     * @var list<array<string, string>>
     */
    public array $config;
    /**
     * Driver-specific options, specified as a map.
     *
     * @var array<string, string>
     */
    public iterable $options;
}