<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class EthernetPortCreateEthernetPortProfile
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * type of the ethernet port profile
     *
     * @var string
     */
    protected $type = 'TrunkPort';
    /**
     * tunnelEnabled of the ethernet port profile for AccessPort type
     *
     * @var bool
     */
    protected $tunnelEnabled = false;
    /**
     * Access network type of the ethernet port profile
     *
     * @var string
     */
    protected $accessNetworkType;
    /**
     * VLAN Untag ID of the ethernet port profile
     *
     * @var int
     */
    protected $untagId = 1;
    /**
     * VLAN Members of the ethernet port profile
     *
     * @var string
     */
    protected $vlanMembers;
    /**
     * @var bool
     */
    protected $dynamicVlanEnabled;
    /**
     * @var int
     */
    protected $guestVlan;
    /**
     * @var CommonQinq
     */
    protected $qinq;
    /**
     * Anti-Spoofing enabled
     *
     * @var bool
     */
    protected $antiSpoofingEnabled = false;
    /**
     * ARP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @var int
     */
    protected $arpRequestRateLimit;
    /**
     * DHCP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @var int
     */
    protected $dhcpRequestRateLimit;
    /**
     * User side port enabled.
     *
     * @var bool
     */
    protected $userSidePortEnabled = false;
    /**
     * Number of wired clients allowed to connect to a particular user side port, default value will be 8 if the value not being set.
     *
     * @var int
     */
    protected $userSidePortMaxClient = 8;
    /**
     * Uplink rate limiting range should be 1 ~ 1000 Mbps. 0 means rate limiting uplink is disabled.
     *
     * @var int
     */
    protected $userSidePortUplinkLimit = 0;
    /**
     * Downlink rate limiting range should be 1 ~ 1000 Mbps. 0 means rate limiting downlink is disabled.
     *
     * @var int
     */
    protected $userSidePortDownlinkLimit = 0;
    /**
     * @var ApmodelLanPort8021X
     */
    protected $n8021X;
    /**
     * @var CommonGenericRef
     */
    protected $tunnelProfile;
    /**
     * @var CommonGenericRef
     */
    protected $ipsecProfile;
    /**
     * Firewall Profile Id
     *
     * @var string
     */
    protected $firewallProfileId;
    /**
     * Application Recognition & Control enabled
     *
     * @var bool
     */
    protected $firewallAVCEnabled;
    /**
     * URL Filtering Policy enabled
     *
     * @var bool
     */
    protected $firewallUrlFilteringPolicyEnabled;
    /**
     * L2 Access Control Policy Id
     *
     * @var string
     */
    protected $l2AccessControlPolicyId;
    /**
     * Indicates whether wired client isolation is enabled or disabled
     *
     * @var bool
     */
    protected $clientIsolationEnabled = false;
    /**
     * Indicates whether isolate unicast of wired client isolation is enabled or disabled
     *
     * @var bool
     */
    protected $clientIsolationUnicastEnabled = true;
    /**
     * Indicates whether isolate multicast of wired client isolation is enabled or disabled
     *
     * @var bool
     */
    protected $clientIsolationMulticastEnabled;
    /**
     * Indicates whether Automatic support for VRRP of wired client isolation is enabled or disabled
     *
     * @var bool
     */
    protected $clientIsolationAutoVrrpEnabled = false;
    /**
     * @var CommonGenericRef
     */
    protected $clientIsolationWhitelist;
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
     * type of the ethernet port profile
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * type of the ethernet port profile
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * tunnelEnabled of the ethernet port profile for AccessPort type
     *
     * @return bool
     */
    public function getTunnelEnabled(): bool
    {
        return $this->tunnelEnabled;
    }
    /**
     * tunnelEnabled of the ethernet port profile for AccessPort type
     *
     * @param bool $tunnelEnabled
     *
     * @return self
     */
    public function setTunnelEnabled(bool $tunnelEnabled): self
    {
        $this->initialized['tunnelEnabled'] = true;
        $this->tunnelEnabled = $tunnelEnabled;
        return $this;
    }
    /**
     * Access network type of the ethernet port profile
     *
     * @return string
     */
    public function getAccessNetworkType(): string
    {
        return $this->accessNetworkType;
    }
    /**
     * Access network type of the ethernet port profile
     *
     * @param string $accessNetworkType
     *
     * @return self
     */
    public function setAccessNetworkType(string $accessNetworkType): self
    {
        $this->initialized['accessNetworkType'] = true;
        $this->accessNetworkType = $accessNetworkType;
        return $this;
    }
    /**
     * VLAN Untag ID of the ethernet port profile
     *
     * @return int
     */
    public function getUntagId(): int
    {
        return $this->untagId;
    }
    /**
     * VLAN Untag ID of the ethernet port profile
     *
     * @param int $untagId
     *
     * @return self
     */
    public function setUntagId(int $untagId): self
    {
        $this->initialized['untagId'] = true;
        $this->untagId = $untagId;
        return $this;
    }
    /**
     * VLAN Members of the ethernet port profile
     *
     * @return string
     */
    public function getVlanMembers(): string
    {
        return $this->vlanMembers;
    }
    /**
     * VLAN Members of the ethernet port profile
     *
     * @param string $vlanMembers
     *
     * @return self
     */
    public function setVlanMembers(string $vlanMembers): self
    {
        $this->initialized['vlanMembers'] = true;
        $this->vlanMembers = $vlanMembers;
        return $this;
    }
    /**
     * @return bool
     */
    public function getDynamicVlanEnabled(): bool
    {
        return $this->dynamicVlanEnabled;
    }
    /**
     * @param bool $dynamicVlanEnabled
     *
     * @return self
     */
    public function setDynamicVlanEnabled(bool $dynamicVlanEnabled): self
    {
        $this->initialized['dynamicVlanEnabled'] = true;
        $this->dynamicVlanEnabled = $dynamicVlanEnabled;
        return $this;
    }
    /**
     * @return int
     */
    public function getGuestVlan(): int
    {
        return $this->guestVlan;
    }
    /**
     * @param int $guestVlan
     *
     * @return self
     */
    public function setGuestVlan(int $guestVlan): self
    {
        $this->initialized['guestVlan'] = true;
        $this->guestVlan = $guestVlan;
        return $this;
    }
    /**
     * @return CommonQinq
     */
    public function getQinq(): CommonQinq
    {
        return $this->qinq;
    }
    /**
     * @param CommonQinq $qinq
     *
     * @return self
     */
    public function setQinq(CommonQinq $qinq): self
    {
        $this->initialized['qinq'] = true;
        $this->qinq = $qinq;
        return $this;
    }
    /**
     * Anti-Spoofing enabled
     *
     * @return bool
     */
    public function getAntiSpoofingEnabled(): bool
    {
        return $this->antiSpoofingEnabled;
    }
    /**
     * Anti-Spoofing enabled
     *
     * @param bool $antiSpoofingEnabled
     *
     * @return self
     */
    public function setAntiSpoofingEnabled(bool $antiSpoofingEnabled): self
    {
        $this->initialized['antiSpoofingEnabled'] = true;
        $this->antiSpoofingEnabled = $antiSpoofingEnabled;
        return $this;
    }
    /**
     * ARP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @return int
     */
    public function getArpRequestRateLimit(): int
    {
        return $this->arpRequestRateLimit;
    }
    /**
     * ARP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @param int $arpRequestRateLimit
     *
     * @return self
     */
    public function setArpRequestRateLimit(int $arpRequestRateLimit): self
    {
        $this->initialized['arpRequestRateLimit'] = true;
        $this->arpRequestRateLimit = $arpRequestRateLimit;
        return $this;
    }
    /**
     * DHCP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @return int
     */
    public function getDhcpRequestRateLimit(): int
    {
        return $this->dhcpRequestRateLimit;
    }
    /**
     * DHCP packets request rate limit, default value will be 15 if both rate limit not being set.
     *
     * @param int $dhcpRequestRateLimit
     *
     * @return self
     */
    public function setDhcpRequestRateLimit(int $dhcpRequestRateLimit): self
    {
        $this->initialized['dhcpRequestRateLimit'] = true;
        $this->dhcpRequestRateLimit = $dhcpRequestRateLimit;
        return $this;
    }
    /**
     * User side port enabled.
     *
     * @return bool
     */
    public function getUserSidePortEnabled(): bool
    {
        return $this->userSidePortEnabled;
    }
    /**
     * User side port enabled.
     *
     * @param bool $userSidePortEnabled
     *
     * @return self
     */
    public function setUserSidePortEnabled(bool $userSidePortEnabled): self
    {
        $this->initialized['userSidePortEnabled'] = true;
        $this->userSidePortEnabled = $userSidePortEnabled;
        return $this;
    }
    /**
     * Number of wired clients allowed to connect to a particular user side port, default value will be 8 if the value not being set.
     *
     * @return int
     */
    public function getUserSidePortMaxClient(): int
    {
        return $this->userSidePortMaxClient;
    }
    /**
     * Number of wired clients allowed to connect to a particular user side port, default value will be 8 if the value not being set.
     *
     * @param int $userSidePortMaxClient
     *
     * @return self
     */
    public function setUserSidePortMaxClient(int $userSidePortMaxClient): self
    {
        $this->initialized['userSidePortMaxClient'] = true;
        $this->userSidePortMaxClient = $userSidePortMaxClient;
        return $this;
    }
    /**
     * Uplink rate limiting range should be 1 ~ 1000 Mbps. 0 means rate limiting uplink is disabled.
     *
     * @return int
     */
    public function getUserSidePortUplinkLimit(): int
    {
        return $this->userSidePortUplinkLimit;
    }
    /**
     * Uplink rate limiting range should be 1 ~ 1000 Mbps. 0 means rate limiting uplink is disabled.
     *
     * @param int $userSidePortUplinkLimit
     *
     * @return self
     */
    public function setUserSidePortUplinkLimit(int $userSidePortUplinkLimit): self
    {
        $this->initialized['userSidePortUplinkLimit'] = true;
        $this->userSidePortUplinkLimit = $userSidePortUplinkLimit;
        return $this;
    }
    /**
     * Downlink rate limiting range should be 1 ~ 1000 Mbps. 0 means rate limiting downlink is disabled.
     *
     * @return int
     */
    public function getUserSidePortDownlinkLimit(): int
    {
        return $this->userSidePortDownlinkLimit;
    }
    /**
     * Downlink rate limiting range should be 1 ~ 1000 Mbps. 0 means rate limiting downlink is disabled.
     *
     * @param int $userSidePortDownlinkLimit
     *
     * @return self
     */
    public function setUserSidePortDownlinkLimit(int $userSidePortDownlinkLimit): self
    {
        $this->initialized['userSidePortDownlinkLimit'] = true;
        $this->userSidePortDownlinkLimit = $userSidePortDownlinkLimit;
        return $this;
    }
    /**
     * @return ApmodelLanPort8021X
     */
    public function get8021X(): ApmodelLanPort8021X
    {
        return $this->n8021X;
    }
    /**
     * @param ApmodelLanPort8021X $n8021X
     *
     * @return self
     */
    public function set8021X(ApmodelLanPort8021X $n8021X): self
    {
        $this->initialized['n8021X'] = true;
        $this->n8021X = $n8021X;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getTunnelProfile(): CommonGenericRef
    {
        return $this->tunnelProfile;
    }
    /**
     * @param CommonGenericRef $tunnelProfile
     *
     * @return self
     */
    public function setTunnelProfile(CommonGenericRef $tunnelProfile): self
    {
        $this->initialized['tunnelProfile'] = true;
        $this->tunnelProfile = $tunnelProfile;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getIpsecProfile(): CommonGenericRef
    {
        return $this->ipsecProfile;
    }
    /**
     * @param CommonGenericRef $ipsecProfile
     *
     * @return self
     */
    public function setIpsecProfile(CommonGenericRef $ipsecProfile): self
    {
        $this->initialized['ipsecProfile'] = true;
        $this->ipsecProfile = $ipsecProfile;
        return $this;
    }
    /**
     * Firewall Profile Id
     *
     * @return string
     */
    public function getFirewallProfileId(): string
    {
        return $this->firewallProfileId;
    }
    /**
     * Firewall Profile Id
     *
     * @param string $firewallProfileId
     *
     * @return self
     */
    public function setFirewallProfileId(string $firewallProfileId): self
    {
        $this->initialized['firewallProfileId'] = true;
        $this->firewallProfileId = $firewallProfileId;
        return $this;
    }
    /**
     * Application Recognition & Control enabled
     *
     * @return bool
     */
    public function getFirewallAVCEnabled(): bool
    {
        return $this->firewallAVCEnabled;
    }
    /**
     * Application Recognition & Control enabled
     *
     * @param bool $firewallAVCEnabled
     *
     * @return self
     */
    public function setFirewallAVCEnabled(bool $firewallAVCEnabled): self
    {
        $this->initialized['firewallAVCEnabled'] = true;
        $this->firewallAVCEnabled = $firewallAVCEnabled;
        return $this;
    }
    /**
     * URL Filtering Policy enabled
     *
     * @return bool
     */
    public function getFirewallUrlFilteringPolicyEnabled(): bool
    {
        return $this->firewallUrlFilteringPolicyEnabled;
    }
    /**
     * URL Filtering Policy enabled
     *
     * @param bool $firewallUrlFilteringPolicyEnabled
     *
     * @return self
     */
    public function setFirewallUrlFilteringPolicyEnabled(bool $firewallUrlFilteringPolicyEnabled): self
    {
        $this->initialized['firewallUrlFilteringPolicyEnabled'] = true;
        $this->firewallUrlFilteringPolicyEnabled = $firewallUrlFilteringPolicyEnabled;
        return $this;
    }
    /**
     * L2 Access Control Policy Id
     *
     * @return string
     */
    public function getL2AccessControlPolicyId(): string
    {
        return $this->l2AccessControlPolicyId;
    }
    /**
     * L2 Access Control Policy Id
     *
     * @param string $l2AccessControlPolicyId
     *
     * @return self
     */
    public function setL2AccessControlPolicyId(string $l2AccessControlPolicyId): self
    {
        $this->initialized['l2AccessControlPolicyId'] = true;
        $this->l2AccessControlPolicyId = $l2AccessControlPolicyId;
        return $this;
    }
    /**
     * Indicates whether wired client isolation is enabled or disabled
     *
     * @return bool
     */
    public function getClientIsolationEnabled(): bool
    {
        return $this->clientIsolationEnabled;
    }
    /**
     * Indicates whether wired client isolation is enabled or disabled
     *
     * @param bool $clientIsolationEnabled
     *
     * @return self
     */
    public function setClientIsolationEnabled(bool $clientIsolationEnabled): self
    {
        $this->initialized['clientIsolationEnabled'] = true;
        $this->clientIsolationEnabled = $clientIsolationEnabled;
        return $this;
    }
    /**
     * Indicates whether isolate unicast of wired client isolation is enabled or disabled
     *
     * @return bool
     */
    public function getClientIsolationUnicastEnabled(): bool
    {
        return $this->clientIsolationUnicastEnabled;
    }
    /**
     * Indicates whether isolate unicast of wired client isolation is enabled or disabled
     *
     * @param bool $clientIsolationUnicastEnabled
     *
     * @return self
     */
    public function setClientIsolationUnicastEnabled(bool $clientIsolationUnicastEnabled): self
    {
        $this->initialized['clientIsolationUnicastEnabled'] = true;
        $this->clientIsolationUnicastEnabled = $clientIsolationUnicastEnabled;
        return $this;
    }
    /**
     * Indicates whether isolate multicast of wired client isolation is enabled or disabled
     *
     * @return bool
     */
    public function getClientIsolationMulticastEnabled(): bool
    {
        return $this->clientIsolationMulticastEnabled;
    }
    /**
     * Indicates whether isolate multicast of wired client isolation is enabled or disabled
     *
     * @param bool $clientIsolationMulticastEnabled
     *
     * @return self
     */
    public function setClientIsolationMulticastEnabled(bool $clientIsolationMulticastEnabled): self
    {
        $this->initialized['clientIsolationMulticastEnabled'] = true;
        $this->clientIsolationMulticastEnabled = $clientIsolationMulticastEnabled;
        return $this;
    }
    /**
     * Indicates whether Automatic support for VRRP of wired client isolation is enabled or disabled
     *
     * @return bool
     */
    public function getClientIsolationAutoVrrpEnabled(): bool
    {
        return $this->clientIsolationAutoVrrpEnabled;
    }
    /**
     * Indicates whether Automatic support for VRRP of wired client isolation is enabled or disabled
     *
     * @param bool $clientIsolationAutoVrrpEnabled
     *
     * @return self
     */
    public function setClientIsolationAutoVrrpEnabled(bool $clientIsolationAutoVrrpEnabled): self
    {
        $this->initialized['clientIsolationAutoVrrpEnabled'] = true;
        $this->clientIsolationAutoVrrpEnabled = $clientIsolationAutoVrrpEnabled;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getClientIsolationWhitelist(): CommonGenericRef
    {
        return $this->clientIsolationWhitelist;
    }
    /**
     * @param CommonGenericRef $clientIsolationWhitelist
     *
     * @return self
     */
    public function setClientIsolationWhitelist(CommonGenericRef $clientIsolationWhitelist): self
    {
        $this->initialized['clientIsolationWhitelist'] = true;
        $this->clientIsolationWhitelist = $clientIsolationWhitelist;
        return $this;
    }
}