<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileDhcpRelayNoRelayTunnel
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
     * Enable DHCP Relay
     *
     * @var bool
     */
    protected $dhcpRelayEnabled;
    /**
     * DHCP Server 1
     *
     * @var string
     */
    protected $dhcpServer1;
    /**
     * DHCP Server 2
     *
     * @var string
     */
    protected $dhcpServer2;
    /**
     * Send DHCP requests to both servers simultaneously.
     *
     * @var bool
     */
    protected $relayBothEnabled;
    /**
     * @var ProfileDhcpOption82
     */
    protected $dhcpOption82;
    /**
     * Enable DHCP Relay
     *
     * @return bool
     */
    public function getDhcpRelayEnabled(): bool
    {
        return $this->dhcpRelayEnabled;
    }
    /**
     * Enable DHCP Relay
     *
     * @param bool $dhcpRelayEnabled
     *
     * @return self
     */
    public function setDhcpRelayEnabled(bool $dhcpRelayEnabled): self
    {
        $this->initialized['dhcpRelayEnabled'] = true;
        $this->dhcpRelayEnabled = $dhcpRelayEnabled;
        return $this;
    }
    /**
     * DHCP Server 1
     *
     * @return string
     */
    public function getDhcpServer1(): string
    {
        return $this->dhcpServer1;
    }
    /**
     * DHCP Server 1
     *
     * @param string $dhcpServer1
     *
     * @return self
     */
    public function setDhcpServer1(string $dhcpServer1): self
    {
        $this->initialized['dhcpServer1'] = true;
        $this->dhcpServer1 = $dhcpServer1;
        return $this;
    }
    /**
     * DHCP Server 2
     *
     * @return string
     */
    public function getDhcpServer2(): string
    {
        return $this->dhcpServer2;
    }
    /**
     * DHCP Server 2
     *
     * @param string $dhcpServer2
     *
     * @return self
     */
    public function setDhcpServer2(string $dhcpServer2): self
    {
        $this->initialized['dhcpServer2'] = true;
        $this->dhcpServer2 = $dhcpServer2;
        return $this;
    }
    /**
     * Send DHCP requests to both servers simultaneously.
     *
     * @return bool
     */
    public function getRelayBothEnabled(): bool
    {
        return $this->relayBothEnabled;
    }
    /**
     * Send DHCP requests to both servers simultaneously.
     *
     * @param bool $relayBothEnabled
     *
     * @return self
     */
    public function setRelayBothEnabled(bool $relayBothEnabled): self
    {
        $this->initialized['relayBothEnabled'] = true;
        $this->relayBothEnabled = $relayBothEnabled;
        return $this;
    }
    /**
     * @return ProfileDhcpOption82
     */
    public function getDhcpOption82(): ProfileDhcpOption82
    {
        return $this->dhcpOption82;
    }
    /**
     * @param ProfileDhcpOption82 $dhcpOption82
     *
     * @return self
     */
    public function setDhcpOption82(ProfileDhcpOption82 $dhcpOption82): self
    {
        $this->initialized['dhcpOption82'] = true;
        $this->dhcpOption82 = $dhcpOption82;
        return $this;
    }
}