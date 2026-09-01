<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneAvailableTunnelProfile
{
    /**
     * Tunnel Profile ID
     *
     * @var string
     */
    public string $id;
    /**
     * Tunnel Profile Name
     *
     * @var string
     */
    public string $name;
    /**
     * Tunnel Profile Type ("RuckusGRE", "SoftGRE",or "Ipsec")
     *
     * @var string
     */
    public string $tunnelType;
    /**
     * @var string
     */
    public string $ipMode;
    /**
     * Enable AAA affinity (Soft GRE only)
     *
     * @var bool
     */
    public bool $aaaAffinityEnabled;
}