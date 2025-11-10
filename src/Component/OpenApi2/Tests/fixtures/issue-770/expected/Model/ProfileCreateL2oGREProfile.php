<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateL2oGREProfile
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Profile Id
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var ProfileCoreNetworkGateway
     */
    protected $coreNetworkGateway;
    /**
     * @var ProfileDhcpRelayNoRelayTunnel
     */
    protected $dhcpRelay;
    /**
     * Domain Id
     *
     * @var string
     */
    protected $domainId;
    /**
     * Profile Id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Profile Id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return ProfileCoreNetworkGateway
     */
    public function getCoreNetworkGateway(): ProfileCoreNetworkGateway
    {
        return $this->coreNetworkGateway;
    }
    /**
     * @param ProfileCoreNetworkGateway $coreNetworkGateway
     *
     * @return self
     */
    public function setCoreNetworkGateway(ProfileCoreNetworkGateway $coreNetworkGateway): self
    {
        $this->initialized['coreNetworkGateway'] = true;
        $this->coreNetworkGateway = $coreNetworkGateway;
        return $this;
    }
    /**
     * @return ProfileDhcpRelayNoRelayTunnel
     */
    public function getDhcpRelay(): ProfileDhcpRelayNoRelayTunnel
    {
        return $this->dhcpRelay;
    }
    /**
     * @param ProfileDhcpRelayNoRelayTunnel $dhcpRelay
     *
     * @return self
     */
    public function setDhcpRelay(ProfileDhcpRelayNoRelayTunnel $dhcpRelay): self
    {
        $this->initialized['dhcpRelay'] = true;
        $this->dhcpRelay = $dhcpRelay;
        return $this;
    }
    /**
     * Domain Id
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain Id
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
}