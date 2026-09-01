<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileDhcpRelayNoRelayTunnel
{
    /**
     * Enable DHCP Relay
     *
     * @var bool
     */
    public bool $dhcpRelayEnabled;
    /**
     * DHCP Server 1
     *
     * @var string
     */
    public string $dhcpServer1;
    /**
     * DHCP Server 2
     *
     * @var string
     */
    public string $dhcpServer2;
    /**
     * Send DHCP requests to both servers simultaneously.
     *
     * @var bool
     */
    public bool $relayBothEnabled;
    /**
     * @var ProfileDhcpOption82
     */
    public ProfileDhcpOption82 $dhcpOption82;
}