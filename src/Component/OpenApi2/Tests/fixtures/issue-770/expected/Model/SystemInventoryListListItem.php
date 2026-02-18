<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemInventoryListListItem
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
    protected $zoneId;
    /**
     * @var string
     */
    protected $zoneName;
    /**
     * @var string
     */
    protected $meshSSID;
    /**
     * @var int
     */
    protected $totalAPs;
    /**
     * @var int
     */
    protected $discoveryAPs;
    /**
     * @var int
     */
    protected $provisionedAPs;
    /**
     * @var int
     */
    protected $connectedAPs;
    /**
     * @var int
     */
    protected $disconnectedAPs;
    /**
     * @var int
     */
    protected $rebootingAPs;
    /**
     * @var int
     */
    protected $connectedRootAPs;
    /**
     * @var int
     */
    protected $disconnectedRootAPs;
    /**
     * @var int
     */
    protected $rebootingRootAPs;
    /**
     * @var int
     */
    protected $connectedMeshAPs;
    /**
     * @var int
     */
    protected $disconnectedMeshAPs;
    /**
     * @var int
     */
    protected $rebootingMeshAPs;
    /**
     * @var int
     */
    protected $connectedeMeshAPs;
    /**
     * @var int
     */
    protected $disconnectedeMeshAPs;
    /**
     * @var int
     */
    protected $rebootingeMeshAPs;
    /**
     * @var int
     */
    protected $connectedDownMeshAPs;
    /**
     * @var int
     */
    protected $disconnectedDownMeshAPs;
    /**
     * @var int
     */
    protected $rebootingDownMeshAPs;
    /**
     * @var int
     */
    protected $connectedMeshDisabledAPs;
    /**
     * @var int
     */
    protected $disconnectedMeshDisabledAPs;
    /**
     * @var int
     */
    protected $clients;
    /**
     * @var string
     */
    protected $apFirmwareVersion;
    /**
     * @var bool
     */
    protected $meshEnabled;
    /**
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
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
     * @return string
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }
    /**
     * @param string $zoneName
     *
     * @return self
     */
    public function setZoneName(string $zoneName): self
    {
        $this->initialized['zoneName'] = true;
        $this->zoneName = $zoneName;
        return $this;
    }
    /**
     * @return string
     */
    public function getMeshSSID(): string
    {
        return $this->meshSSID;
    }
    /**
     * @param string $meshSSID
     *
     * @return self
     */
    public function setMeshSSID(string $meshSSID): self
    {
        $this->initialized['meshSSID'] = true;
        $this->meshSSID = $meshSSID;
        return $this;
    }
    /**
     * @return int
     */
    public function getTotalAPs(): int
    {
        return $this->totalAPs;
    }
    /**
     * @param int $totalAPs
     *
     * @return self
     */
    public function setTotalAPs(int $totalAPs): self
    {
        $this->initialized['totalAPs'] = true;
        $this->totalAPs = $totalAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getDiscoveryAPs(): int
    {
        return $this->discoveryAPs;
    }
    /**
     * @param int $discoveryAPs
     *
     * @return self
     */
    public function setDiscoveryAPs(int $discoveryAPs): self
    {
        $this->initialized['discoveryAPs'] = true;
        $this->discoveryAPs = $discoveryAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getProvisionedAPs(): int
    {
        return $this->provisionedAPs;
    }
    /**
     * @param int $provisionedAPs
     *
     * @return self
     */
    public function setProvisionedAPs(int $provisionedAPs): self
    {
        $this->initialized['provisionedAPs'] = true;
        $this->provisionedAPs = $provisionedAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getConnectedAPs(): int
    {
        return $this->connectedAPs;
    }
    /**
     * @param int $connectedAPs
     *
     * @return self
     */
    public function setConnectedAPs(int $connectedAPs): self
    {
        $this->initialized['connectedAPs'] = true;
        $this->connectedAPs = $connectedAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getDisconnectedAPs(): int
    {
        return $this->disconnectedAPs;
    }
    /**
     * @param int $disconnectedAPs
     *
     * @return self
     */
    public function setDisconnectedAPs(int $disconnectedAPs): self
    {
        $this->initialized['disconnectedAPs'] = true;
        $this->disconnectedAPs = $disconnectedAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getRebootingAPs(): int
    {
        return $this->rebootingAPs;
    }
    /**
     * @param int $rebootingAPs
     *
     * @return self
     */
    public function setRebootingAPs(int $rebootingAPs): self
    {
        $this->initialized['rebootingAPs'] = true;
        $this->rebootingAPs = $rebootingAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getConnectedRootAPs(): int
    {
        return $this->connectedRootAPs;
    }
    /**
     * @param int $connectedRootAPs
     *
     * @return self
     */
    public function setConnectedRootAPs(int $connectedRootAPs): self
    {
        $this->initialized['connectedRootAPs'] = true;
        $this->connectedRootAPs = $connectedRootAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getDisconnectedRootAPs(): int
    {
        return $this->disconnectedRootAPs;
    }
    /**
     * @param int $disconnectedRootAPs
     *
     * @return self
     */
    public function setDisconnectedRootAPs(int $disconnectedRootAPs): self
    {
        $this->initialized['disconnectedRootAPs'] = true;
        $this->disconnectedRootAPs = $disconnectedRootAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getRebootingRootAPs(): int
    {
        return $this->rebootingRootAPs;
    }
    /**
     * @param int $rebootingRootAPs
     *
     * @return self
     */
    public function setRebootingRootAPs(int $rebootingRootAPs): self
    {
        $this->initialized['rebootingRootAPs'] = true;
        $this->rebootingRootAPs = $rebootingRootAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getConnectedMeshAPs(): int
    {
        return $this->connectedMeshAPs;
    }
    /**
     * @param int $connectedMeshAPs
     *
     * @return self
     */
    public function setConnectedMeshAPs(int $connectedMeshAPs): self
    {
        $this->initialized['connectedMeshAPs'] = true;
        $this->connectedMeshAPs = $connectedMeshAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getDisconnectedMeshAPs(): int
    {
        return $this->disconnectedMeshAPs;
    }
    /**
     * @param int $disconnectedMeshAPs
     *
     * @return self
     */
    public function setDisconnectedMeshAPs(int $disconnectedMeshAPs): self
    {
        $this->initialized['disconnectedMeshAPs'] = true;
        $this->disconnectedMeshAPs = $disconnectedMeshAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getRebootingMeshAPs(): int
    {
        return $this->rebootingMeshAPs;
    }
    /**
     * @param int $rebootingMeshAPs
     *
     * @return self
     */
    public function setRebootingMeshAPs(int $rebootingMeshAPs): self
    {
        $this->initialized['rebootingMeshAPs'] = true;
        $this->rebootingMeshAPs = $rebootingMeshAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getConnectedeMeshAPs(): int
    {
        return $this->connectedeMeshAPs;
    }
    /**
     * @param int $connectedeMeshAPs
     *
     * @return self
     */
    public function setConnectedeMeshAPs(int $connectedeMeshAPs): self
    {
        $this->initialized['connectedeMeshAPs'] = true;
        $this->connectedeMeshAPs = $connectedeMeshAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getDisconnectedeMeshAPs(): int
    {
        return $this->disconnectedeMeshAPs;
    }
    /**
     * @param int $disconnectedeMeshAPs
     *
     * @return self
     */
    public function setDisconnectedeMeshAPs(int $disconnectedeMeshAPs): self
    {
        $this->initialized['disconnectedeMeshAPs'] = true;
        $this->disconnectedeMeshAPs = $disconnectedeMeshAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getRebootingeMeshAPs(): int
    {
        return $this->rebootingeMeshAPs;
    }
    /**
     * @param int $rebootingeMeshAPs
     *
     * @return self
     */
    public function setRebootingeMeshAPs(int $rebootingeMeshAPs): self
    {
        $this->initialized['rebootingeMeshAPs'] = true;
        $this->rebootingeMeshAPs = $rebootingeMeshAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getConnectedDownMeshAPs(): int
    {
        return $this->connectedDownMeshAPs;
    }
    /**
     * @param int $connectedDownMeshAPs
     *
     * @return self
     */
    public function setConnectedDownMeshAPs(int $connectedDownMeshAPs): self
    {
        $this->initialized['connectedDownMeshAPs'] = true;
        $this->connectedDownMeshAPs = $connectedDownMeshAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getDisconnectedDownMeshAPs(): int
    {
        return $this->disconnectedDownMeshAPs;
    }
    /**
     * @param int $disconnectedDownMeshAPs
     *
     * @return self
     */
    public function setDisconnectedDownMeshAPs(int $disconnectedDownMeshAPs): self
    {
        $this->initialized['disconnectedDownMeshAPs'] = true;
        $this->disconnectedDownMeshAPs = $disconnectedDownMeshAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getRebootingDownMeshAPs(): int
    {
        return $this->rebootingDownMeshAPs;
    }
    /**
     * @param int $rebootingDownMeshAPs
     *
     * @return self
     */
    public function setRebootingDownMeshAPs(int $rebootingDownMeshAPs): self
    {
        $this->initialized['rebootingDownMeshAPs'] = true;
        $this->rebootingDownMeshAPs = $rebootingDownMeshAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getConnectedMeshDisabledAPs(): int
    {
        return $this->connectedMeshDisabledAPs;
    }
    /**
     * @param int $connectedMeshDisabledAPs
     *
     * @return self
     */
    public function setConnectedMeshDisabledAPs(int $connectedMeshDisabledAPs): self
    {
        $this->initialized['connectedMeshDisabledAPs'] = true;
        $this->connectedMeshDisabledAPs = $connectedMeshDisabledAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getDisconnectedMeshDisabledAPs(): int
    {
        return $this->disconnectedMeshDisabledAPs;
    }
    /**
     * @param int $disconnectedMeshDisabledAPs
     *
     * @return self
     */
    public function setDisconnectedMeshDisabledAPs(int $disconnectedMeshDisabledAPs): self
    {
        $this->initialized['disconnectedMeshDisabledAPs'] = true;
        $this->disconnectedMeshDisabledAPs = $disconnectedMeshDisabledAPs;
        return $this;
    }
    /**
     * @return int
     */
    public function getClients(): int
    {
        return $this->clients;
    }
    /**
     * @param int $clients
     *
     * @return self
     */
    public function setClients(int $clients): self
    {
        $this->initialized['clients'] = true;
        $this->clients = $clients;
        return $this;
    }
    /**
     * @return string
     */
    public function getApFirmwareVersion(): string
    {
        return $this->apFirmwareVersion;
    }
    /**
     * @param string $apFirmwareVersion
     *
     * @return self
     */
    public function setApFirmwareVersion(string $apFirmwareVersion): self
    {
        $this->initialized['apFirmwareVersion'] = true;
        $this->apFirmwareVersion = $apFirmwareVersion;
        return $this;
    }
    /**
     * @return bool
     */
    public function getMeshEnabled(): bool
    {
        return $this->meshEnabled;
    }
    /**
     * @param bool $meshEnabled
     *
     * @return self
     */
    public function setMeshEnabled(bool $meshEnabled): self
    {
        $this->initialized['meshEnabled'] = true;
        $this->meshEnabled = $meshEnabled;
        return $this;
    }
}