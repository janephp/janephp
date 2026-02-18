<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MeshNodeInfoMeshNodeInfo
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
     * The MAC of the mesh AP
     *
     * @var string
     */
    protected $apMac;
    /**
     * The Role of the mesh AP
     *
     * @var string
     */
    protected $meshRole;
    /**
     * The name of the mesh AP
     *
     * @var string
     */
    protected $apName;
    /**
     * The model of the mesh AP
     *
     * @var string
     */
    protected $apModel;
    /**
     * The IP of the mesh AP
     *
     * @var int
     */
    protected $ipAddress;
    /**
     * The external IP of the mesh AP
     *
     * @var string
     */
    protected $externalIPAddress;
    /**
     * The channel of the mesh AP
     *
     * @var string
     */
    protected $channel;
    /**
     * The uplink channel of the mesh AP
     *
     * @var string
     */
    protected $uplinkChannel;
    /**
     * The downlink channel of the mesh AP
     *
     * @var string
     */
    protected $downlinkChannel;
    /**
     * The uplink SNR of the mesh AP
     *
     * @var int
     */
    protected $uplinkSnr;
    /**
     * The downlink SNR of the mesh AP
     *
     * @var int
     */
    protected $downlinkSnr;
    /**
     * The hasDownLink of the mesh AP
     *
     * @var bool
     */
    protected $hasDownLink;
    /**
     * The count of clients of the mesh AP
     *
     * @var int
     */
    protected $clientCount;
    /**
     * The hop count of this mesh AP
     *
     * @var int
     */
    protected $hops;
    /**
     * @var list<MeshNodeInfoHelperZoneInfo>
     */
    protected $helperZoneInfo;
    /**
     * The uplink MCS Rate of the mesh AP
     *
     * @var int
     */
    protected $uplinkMCSRate;
    /**
     * The downlink MCS Rate of the mesh AP
     *
     * @var int
     */
    protected $downlinkMCSRate;
    /**
     * The MAC of the mesh AP
     *
     * @return string
     */
    public function getApMac(): string
    {
        return $this->apMac;
    }
    /**
     * The MAC of the mesh AP
     *
     * @param string $apMac
     *
     * @return self
     */
    public function setApMac(string $apMac): self
    {
        $this->initialized['apMac'] = true;
        $this->apMac = $apMac;
        return $this;
    }
    /**
     * The Role of the mesh AP
     *
     * @return string
     */
    public function getMeshRole(): string
    {
        return $this->meshRole;
    }
    /**
     * The Role of the mesh AP
     *
     * @param string $meshRole
     *
     * @return self
     */
    public function setMeshRole(string $meshRole): self
    {
        $this->initialized['meshRole'] = true;
        $this->meshRole = $meshRole;
        return $this;
    }
    /**
     * The name of the mesh AP
     *
     * @return string
     */
    public function getApName(): string
    {
        return $this->apName;
    }
    /**
     * The name of the mesh AP
     *
     * @param string $apName
     *
     * @return self
     */
    public function setApName(string $apName): self
    {
        $this->initialized['apName'] = true;
        $this->apName = $apName;
        return $this;
    }
    /**
     * The model of the mesh AP
     *
     * @return string
     */
    public function getApModel(): string
    {
        return $this->apModel;
    }
    /**
     * The model of the mesh AP
     *
     * @param string $apModel
     *
     * @return self
     */
    public function setApModel(string $apModel): self
    {
        $this->initialized['apModel'] = true;
        $this->apModel = $apModel;
        return $this;
    }
    /**
     * The IP of the mesh AP
     *
     * @return int
     */
    public function getIpAddress(): int
    {
        return $this->ipAddress;
    }
    /**
     * The IP of the mesh AP
     *
     * @param int $ipAddress
     *
     * @return self
     */
    public function setIpAddress(int $ipAddress): self
    {
        $this->initialized['ipAddress'] = true;
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * The external IP of the mesh AP
     *
     * @return string
     */
    public function getExternalIPAddress(): string
    {
        return $this->externalIPAddress;
    }
    /**
     * The external IP of the mesh AP
     *
     * @param string $externalIPAddress
     *
     * @return self
     */
    public function setExternalIPAddress(string $externalIPAddress): self
    {
        $this->initialized['externalIPAddress'] = true;
        $this->externalIPAddress = $externalIPAddress;
        return $this;
    }
    /**
     * The channel of the mesh AP
     *
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }
    /**
     * The channel of the mesh AP
     *
     * @param string $channel
     *
     * @return self
     */
    public function setChannel(string $channel): self
    {
        $this->initialized['channel'] = true;
        $this->channel = $channel;
        return $this;
    }
    /**
     * The uplink channel of the mesh AP
     *
     * @return string
     */
    public function getUplinkChannel(): string
    {
        return $this->uplinkChannel;
    }
    /**
     * The uplink channel of the mesh AP
     *
     * @param string $uplinkChannel
     *
     * @return self
     */
    public function setUplinkChannel(string $uplinkChannel): self
    {
        $this->initialized['uplinkChannel'] = true;
        $this->uplinkChannel = $uplinkChannel;
        return $this;
    }
    /**
     * The downlink channel of the mesh AP
     *
     * @return string
     */
    public function getDownlinkChannel(): string
    {
        return $this->downlinkChannel;
    }
    /**
     * The downlink channel of the mesh AP
     *
     * @param string $downlinkChannel
     *
     * @return self
     */
    public function setDownlinkChannel(string $downlinkChannel): self
    {
        $this->initialized['downlinkChannel'] = true;
        $this->downlinkChannel = $downlinkChannel;
        return $this;
    }
    /**
     * The uplink SNR of the mesh AP
     *
     * @return int
     */
    public function getUplinkSnr(): int
    {
        return $this->uplinkSnr;
    }
    /**
     * The uplink SNR of the mesh AP
     *
     * @param int $uplinkSnr
     *
     * @return self
     */
    public function setUplinkSnr(int $uplinkSnr): self
    {
        $this->initialized['uplinkSnr'] = true;
        $this->uplinkSnr = $uplinkSnr;
        return $this;
    }
    /**
     * The downlink SNR of the mesh AP
     *
     * @return int
     */
    public function getDownlinkSnr(): int
    {
        return $this->downlinkSnr;
    }
    /**
     * The downlink SNR of the mesh AP
     *
     * @param int $downlinkSnr
     *
     * @return self
     */
    public function setDownlinkSnr(int $downlinkSnr): self
    {
        $this->initialized['downlinkSnr'] = true;
        $this->downlinkSnr = $downlinkSnr;
        return $this;
    }
    /**
     * The hasDownLink of the mesh AP
     *
     * @return bool
     */
    public function getHasDownLink(): bool
    {
        return $this->hasDownLink;
    }
    /**
     * The hasDownLink of the mesh AP
     *
     * @param bool $hasDownLink
     *
     * @return self
     */
    public function setHasDownLink(bool $hasDownLink): self
    {
        $this->initialized['hasDownLink'] = true;
        $this->hasDownLink = $hasDownLink;
        return $this;
    }
    /**
     * The count of clients of the mesh AP
     *
     * @return int
     */
    public function getClientCount(): int
    {
        return $this->clientCount;
    }
    /**
     * The count of clients of the mesh AP
     *
     * @param int $clientCount
     *
     * @return self
     */
    public function setClientCount(int $clientCount): self
    {
        $this->initialized['clientCount'] = true;
        $this->clientCount = $clientCount;
        return $this;
    }
    /**
     * The hop count of this mesh AP
     *
     * @return int
     */
    public function getHops(): int
    {
        return $this->hops;
    }
    /**
     * The hop count of this mesh AP
     *
     * @param int $hops
     *
     * @return self
     */
    public function setHops(int $hops): self
    {
        $this->initialized['hops'] = true;
        $this->hops = $hops;
        return $this;
    }
    /**
     * @return list<MeshNodeInfoHelperZoneInfo>
     */
    public function getHelperZoneInfo(): array
    {
        return $this->helperZoneInfo;
    }
    /**
     * @param list<MeshNodeInfoHelperZoneInfo> $helperZoneInfo
     *
     * @return self
     */
    public function setHelperZoneInfo(array $helperZoneInfo): self
    {
        $this->initialized['helperZoneInfo'] = true;
        $this->helperZoneInfo = $helperZoneInfo;
        return $this;
    }
    /**
     * The uplink MCS Rate of the mesh AP
     *
     * @return int
     */
    public function getUplinkMCSRate(): int
    {
        return $this->uplinkMCSRate;
    }
    /**
     * The uplink MCS Rate of the mesh AP
     *
     * @param int $uplinkMCSRate
     *
     * @return self
     */
    public function setUplinkMCSRate(int $uplinkMCSRate): self
    {
        $this->initialized['uplinkMCSRate'] = true;
        $this->uplinkMCSRate = $uplinkMCSRate;
        return $this;
    }
    /**
     * The downlink MCS Rate of the mesh AP
     *
     * @return int
     */
    public function getDownlinkMCSRate(): int
    {
        return $this->downlinkMCSRate;
    }
    /**
     * The downlink MCS Rate of the mesh AP
     *
     * @param int $downlinkMCSRate
     *
     * @return self
     */
    public function setDownlinkMCSRate(int $downlinkMCSRate): self
    {
        $this->initialized['downlinkMCSRate'] = true;
        $this->downlinkMCSRate = $downlinkMCSRate;
        return $this;
    }
}