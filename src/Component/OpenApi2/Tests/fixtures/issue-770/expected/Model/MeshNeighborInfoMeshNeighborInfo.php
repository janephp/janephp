<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MeshNeighborInfoMeshNeighborInfo
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
     * The MAC of the neighbor AP
     *
     * @var string
     */
    protected $apMac;
    /**
     * The name of the neighbor AP
     *
     * @var string
     */
    protected $apName;
    /**
     * The IP of the neighbor AP
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * The external IP of the neighbor AP
     *
     * @var string
     */
    protected $externalIPAddress;
    /**
     * The model of the neighbor AP
     *
     * @var string
     */
    protected $apModel;
    /**
     * The firmware of the neighbor AP
     *
     * @var string
     */
    protected $apFirmware;
    /**
     * The channel of the neighbor AP
     *
     * @var string
     */
    protected $channel;
    /**
     * The connection status of the neighbor AP
     *
     * @var string
     */
    protected $connectionStatus;
    /**
     * The SNR of the neighbor AP
     *
     * @var int
     */
    protected $snr;
    /**
     * The zone name of the neighbor AP
     *
     * @var string
     */
    protected $zoneName;
    /**
     * The MAC of the neighbor AP
     *
     * @return string
     */
    public function getApMac(): string
    {
        return $this->apMac;
    }
    /**
     * The MAC of the neighbor AP
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
     * The name of the neighbor AP
     *
     * @return string
     */
    public function getApName(): string
    {
        return $this->apName;
    }
    /**
     * The name of the neighbor AP
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
     * The IP of the neighbor AP
     *
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
    /**
     * The IP of the neighbor AP
     *
     * @param string $ipAddress
     *
     * @return self
     */
    public function setIpAddress(string $ipAddress): self
    {
        $this->initialized['ipAddress'] = true;
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * The external IP of the neighbor AP
     *
     * @return string
     */
    public function getExternalIPAddress(): string
    {
        return $this->externalIPAddress;
    }
    /**
     * The external IP of the neighbor AP
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
     * The model of the neighbor AP
     *
     * @return string
     */
    public function getApModel(): string
    {
        return $this->apModel;
    }
    /**
     * The model of the neighbor AP
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
     * The firmware of the neighbor AP
     *
     * @return string
     */
    public function getApFirmware(): string
    {
        return $this->apFirmware;
    }
    /**
     * The firmware of the neighbor AP
     *
     * @param string $apFirmware
     *
     * @return self
     */
    public function setApFirmware(string $apFirmware): self
    {
        $this->initialized['apFirmware'] = true;
        $this->apFirmware = $apFirmware;
        return $this;
    }
    /**
     * The channel of the neighbor AP
     *
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }
    /**
     * The channel of the neighbor AP
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
     * The connection status of the neighbor AP
     *
     * @return string
     */
    public function getConnectionStatus(): string
    {
        return $this->connectionStatus;
    }
    /**
     * The connection status of the neighbor AP
     *
     * @param string $connectionStatus
     *
     * @return self
     */
    public function setConnectionStatus(string $connectionStatus): self
    {
        $this->initialized['connectionStatus'] = true;
        $this->connectionStatus = $connectionStatus;
        return $this;
    }
    /**
     * The SNR of the neighbor AP
     *
     * @return int
     */
    public function getSnr(): int
    {
        return $this->snr;
    }
    /**
     * The SNR of the neighbor AP
     *
     * @param int $snr
     *
     * @return self
     */
    public function setSnr(int $snr): self
    {
        $this->initialized['snr'] = true;
        $this->snr = $snr;
        return $this;
    }
    /**
     * The zone name of the neighbor AP
     *
     * @return string
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }
    /**
     * The zone name of the neighbor AP
     *
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
}