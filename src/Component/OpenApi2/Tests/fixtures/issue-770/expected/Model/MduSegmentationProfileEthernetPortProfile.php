<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileEthernetPortProfile
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
     * type of the ethernet port profile
     *
     * @var string
     */
    protected $type;
    /**
     * tunnelEnabled of the ethernet port profile for AccessPort type
     *
     * @var bool
     */
    protected $tunnelEnabled;
    /**
     * @var string
     */
    protected $tenantId;
    /**
     * @var string
     */
    protected $mduProfileId;
    /**
     * @var string
     */
    protected $accessNetworkType;
    /**
     * VLAN Untag ID of the ethernet port profile
     *
     * @var int
     */
    protected $untagId;
    /**
     * ARP packets request rate limit
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
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }
    /**
     * @param string $tenantId
     *
     * @return self
     */
    public function setTenantId(string $tenantId): self
    {
        $this->initialized['tenantId'] = true;
        $this->tenantId = $tenantId;
        return $this;
    }
    /**
     * @return string
     */
    public function getMduProfileId(): string
    {
        return $this->mduProfileId;
    }
    /**
     * @param string $mduProfileId
     *
     * @return self
     */
    public function setMduProfileId(string $mduProfileId): self
    {
        $this->initialized['mduProfileId'] = true;
        $this->mduProfileId = $mduProfileId;
        return $this;
    }
    /**
     * @return string
     */
    public function getAccessNetworkType(): string
    {
        return $this->accessNetworkType;
    }
    /**
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
     * ARP packets request rate limit
     *
     * @return int
     */
    public function getArpRequestRateLimit(): int
    {
        return $this->arpRequestRateLimit;
    }
    /**
     * ARP packets request rate limit
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
}