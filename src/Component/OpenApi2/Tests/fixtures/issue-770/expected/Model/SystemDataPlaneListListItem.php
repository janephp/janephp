<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemDataPlaneListListItem
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
     * Identifier of data plane
     *
     * @var string
     */
    protected $id;
    /**
     * DP MAC Address
     *
     * @var string
     */
    protected $mac;
    /**
     * IP address
     *
     * @var string
     */
    protected $ip;
    /**
     * IP address of ipv6
     *
     * @var string
     */
    protected $ipv6;
    /**
     * Managed By
     *
     * @var string
     */
    protected $managedBy;
    /**
     * Model
     *
     * @var string
     */
    protected $model;
    /**
     * Serial Number
     *
     * @var string
     */
    protected $serialNumber;
    /**
     * # of Ruckus GRE Tunnels
     *
     * @var string
     */
    protected $greTunnels;
    /**
     * Firmware
     *
     * @var string
     */
    protected $fwVersion;
    /**
     * Last Seen On
     *
     * @var string
     */
    protected $lastSeen;
    /**
     * Status
     *
     * @var string
     */
    protected $dpStatus;
    /**
     * Uptime
     *
     * @var string
     */
    protected $uptime;
    /**
     * Type
     *
     * @var string
     */
    protected $type;
    /**
     * Identifier of data plane
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of data plane
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
     * DP MAC Address
     *
     * @return string
     */
    public function getMac(): string
    {
        return $this->mac;
    }
    /**
     * DP MAC Address
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
     * IP address
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * IP address
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
     * IP address of ipv6
     *
     * @return string
     */
    public function getIpv6(): string
    {
        return $this->ipv6;
    }
    /**
     * IP address of ipv6
     *
     * @param string $ipv6
     *
     * @return self
     */
    public function setIpv6(string $ipv6): self
    {
        $this->initialized['ipv6'] = true;
        $this->ipv6 = $ipv6;
        return $this;
    }
    /**
     * Managed By
     *
     * @return string
     */
    public function getManagedBy(): string
    {
        return $this->managedBy;
    }
    /**
     * Managed By
     *
     * @param string $managedBy
     *
     * @return self
     */
    public function setManagedBy(string $managedBy): self
    {
        $this->initialized['managedBy'] = true;
        $this->managedBy = $managedBy;
        return $this;
    }
    /**
     * Model
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }
    /**
     * Model
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
     * Serial Number
     *
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }
    /**
     * Serial Number
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
     * # of Ruckus GRE Tunnels
     *
     * @return string
     */
    public function getGreTunnels(): string
    {
        return $this->greTunnels;
    }
    /**
     * # of Ruckus GRE Tunnels
     *
     * @param string $greTunnels
     *
     * @return self
     */
    public function setGreTunnels(string $greTunnels): self
    {
        $this->initialized['greTunnels'] = true;
        $this->greTunnels = $greTunnels;
        return $this;
    }
    /**
     * Firmware
     *
     * @return string
     */
    public function getFwVersion(): string
    {
        return $this->fwVersion;
    }
    /**
     * Firmware
     *
     * @param string $fwVersion
     *
     * @return self
     */
    public function setFwVersion(string $fwVersion): self
    {
        $this->initialized['fwVersion'] = true;
        $this->fwVersion = $fwVersion;
        return $this;
    }
    /**
     * Last Seen On
     *
     * @return string
     */
    public function getLastSeen(): string
    {
        return $this->lastSeen;
    }
    /**
     * Last Seen On
     *
     * @param string $lastSeen
     *
     * @return self
     */
    public function setLastSeen(string $lastSeen): self
    {
        $this->initialized['lastSeen'] = true;
        $this->lastSeen = $lastSeen;
        return $this;
    }
    /**
     * Status
     *
     * @return string
     */
    public function getDpStatus(): string
    {
        return $this->dpStatus;
    }
    /**
     * Status
     *
     * @param string $dpStatus
     *
     * @return self
     */
    public function setDpStatus(string $dpStatus): self
    {
        $this->initialized['dpStatus'] = true;
        $this->dpStatus = $dpStatus;
        return $this;
    }
    /**
     * Uptime
     *
     * @return string
     */
    public function getUptime(): string
    {
        return $this->uptime;
    }
    /**
     * Uptime
     *
     * @param string $uptime
     *
     * @return self
     */
    public function setUptime(string $uptime): self
    {
        $this->initialized['uptime'] = true;
        $this->uptime = $uptime;
        return $this;
    }
    /**
     * Type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type
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
}