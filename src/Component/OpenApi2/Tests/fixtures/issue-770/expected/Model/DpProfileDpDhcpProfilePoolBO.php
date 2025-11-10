<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpDhcpProfilePoolBO
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
     * leaseTime
     *
     * @var int
     */
    protected $leaseTime;
    /**
     * hostName
     *
     * @var string
     */
    protected $hostName;
    /**
     * primaryDnsServer
     *
     * @var string
     */
    protected $primaryDnsServer;
    /**
     * secondaryRouter
     *
     * @var string
     */
    protected $secondaryRouter;
    /**
     * ip
     *
     * @var string
     */
    protected $ip;
    /**
     * netMask
     *
     * @var string
     */
    protected $netMask;
    /**
     * ipRange
     *
     * @var string
     */
    protected $ipRange;
    /**
     * description
     *
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $vlanType;
    /**
     * secondaryDnsServer
     *
     * @var string
     */
    protected $secondaryDnsServer;
    /**
     * primaryRouter
     *
     * @var string
     */
    protected $primaryRouter;
    /**
     * broadcastAddress
     *
     * @var string
     */
    protected $broadcastAddress;
    /**
     * profileId
     *
     * @var string
     */
    protected $profileId;
    /**
     * vlanRange
     *
     * @var string
     */
    protected $vlanRange;
    /**
     * domainName
     *
     * @var string
     */
    protected $domainName;
    /**
     * poolId
     *
     * @var string
     */
    protected $poolId;
    /**
     * qinqVlanRanges
     *
     * @var list<DpProfileDpDhcpProfileQinqVlanRangeBO>
     */
    protected $qinqVlanRanges;
    /**
     * subOptionSpaces
     *
     * @var list<DpProfileDpDhcpProfileOptionSpaceInstance>
     */
    protected $subOptionSpaces;
    /**
     * excludeAddressRange
     *
     * @var string
     */
    protected $excludeAddressRange;
    /**
     * poolName
     *
     * @var string
     */
    protected $poolName;
    /**
     * leaseTime
     *
     * @return int
     */
    public function getLeaseTime(): int
    {
        return $this->leaseTime;
    }
    /**
     * leaseTime
     *
     * @param int $leaseTime
     *
     * @return self
     */
    public function setLeaseTime(int $leaseTime): self
    {
        $this->initialized['leaseTime'] = true;
        $this->leaseTime = $leaseTime;
        return $this;
    }
    /**
     * hostName
     *
     * @return string
     */
    public function getHostName(): string
    {
        return $this->hostName;
    }
    /**
     * hostName
     *
     * @param string $hostName
     *
     * @return self
     */
    public function setHostName(string $hostName): self
    {
        $this->initialized['hostName'] = true;
        $this->hostName = $hostName;
        return $this;
    }
    /**
     * primaryDnsServer
     *
     * @return string
     */
    public function getPrimaryDnsServer(): string
    {
        return $this->primaryDnsServer;
    }
    /**
     * primaryDnsServer
     *
     * @param string $primaryDnsServer
     *
     * @return self
     */
    public function setPrimaryDnsServer(string $primaryDnsServer): self
    {
        $this->initialized['primaryDnsServer'] = true;
        $this->primaryDnsServer = $primaryDnsServer;
        return $this;
    }
    /**
     * secondaryRouter
     *
     * @return string
     */
    public function getSecondaryRouter(): string
    {
        return $this->secondaryRouter;
    }
    /**
     * secondaryRouter
     *
     * @param string $secondaryRouter
     *
     * @return self
     */
    public function setSecondaryRouter(string $secondaryRouter): self
    {
        $this->initialized['secondaryRouter'] = true;
        $this->secondaryRouter = $secondaryRouter;
        return $this;
    }
    /**
     * ip
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * ip
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * netMask
     *
     * @return string
     */
    public function getNetMask(): string
    {
        return $this->netMask;
    }
    /**
     * netMask
     *
     * @param string $netMask
     *
     * @return self
     */
    public function setNetMask(string $netMask): self
    {
        $this->initialized['netMask'] = true;
        $this->netMask = $netMask;
        return $this;
    }
    /**
     * ipRange
     *
     * @return string
     */
    public function getIpRange(): string
    {
        return $this->ipRange;
    }
    /**
     * ipRange
     *
     * @param string $ipRange
     *
     * @return self
     */
    public function setIpRange(string $ipRange): self
    {
        $this->initialized['ipRange'] = true;
        $this->ipRange = $ipRange;
        return $this;
    }
    /**
     * description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * description
     *
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
     * @return string
     */
    public function getVlanType(): string
    {
        return $this->vlanType;
    }
    /**
     * @param string $vlanType
     *
     * @return self
     */
    public function setVlanType(string $vlanType): self
    {
        $this->initialized['vlanType'] = true;
        $this->vlanType = $vlanType;
        return $this;
    }
    /**
     * secondaryDnsServer
     *
     * @return string
     */
    public function getSecondaryDnsServer(): string
    {
        return $this->secondaryDnsServer;
    }
    /**
     * secondaryDnsServer
     *
     * @param string $secondaryDnsServer
     *
     * @return self
     */
    public function setSecondaryDnsServer(string $secondaryDnsServer): self
    {
        $this->initialized['secondaryDnsServer'] = true;
        $this->secondaryDnsServer = $secondaryDnsServer;
        return $this;
    }
    /**
     * primaryRouter
     *
     * @return string
     */
    public function getPrimaryRouter(): string
    {
        return $this->primaryRouter;
    }
    /**
     * primaryRouter
     *
     * @param string $primaryRouter
     *
     * @return self
     */
    public function setPrimaryRouter(string $primaryRouter): self
    {
        $this->initialized['primaryRouter'] = true;
        $this->primaryRouter = $primaryRouter;
        return $this;
    }
    /**
     * broadcastAddress
     *
     * @return string
     */
    public function getBroadcastAddress(): string
    {
        return $this->broadcastAddress;
    }
    /**
     * broadcastAddress
     *
     * @param string $broadcastAddress
     *
     * @return self
     */
    public function setBroadcastAddress(string $broadcastAddress): self
    {
        $this->initialized['broadcastAddress'] = true;
        $this->broadcastAddress = $broadcastAddress;
        return $this;
    }
    /**
     * profileId
     *
     * @return string
     */
    public function getProfileId(): string
    {
        return $this->profileId;
    }
    /**
     * profileId
     *
     * @param string $profileId
     *
     * @return self
     */
    public function setProfileId(string $profileId): self
    {
        $this->initialized['profileId'] = true;
        $this->profileId = $profileId;
        return $this;
    }
    /**
     * vlanRange
     *
     * @return string
     */
    public function getVlanRange(): string
    {
        return $this->vlanRange;
    }
    /**
     * vlanRange
     *
     * @param string $vlanRange
     *
     * @return self
     */
    public function setVlanRange(string $vlanRange): self
    {
        $this->initialized['vlanRange'] = true;
        $this->vlanRange = $vlanRange;
        return $this;
    }
    /**
     * domainName
     *
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }
    /**
     * domainName
     *
     * @param string $domainName
     *
     * @return self
     */
    public function setDomainName(string $domainName): self
    {
        $this->initialized['domainName'] = true;
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * poolId
     *
     * @return string
     */
    public function getPoolId(): string
    {
        return $this->poolId;
    }
    /**
     * poolId
     *
     * @param string $poolId
     *
     * @return self
     */
    public function setPoolId(string $poolId): self
    {
        $this->initialized['poolId'] = true;
        $this->poolId = $poolId;
        return $this;
    }
    /**
     * qinqVlanRanges
     *
     * @return list<DpProfileDpDhcpProfileQinqVlanRangeBO>
     */
    public function getQinqVlanRanges(): array
    {
        return $this->qinqVlanRanges;
    }
    /**
     * qinqVlanRanges
     *
     * @param list<DpProfileDpDhcpProfileQinqVlanRangeBO> $qinqVlanRanges
     *
     * @return self
     */
    public function setQinqVlanRanges(array $qinqVlanRanges): self
    {
        $this->initialized['qinqVlanRanges'] = true;
        $this->qinqVlanRanges = $qinqVlanRanges;
        return $this;
    }
    /**
     * subOptionSpaces
     *
     * @return list<DpProfileDpDhcpProfileOptionSpaceInstance>
     */
    public function getSubOptionSpaces(): array
    {
        return $this->subOptionSpaces;
    }
    /**
     * subOptionSpaces
     *
     * @param list<DpProfileDpDhcpProfileOptionSpaceInstance> $subOptionSpaces
     *
     * @return self
     */
    public function setSubOptionSpaces(array $subOptionSpaces): self
    {
        $this->initialized['subOptionSpaces'] = true;
        $this->subOptionSpaces = $subOptionSpaces;
        return $this;
    }
    /**
     * excludeAddressRange
     *
     * @return string
     */
    public function getExcludeAddressRange(): string
    {
        return $this->excludeAddressRange;
    }
    /**
     * excludeAddressRange
     *
     * @param string $excludeAddressRange
     *
     * @return self
     */
    public function setExcludeAddressRange(string $excludeAddressRange): self
    {
        $this->initialized['excludeAddressRange'] = true;
        $this->excludeAddressRange = $excludeAddressRange;
        return $this;
    }
    /**
     * poolName
     *
     * @return string
     */
    public function getPoolName(): string
    {
        return $this->poolName;
    }
    /**
     * poolName
     *
     * @param string $poolName
     *
     * @return self
     */
    public function setPoolName(string $poolName): self
    {
        $this->initialized['poolName'] = true;
        $this->poolName = $poolName;
        return $this;
    }
}