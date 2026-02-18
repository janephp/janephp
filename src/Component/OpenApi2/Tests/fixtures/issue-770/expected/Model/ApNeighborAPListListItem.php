<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApNeighborAPListListItem
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
    protected $mac;
    /**
     * Name of the mesh neighbor AP
     *
     * @var string
     */
    protected $name;
    /**
     * Name of the zone which the mesh neighbor AP belongs to
     *
     * @var string
     */
    protected $zoneName;
    /**
     * IP address of the mesh neighbor AP
     *
     * @var string
     */
    protected $ip;
    /**
     * External IP of the mesh neighbor AP
     *
     * @var string
     */
    protected $externalIp;
    /**
     * External port of the mesh neighbor AP
     *
     * @var string
     */
    protected $externalPort;
    /**
     * Model of the mesh neighbor AP
     *
     * @var string
     */
    protected $model;
    /**
     * Firmware version of the mesh neighbor AP
     *
     * @var string
     */
    protected $version;
    /**
     * Channel of the mesh neighbor AP
     *
     * @var string
     */
    protected $channel;
    /**
     * Signal of the mesh neighbor AP
     *
     * @var string
     */
    protected $signal;
    /**
     * Connection state of the mesh neighbor AP
     *
     * @var string
     */
    protected $connectionState;
    /**
     * @return string
     */
    public function getMac(): string
    {
        return $this->mac;
    }
    /**
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
     * Name of the mesh neighbor AP
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the mesh neighbor AP
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
     * Name of the zone which the mesh neighbor AP belongs to
     *
     * @return string
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }
    /**
     * Name of the zone which the mesh neighbor AP belongs to
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
    /**
     * IP address of the mesh neighbor AP
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * IP address of the mesh neighbor AP
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
     * External IP of the mesh neighbor AP
     *
     * @return string
     */
    public function getExternalIp(): string
    {
        return $this->externalIp;
    }
    /**
     * External IP of the mesh neighbor AP
     *
     * @param string $externalIp
     *
     * @return self
     */
    public function setExternalIp(string $externalIp): self
    {
        $this->initialized['externalIp'] = true;
        $this->externalIp = $externalIp;
        return $this;
    }
    /**
     * External port of the mesh neighbor AP
     *
     * @return string
     */
    public function getExternalPort(): string
    {
        return $this->externalPort;
    }
    /**
     * External port of the mesh neighbor AP
     *
     * @param string $externalPort
     *
     * @return self
     */
    public function setExternalPort(string $externalPort): self
    {
        $this->initialized['externalPort'] = true;
        $this->externalPort = $externalPort;
        return $this;
    }
    /**
     * Model of the mesh neighbor AP
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }
    /**
     * Model of the mesh neighbor AP
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
     * Firmware version of the mesh neighbor AP
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * Firmware version of the mesh neighbor AP
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
     * Channel of the mesh neighbor AP
     *
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }
    /**
     * Channel of the mesh neighbor AP
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
     * Signal of the mesh neighbor AP
     *
     * @return string
     */
    public function getSignal(): string
    {
        return $this->signal;
    }
    /**
     * Signal of the mesh neighbor AP
     *
     * @param string $signal
     *
     * @return self
     */
    public function setSignal(string $signal): self
    {
        $this->initialized['signal'] = true;
        $this->signal = $signal;
        return $this;
    }
    /**
     * Connection state of the mesh neighbor AP
     *
     * @return string
     */
    public function getConnectionState(): string
    {
        return $this->connectionState;
    }
    /**
     * Connection state of the mesh neighbor AP
     *
     * @param string $connectionState
     *
     * @return self
     */
    public function setConnectionState(string $connectionState): self
    {
        $this->initialized['connectionState'] = true;
        $this->connectionState = $connectionState;
        return $this;
    }
}