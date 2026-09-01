<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileCreateBridgeProfile
{
    /**
     * Profile Id
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var ProfileDhcpRelayNoRelayTunnel
     */
    public ProfileDhcpRelayNoRelayTunnel $dhcpRelay;
    /**
     * Domain Id
     *
     * @var string
     */
    public string $domainId;
}