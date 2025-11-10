<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonDhcpProfileRef
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
     * Zone Id of DHCP Profile
     *
     * @var string
     */
    protected $zoneId;
    /**
     * Identifier of the DHCP Profile
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
     * VLAN ID of the DHCP Profile
     *
     * @var int
     */
    protected $vlanId;
    /**
     * @var string
     */
    protected $subnetNetworkIp;
    /**
     * @var string
     */
    protected $subnetMask;
    /**
     * @var string
     */
    protected $poolStartIp;
    /**
     * @var string
     */
    protected $poolEndIp;
    /**
     * @var string
     */
    protected $primaryDnsIp;
    /**
     * @var string
     */
    protected $secondaryDnsIp;
    /**
     * Lease time in hours of the DHCP Profile
     *
     * @var int
     */
    protected $leaseTimeHours;
    /**
     * Lease time in minutes of the DHCP Profile
     *
     * @var int
     */
    protected $leaseTimeMinutes;
    /**
     * Zone Id of DHCP Profile
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Zone Id of DHCP Profile
     *
     * @param string $zoneId
     *
     * @return self
     */
    public function setZoneId(string $zoneId): self
    {
        $this->initialized['zoneId'] = true;
        $this->zoneId = $zoneId;
        return $this;
    }
    /**
     * Identifier of the DHCP Profile
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the DHCP Profile
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
     * VLAN ID of the DHCP Profile
     *
     * @return int
     */
    public function getVlanId(): int
    {
        return $this->vlanId;
    }
    /**
     * VLAN ID of the DHCP Profile
     *
     * @param int $vlanId
     *
     * @return self
     */
    public function setVlanId(int $vlanId): self
    {
        $this->initialized['vlanId'] = true;
        $this->vlanId = $vlanId;
        return $this;
    }
    /**
     * @return string
     */
    public function getSubnetNetworkIp(): string
    {
        return $this->subnetNetworkIp;
    }
    /**
     * @param string $subnetNetworkIp
     *
     * @return self
     */
    public function setSubnetNetworkIp(string $subnetNetworkIp): self
    {
        $this->initialized['subnetNetworkIp'] = true;
        $this->subnetNetworkIp = $subnetNetworkIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getSubnetMask(): string
    {
        return $this->subnetMask;
    }
    /**
     * @param string $subnetMask
     *
     * @return self
     */
    public function setSubnetMask(string $subnetMask): self
    {
        $this->initialized['subnetMask'] = true;
        $this->subnetMask = $subnetMask;
        return $this;
    }
    /**
     * @return string
     */
    public function getPoolStartIp(): string
    {
        return $this->poolStartIp;
    }
    /**
     * @param string $poolStartIp
     *
     * @return self
     */
    public function setPoolStartIp(string $poolStartIp): self
    {
        $this->initialized['poolStartIp'] = true;
        $this->poolStartIp = $poolStartIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getPoolEndIp(): string
    {
        return $this->poolEndIp;
    }
    /**
     * @param string $poolEndIp
     *
     * @return self
     */
    public function setPoolEndIp(string $poolEndIp): self
    {
        $this->initialized['poolEndIp'] = true;
        $this->poolEndIp = $poolEndIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getPrimaryDnsIp(): string
    {
        return $this->primaryDnsIp;
    }
    /**
     * @param string $primaryDnsIp
     *
     * @return self
     */
    public function setPrimaryDnsIp(string $primaryDnsIp): self
    {
        $this->initialized['primaryDnsIp'] = true;
        $this->primaryDnsIp = $primaryDnsIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getSecondaryDnsIp(): string
    {
        return $this->secondaryDnsIp;
    }
    /**
     * @param string $secondaryDnsIp
     *
     * @return self
     */
    public function setSecondaryDnsIp(string $secondaryDnsIp): self
    {
        $this->initialized['secondaryDnsIp'] = true;
        $this->secondaryDnsIp = $secondaryDnsIp;
        return $this;
    }
    /**
     * Lease time in hours of the DHCP Profile
     *
     * @return int
     */
    public function getLeaseTimeHours(): int
    {
        return $this->leaseTimeHours;
    }
    /**
     * Lease time in hours of the DHCP Profile
     *
     * @param int $leaseTimeHours
     *
     * @return self
     */
    public function setLeaseTimeHours(int $leaseTimeHours): self
    {
        $this->initialized['leaseTimeHours'] = true;
        $this->leaseTimeHours = $leaseTimeHours;
        return $this;
    }
    /**
     * Lease time in minutes of the DHCP Profile
     *
     * @return int
     */
    public function getLeaseTimeMinutes(): int
    {
        return $this->leaseTimeMinutes;
    }
    /**
     * Lease time in minutes of the DHCP Profile
     *
     * @param int $leaseTimeMinutes
     *
     * @return self
     */
    public function setLeaseTimeMinutes(int $leaseTimeMinutes): self
    {
        $this->initialized['leaseTimeMinutes'] = true;
        $this->leaseTimeMinutes = $leaseTimeMinutes;
        return $this;
    }
}