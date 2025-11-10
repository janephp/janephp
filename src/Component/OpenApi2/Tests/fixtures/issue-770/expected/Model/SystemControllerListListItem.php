<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemControllerListListItem
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
     * Identifier of the controller
     *
     * @var string
     */
    protected $id;
    /**
     * Product model
     *
     * @var string
     */
    protected $model;
    /**
     * Description of the controller
     *
     * @var string
     */
    protected $description;
    /**
     * Host name of the controller
     *
     * @var string
     */
    protected $hostName;
    /**
     * MAC address of the controller
     *
     * @var string
     */
    protected $mac;
    /**
     * Serial number of the controller
     *
     * @var string
     */
    protected $serialNumber;
    /**
     * Indicator the role of the controller
     *
     * @var string
     */
    protected $clusterRole;
    /**
     * Control NAT IP address settings
     *
     * @var string
     */
    protected $controlNatIp;
    /**
     * Uptime (in seconds) of the controller
     *
     * @var int
     */
    protected $uptimeInSec;
    /**
     * Name of the controller
     *
     * @var string
     */
    protected $name;
    /**
     * SCG version
     *
     * @var string
     */
    protected $version;
    /**
     * AP version
     *
     * @var string
     */
    protected $apVersion;
    /**
     * Control IP
     *
     * @var string
     */
    protected $controlIp;
    /**
     * Cluster IP
     *
     * @var string
     */
    protected $clusterIp;
    /**
     * Management IP
     *
     * @var string
     */
    protected $managementIp;
    /**
     * Control IPv6
     *
     * @var string
     */
    protected $controlIpv6;
    /**
     * Cluster IPv6
     *
     * @var string
     */
    protected $clusterIpv6;
    /**
     * Management IPv6
     *
     * @var string
     */
    protected $managementIpv6;
    /**
     * @var list<SystemReservedPort>
     */
    protected $reservedPorts;
    /**
     * Identifier of the controller
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the controller
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
     * Product model
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }
    /**
     * Product model
     *
     * @param string $model
     *
     * @return self
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }
    /**
     * Description of the controller
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the controller
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
     * Host name of the controller
     *
     * @return string
     */
    public function getHostName(): string
    {
        return $this->hostName;
    }
    /**
     * Host name of the controller
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
     * MAC address of the controller
     *
     * @return string
     */
    public function getMac(): string
    {
        return $this->mac;
    }
    /**
     * MAC address of the controller
     *
     * @param string $mac
     *
     * @return self
     */
    public function setMac(string $mac): self
    {
        $this->initialized['mac'] = true;
        $this->mac = $mac;
        return $this;
    }
    /**
     * Serial number of the controller
     *
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }
    /**
     * Serial number of the controller
     *
     * @param string $serialNumber
     *
     * @return self
     */
    public function setSerialNumber(string $serialNumber): self
    {
        $this->initialized['serialNumber'] = true;
        $this->serialNumber = $serialNumber;
        return $this;
    }
    /**
     * Indicator the role of the controller
     *
     * @return string
     */
    public function getClusterRole(): string
    {
        return $this->clusterRole;
    }
    /**
     * Indicator the role of the controller
     *
     * @param string $clusterRole
     *
     * @return self
     */
    public function setClusterRole(string $clusterRole): self
    {
        $this->initialized['clusterRole'] = true;
        $this->clusterRole = $clusterRole;
        return $this;
    }
    /**
     * Control NAT IP address settings
     *
     * @return string
     */
    public function getControlNatIp(): string
    {
        return $this->controlNatIp;
    }
    /**
     * Control NAT IP address settings
     *
     * @param string $controlNatIp
     *
     * @return self
     */
    public function setControlNatIp(string $controlNatIp): self
    {
        $this->initialized['controlNatIp'] = true;
        $this->controlNatIp = $controlNatIp;
        return $this;
    }
    /**
     * Uptime (in seconds) of the controller
     *
     * @return int
     */
    public function getUptimeInSec(): int
    {
        return $this->uptimeInSec;
    }
    /**
     * Uptime (in seconds) of the controller
     *
     * @param int $uptimeInSec
     *
     * @return self
     */
    public function setUptimeInSec(int $uptimeInSec): self
    {
        $this->initialized['uptimeInSec'] = true;
        $this->uptimeInSec = $uptimeInSec;
        return $this;
    }
    /**
     * Name of the controller
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the controller
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
     * SCG version
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * SCG version
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * AP version
     *
     * @return string
     */
    public function getApVersion(): string
    {
        return $this->apVersion;
    }
    /**
     * AP version
     *
     * @param string $apVersion
     *
     * @return self
     */
    public function setApVersion(string $apVersion): self
    {
        $this->initialized['apVersion'] = true;
        $this->apVersion = $apVersion;
        return $this;
    }
    /**
     * Control IP
     *
     * @return string
     */
    public function getControlIp(): string
    {
        return $this->controlIp;
    }
    /**
     * Control IP
     *
     * @param string $controlIp
     *
     * @return self
     */
    public function setControlIp(string $controlIp): self
    {
        $this->initialized['controlIp'] = true;
        $this->controlIp = $controlIp;
        return $this;
    }
    /**
     * Cluster IP
     *
     * @return string
     */
    public function getClusterIp(): string
    {
        return $this->clusterIp;
    }
    /**
     * Cluster IP
     *
     * @param string $clusterIp
     *
     * @return self
     */
    public function setClusterIp(string $clusterIp): self
    {
        $this->initialized['clusterIp'] = true;
        $this->clusterIp = $clusterIp;
        return $this;
    }
    /**
     * Management IP
     *
     * @return string
     */
    public function getManagementIp(): string
    {
        return $this->managementIp;
    }
    /**
     * Management IP
     *
     * @param string $managementIp
     *
     * @return self
     */
    public function setManagementIp(string $managementIp): self
    {
        $this->initialized['managementIp'] = true;
        $this->managementIp = $managementIp;
        return $this;
    }
    /**
     * Control IPv6
     *
     * @return string
     */
    public function getControlIpv6(): string
    {
        return $this->controlIpv6;
    }
    /**
     * Control IPv6
     *
     * @param string $controlIpv6
     *
     * @return self
     */
    public function setControlIpv6(string $controlIpv6): self
    {
        $this->initialized['controlIpv6'] = true;
        $this->controlIpv6 = $controlIpv6;
        return $this;
    }
    /**
     * Cluster IPv6
     *
     * @return string
     */
    public function getClusterIpv6(): string
    {
        return $this->clusterIpv6;
    }
    /**
     * Cluster IPv6
     *
     * @param string $clusterIpv6
     *
     * @return self
     */
    public function setClusterIpv6(string $clusterIpv6): self
    {
        $this->initialized['clusterIpv6'] = true;
        $this->clusterIpv6 = $clusterIpv6;
        return $this;
    }
    /**
     * Management IPv6
     *
     * @return string
     */
    public function getManagementIpv6(): string
    {
        return $this->managementIpv6;
    }
    /**
     * Management IPv6
     *
     * @param string $managementIpv6
     *
     * @return self
     */
    public function setManagementIpv6(string $managementIpv6): self
    {
        $this->initialized['managementIpv6'] = true;
        $this->managementIpv6 = $managementIpv6;
        return $this;
    }
    /**
     * @return list<SystemReservedPort>
     */
    public function getReservedPorts(): array
    {
        return $this->reservedPorts;
    }
    /**
     * @param list<SystemReservedPort> $reservedPorts
     *
     * @return self
     */
    public function setReservedPorts(array $reservedPorts): self
    {
        $this->initialized['reservedPorts'] = true;
        $this->reservedPorts = $reservedPorts;
        return $this;
    }
}