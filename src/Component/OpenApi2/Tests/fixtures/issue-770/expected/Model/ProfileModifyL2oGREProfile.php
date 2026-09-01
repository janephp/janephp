<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileModifyL2oGREProfile
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
     * @var ProfileCoreNetworkGateway
     */
    public ProfileCoreNetworkGateway $coreNetworkGateway;
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