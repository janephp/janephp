<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpDhcpProfileHostBO
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
     * hostName
     *
     * @var string
     */
    protected $hostName;
    /**
     * leaseTime
     *
     * @var int
     */
    protected $leaseTime;
    /**
     * profileId
     *
     * @var string
     */
    protected $profileId;
    /**
     * hardwareEthernet
     *
     * @var string
     */
    protected $hardwareEthernet;
    /**
     * fixedAddress
     *
     * @var string
     */
    protected $fixedAddress;
    /**
     * domainName
     *
     * @var string
     */
    protected $domainName;
    /**
     * name
     *
     * @var string
     */
    protected $name;
    /**
     * hostId
     *
     * @var string
     */
    protected $hostId;
    /**
     * description
     *
     * @var string
     */
    protected $description;
    /**
     * dnsServers
     *
     * @var list<string>
     */
    protected $dnsServers;
    /**
     * routers
     *
     * @var list<string>
     */
    protected $routers;
    /**
     * broadcastAddress
     *
     * @var string
     */
    protected $broadcastAddress;
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
     * hardwareEthernet
     *
     * @return string
     */
    public function getHardwareEthernet(): string
    {
        return $this->hardwareEthernet;
    }
    /**
     * hardwareEthernet
     *
     * @param string $hardwareEthernet
     *
     * @return self
     */
    public function setHardwareEthernet(string $hardwareEthernet): self
    {
        $this->initialized['hardwareEthernet'] = true;
        $this->hardwareEthernet = $hardwareEthernet;
        return $this;
    }
    /**
     * fixedAddress
     *
     * @return string
     */
    public function getFixedAddress(): string
    {
        return $this->fixedAddress;
    }
    /**
     * fixedAddress
     *
     * @param string $fixedAddress
     *
     * @return self
     */
    public function setFixedAddress(string $fixedAddress): self
    {
        $this->initialized['fixedAddress'] = true;
        $this->fixedAddress = $fixedAddress;
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
     * name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * name
     *
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
     * hostId
     *
     * @return string
     */
    public function getHostId(): string
    {
        return $this->hostId;
    }
    /**
     * hostId
     *
     * @param string $hostId
     *
     * @return self
     */
    public function setHostId(string $hostId): self
    {
        $this->initialized['hostId'] = true;
        $this->hostId = $hostId;
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
     * dnsServers
     *
     * @return list<string>
     */
    public function getDnsServers(): array
    {
        return $this->dnsServers;
    }
    /**
     * dnsServers
     *
     * @param list<string> $dnsServers
     *
     * @return self
     */
    public function setDnsServers(array $dnsServers): self
    {
        $this->initialized['dnsServers'] = true;
        $this->dnsServers = $dnsServers;
        return $this;
    }
    /**
     * routers
     *
     * @return list<string>
     */
    public function getRouters(): array
    {
        return $this->routers;
    }
    /**
     * routers
     *
     * @param list<string> $routers
     *
     * @return self
     */
    public function setRouters(array $routers): self
    {
        $this->initialized['routers'] = true;
        $this->routers = $routers;
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
}