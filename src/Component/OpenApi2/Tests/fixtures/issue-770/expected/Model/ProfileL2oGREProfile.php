<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileL2oGREProfile
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
    /**
     * Timestamp of being created
     *
     * @var int
     */
    public int $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    public string $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    public string $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    public string $modifierUsername;
}