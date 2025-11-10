<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileVdpProfile
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
     * name of vdp  profile
     *
     * @var string
     */
    protected $name;
    /**
     * mac
     *
     * @var string
     */
    protected $mac;
    /**
     * IP
     *
     * @var string
     */
    protected $ip;
    /**
     * IPv6
     *
     * @var string
     */
    protected $ipv6;
    /**
     * external ip
     *
     * @var string
     */
    protected $extIp;
    /**
     * data vlan
     *
     * @var int
     */
    protected $dataVlan;
    /**
     * management ip
     *
     * @var string
     */
    protected $mgmtIp;
    /**
     * management external ip
     *
     * @var string
     */
    protected $mgmtExtIp;
    /**
     * management vlan
     *
     * @var int
     */
    protected $mgmtVlan;
    /**
     * managed by
     *
     * @var string
     */
    protected $managedBy;
    /**
     * model
     *
     * @var string
     */
    protected $model;
    /**
     * serialNumber
     *
     * @var string
     */
    protected $serialNumber;
    /**
     * Firmware version
     *
     * @var string
     */
    protected $fwVersion;
    /**
     * is support vdp
     *
     * @var bool
     */
    protected $isSupport;
    /**
     * last seen
     *
     * @var string
     */
    protected $lastSeenOn;
    /**
     * status
     *
     * @var string
     */
    protected $status;
    /**
     * registrationState
     *
     * @var string
     */
    protected $registrationState;
    /**
     * uptime
     *
     * @var string
     */
    protected $uptime;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    protected $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    protected $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    protected $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    protected $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    protected $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    protected $modifierUsername;
    /**
     * name of vdp  profile
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * name of vdp  profile
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
     * mac
     *
     * @return string
     */
    public function getMac(): string
    {
        return $this->mac;
    }
    /**
     * mac
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
     * IP
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * IP
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
     * IPv6
     *
     * @return string
     */
    public function getIpv6(): string
    {
        return $this->ipv6;
    }
    /**
     * IPv6
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
     * external ip
     *
     * @return string
     */
    public function getExtIp(): string
    {
        return $this->extIp;
    }
    /**
     * external ip
     *
     * @param string $extIp
     *
     * @return self
     */
    public function setExtIp(string $extIp): self
    {
        $this->initialized['extIp'] = true;
        $this->extIp = $extIp;
        return $this;
    }
    /**
     * data vlan
     *
     * @return int
     */
    public function getDataVlan(): int
    {
        return $this->dataVlan;
    }
    /**
     * data vlan
     *
     * @param int $dataVlan
     *
     * @return self
     */
    public function setDataVlan(int $dataVlan): self
    {
        $this->initialized['dataVlan'] = true;
        $this->dataVlan = $dataVlan;
        return $this;
    }
    /**
     * management ip
     *
     * @return string
     */
    public function getMgmtIp(): string
    {
        return $this->mgmtIp;
    }
    /**
     * management ip
     *
     * @param string $mgmtIp
     *
     * @return self
     */
    public function setMgmtIp(string $mgmtIp): self
    {
        $this->initialized['mgmtIp'] = true;
        $this->mgmtIp = $mgmtIp;
        return $this;
    }
    /**
     * management external ip
     *
     * @return string
     */
    public function getMgmtExtIp(): string
    {
        return $this->mgmtExtIp;
    }
    /**
     * management external ip
     *
     * @param string $mgmtExtIp
     *
     * @return self
     */
    public function setMgmtExtIp(string $mgmtExtIp): self
    {
        $this->initialized['mgmtExtIp'] = true;
        $this->mgmtExtIp = $mgmtExtIp;
        return $this;
    }
    /**
     * management vlan
     *
     * @return int
     */
    public function getMgmtVlan(): int
    {
        return $this->mgmtVlan;
    }
    /**
     * management vlan
     *
     * @param int $mgmtVlan
     *
     * @return self
     */
    public function setMgmtVlan(int $mgmtVlan): self
    {
        $this->initialized['mgmtVlan'] = true;
        $this->mgmtVlan = $mgmtVlan;
        return $this;
    }
    /**
     * managed by
     *
     * @return string
     */
    public function getManagedBy(): string
    {
        return $this->managedBy;
    }
    /**
     * managed by
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
     * model
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }
    /**
     * model
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
     * serialNumber
     *
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }
    /**
     * serialNumber
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
     * Firmware version
     *
     * @return string
     */
    public function getFwVersion(): string
    {
        return $this->fwVersion;
    }
    /**
     * Firmware version
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
     * is support vdp
     *
     * @return bool
     */
    public function getIsSupport(): bool
    {
        return $this->isSupport;
    }
    /**
     * is support vdp
     *
     * @param bool $isSupport
     *
     * @return self
     */
    public function setIsSupport(bool $isSupport): self
    {
        $this->initialized['isSupport'] = true;
        $this->isSupport = $isSupport;
        return $this;
    }
    /**
     * last seen
     *
     * @return string
     */
    public function getLastSeenOn(): string
    {
        return $this->lastSeenOn;
    }
    /**
     * last seen
     *
     * @param string $lastSeenOn
     *
     * @return self
     */
    public function setLastSeenOn(string $lastSeenOn): self
    {
        $this->initialized['lastSeenOn'] = true;
        $this->lastSeenOn = $lastSeenOn;
        return $this;
    }
    /**
     * status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * registrationState
     *
     * @return string
     */
    public function getRegistrationState(): string
    {
        return $this->registrationState;
    }
    /**
     * registrationState
     *
     * @param string $registrationState
     *
     * @return self
     */
    public function setRegistrationState(string $registrationState): self
    {
        $this->initialized['registrationState'] = true;
        $this->registrationState = $registrationState;
        return $this;
    }
    /**
     * uptime
     *
     * @return string
     */
    public function getUptime(): string
    {
        return $this->uptime;
    }
    /**
     * uptime
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
     * Timestamp of being created
     *
     * @return int
     */
    public function getCreateDateTime(): int
    {
        return $this->createDateTime;
    }
    /**
     * Timestamp of being created
     *
     * @param int $createDateTime
     *
     * @return self
     */
    public function setCreateDateTime(int $createDateTime): self
    {
        $this->initialized['createDateTime'] = true;
        $this->createDateTime = $createDateTime;
        return $this;
    }
    /**
     * Timestamp of being modified
     *
     * @return int
     */
    public function getModifiedDateTime(): int
    {
        return $this->modifiedDateTime;
    }
    /**
     * Timestamp of being modified
     *
     * @param int $modifiedDateTime
     *
     * @return self
     */
    public function setModifiedDateTime(int $modifiedDateTime): self
    {
        $this->initialized['modifiedDateTime'] = true;
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }
    /**
     * Creator ID
     *
     * @return string
     */
    public function getCreatorId(): string
    {
        return $this->creatorId;
    }
    /**
     * Creator ID
     *
     * @param string $creatorId
     *
     * @return self
     */
    public function setCreatorId(string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * Modifier ID
     *
     * @return string
     */
    public function getModifierId(): string
    {
        return $this->modifierId;
    }
    /**
     * Modifier ID
     *
     * @param string $modifierId
     *
     * @return self
     */
    public function setModifierId(string $modifierId): self
    {
        $this->initialized['modifierId'] = true;
        $this->modifierId = $modifierId;
        return $this;
    }
    /**
     * Creator Name
     *
     * @return string
     */
    public function getCreatorUsername(): string
    {
        return $this->creatorUsername;
    }
    /**
     * Creator Name
     *
     * @param string $creatorUsername
     *
     * @return self
     */
    public function setCreatorUsername(string $creatorUsername): self
    {
        $this->initialized['creatorUsername'] = true;
        $this->creatorUsername = $creatorUsername;
        return $this;
    }
    /**
     * Modifier Name
     *
     * @return string
     */
    public function getModifierUsername(): string
    {
        return $this->modifierUsername;
    }
    /**
     * Modifier Name
     *
     * @param string $modifierUsername
     *
     * @return self
     */
    public function setModifierUsername(string $modifierUsername): self
    {
        $this->initialized['modifierUsername'] = true;
        $this->modifierUsername = $modifierUsername;
        return $this;
    }
}