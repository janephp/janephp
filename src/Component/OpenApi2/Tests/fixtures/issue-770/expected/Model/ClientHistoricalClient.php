<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClientHistoricalClient
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
     * Session start time of the client
     *
     * @var int
     */
    protected $sessionStartTime;
    /**
     * Session end time of the client
     *
     * @var int
     */
    protected $sessionEndTime;
    /**
     * Client MAC address
     *
     * @var string
     */
    protected $clientMac;
    /**
     * Client IP address
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * Client IPv6 address
     *
     * @var string
     */
    protected $ipv6Address;
    /**
     * Core network type of the client
     *
     * @var string
     */
    protected $coreNetworkType;
    /**
     * Hostname of the client
     *
     * @var string
     */
    protected $hostname;
    /**
     * OS type of the client
     *
     * @var string
     */
    protected $osType;
    /**
     * Model Name of the client
     *
     * @var string
     */
    protected $modelName;
    /**
     * MVNO name of the client
     *
     * @var string
     */
    protected $mvnoName;
    /**
     * Client connected AP's MAC address
     *
     * @var string
     */
    protected $apMac;
    /**
     * Client connected SSID name
     *
     * @var string
     */
    protected $ssid;
    /**
     * Bytes from client
     *
     * @var int
     */
    protected $txBytes;
    /**
     * Bytes to client
     *
     * @var int
     */
    protected $rxBytes;
    /**
     * Bytes from client
     *
     * @var int
     */
    protected $txFrames;
    /**
     * Bytes to client
     *
     * @var int
     */
    protected $rxFrames;
    /**
     * Dropped packets from client
     *
     * @var int
     */
    protected $txDrops;
    /**
     * Dropped packets to client
     *
     * @var int
     */
    protected $rxDrops;
    /**
     * Session start time of the client
     *
     * @return int
     */
    public function getSessionStartTime(): int
    {
        return $this->sessionStartTime;
    }
    /**
     * Session start time of the client
     *
     * @param int $sessionStartTime
     *
     * @return self
     */
    public function setSessionStartTime(int $sessionStartTime): self
    {
        $this->initialized['sessionStartTime'] = true;
        $this->sessionStartTime = $sessionStartTime;
        return $this;
    }
    /**
     * Session end time of the client
     *
     * @return int
     */
    public function getSessionEndTime(): int
    {
        return $this->sessionEndTime;
    }
    /**
     * Session end time of the client
     *
     * @param int $sessionEndTime
     *
     * @return self
     */
    public function setSessionEndTime(int $sessionEndTime): self
    {
        $this->initialized['sessionEndTime'] = true;
        $this->sessionEndTime = $sessionEndTime;
        return $this;
    }
    /**
     * Client MAC address
     *
     * @return string
     */
    public function getClientMac(): string
    {
        return $this->clientMac;
    }
    /**
     * Client MAC address
     *
     * @param string $clientMac
     *
     * @return self
     */
    public function setClientMac(string $clientMac): self
    {
        $this->initialized['clientMac'] = true;
        $this->clientMac = $clientMac;
        return $this;
    }
    /**
     * Client IP address
     *
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
    /**
     * Client IP address
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
     * Client IPv6 address
     *
     * @return string
     */
    public function getIpv6Address(): string
    {
        return $this->ipv6Address;
    }
    /**
     * Client IPv6 address
     *
     * @param string $ipv6Address
     *
     * @return self
     */
    public function setIpv6Address(string $ipv6Address): self
    {
        $this->initialized['ipv6Address'] = true;
        $this->ipv6Address = $ipv6Address;
        return $this;
    }
    /**
     * Core network type of the client
     *
     * @return string
     */
    public function getCoreNetworkType(): string
    {
        return $this->coreNetworkType;
    }
    /**
     * Core network type of the client
     *
     * @param string $coreNetworkType
     *
     * @return self
     */
    public function setCoreNetworkType(string $coreNetworkType): self
    {
        $this->initialized['coreNetworkType'] = true;
        $this->coreNetworkType = $coreNetworkType;
        return $this;
    }
    /**
     * Hostname of the client
     *
     * @return string
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }
    /**
     * Hostname of the client
     *
     * @param string $hostname
     *
     * @return self
     */
    public function setHostname(string $hostname): self
    {
        $this->initialized['hostname'] = true;
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * OS type of the client
     *
     * @return string
     */
    public function getOsType(): string
    {
        return $this->osType;
    }
    /**
     * OS type of the client
     *
     * @param string $osType
     *
     * @return self
     */
    public function setOsType(string $osType): self
    {
        $this->initialized['osType'] = true;
        $this->osType = $osType;
        return $this;
    }
    /**
     * Model Name of the client
     *
     * @return string
     */
    public function getModelName(): string
    {
        return $this->modelName;
    }
    /**
     * Model Name of the client
     *
     * @param string $modelName
     *
     * @return self
     */
    public function setModelName(string $modelName): self
    {
        $this->initialized['modelName'] = true;
        $this->modelName = $modelName;
        return $this;
    }
    /**
     * MVNO name of the client
     *
     * @return string
     */
    public function getMvnoName(): string
    {
        return $this->mvnoName;
    }
    /**
     * MVNO name of the client
     *
     * @param string $mvnoName
     *
     * @return self
     */
    public function setMvnoName(string $mvnoName): self
    {
        $this->initialized['mvnoName'] = true;
        $this->mvnoName = $mvnoName;
        return $this;
    }
    /**
     * Client connected AP's MAC address
     *
     * @return string
     */
    public function getApMac(): string
    {
        return $this->apMac;
    }
    /**
     * Client connected AP's MAC address
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
     * Client connected SSID name
     *
     * @return string
     */
    public function getSsid(): string
    {
        return $this->ssid;
    }
    /**
     * Client connected SSID name
     *
     * @param string $ssid
     *
     * @return self
     */
    public function setSsid(string $ssid): self
    {
        $this->initialized['ssid'] = true;
        $this->ssid = $ssid;
        return $this;
    }
    /**
     * Bytes from client
     *
     * @return int
     */
    public function getTxBytes(): int
    {
        return $this->txBytes;
    }
    /**
     * Bytes from client
     *
     * @param int $txBytes
     *
     * @return self
     */
    public function setTxBytes(int $txBytes): self
    {
        $this->initialized['txBytes'] = true;
        $this->txBytes = $txBytes;
        return $this;
    }
    /**
     * Bytes to client
     *
     * @return int
     */
    public function getRxBytes(): int
    {
        return $this->rxBytes;
    }
    /**
     * Bytes to client
     *
     * @param int $rxBytes
     *
     * @return self
     */
    public function setRxBytes(int $rxBytes): self
    {
        $this->initialized['rxBytes'] = true;
        $this->rxBytes = $rxBytes;
        return $this;
    }
    /**
     * Bytes from client
     *
     * @return int
     */
    public function getTxFrames(): int
    {
        return $this->txFrames;
    }
    /**
     * Bytes from client
     *
     * @param int $txFrames
     *
     * @return self
     */
    public function setTxFrames(int $txFrames): self
    {
        $this->initialized['txFrames'] = true;
        $this->txFrames = $txFrames;
        return $this;
    }
    /**
     * Bytes to client
     *
     * @return int
     */
    public function getRxFrames(): int
    {
        return $this->rxFrames;
    }
    /**
     * Bytes to client
     *
     * @param int $rxFrames
     *
     * @return self
     */
    public function setRxFrames(int $rxFrames): self
    {
        $this->initialized['rxFrames'] = true;
        $this->rxFrames = $rxFrames;
        return $this;
    }
    /**
     * Dropped packets from client
     *
     * @return int
     */
    public function getTxDrops(): int
    {
        return $this->txDrops;
    }
    /**
     * Dropped packets from client
     *
     * @param int $txDrops
     *
     * @return self
     */
    public function setTxDrops(int $txDrops): self
    {
        $this->initialized['txDrops'] = true;
        $this->txDrops = $txDrops;
        return $this;
    }
    /**
     * Dropped packets to client
     *
     * @return int
     */
    public function getRxDrops(): int
    {
        return $this->rxDrops;
    }
    /**
     * Dropped packets to client
     *
     * @param int $rxDrops
     *
     * @return self
     */
    public function setRxDrops(int $rxDrops): self
    {
        $this->initialized['rxDrops'] = true;
        $this->rxDrops = $rxDrops;
        return $this;
    }
}