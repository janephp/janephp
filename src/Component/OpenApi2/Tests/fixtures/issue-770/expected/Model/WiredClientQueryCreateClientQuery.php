<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WiredClientQueryCreateClientQuery
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
    protected $apName;
    /**
     * @var string
     */
    protected $ipv6Address;
    /**
     * @var string
     */
    protected $clientMac;
    /**
     * @var int
     */
    protected $traffic;
    /**
     * @var int
     */
    protected $uplink;
    /**
     * @var int
     */
    protected $downlink;
    /**
     * @var int
     */
    protected $txRxBytes;
    /**
     * @var int
     */
    protected $txRetry;
    /**
     * @var int
     */
    protected $txFrames;
    /**
     * @var string
     */
    protected $hostname;
    /**
     * @var int
     */
    protected $vlan;
    /**
     * @var int
     */
    protected $rxFrames;
    /**
     * @var string
     */
    protected $wlanType;
    /**
     * @var string
     */
    protected $osType;
    /**
     * @var string
     */
    protected $deviceType;
    /**
     * @var string
     */
    protected $osVendorType;
    /**
     * @var string
     */
    protected $modelName;
    /**
     * @var int
     */
    protected $rxBytes;
    /**
     * @var string
     */
    protected $ipAddress;
    /**
     * @var int
     */
    protected $sessionStartTime;
    /**
     * @var string
     */
    protected $apMac;
    /**
     * @var string
     */
    protected $userName;
    /**
     * @var string
     */
    protected $userRoleId;
    /**
     * @var string
     */
    protected $userRoleName;
    /**
     * @var int
     */
    protected $txBytes;
    /**
     * @var string
     */
    protected $authStatus;
    /**
     * @var int
     */
    protected $apEthID;
    /**
     * @var int
     */
    protected $vni;
    /**
     * @return string
     */
    public function getApName(): string
    {
        return $this->apName;
    }
    /**
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
     * @return string
     */
    public function getIpv6Address(): string
    {
        return $this->ipv6Address;
    }
    /**
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
     * @return string
     */
    public function getClientMac(): string
    {
        return $this->clientMac;
    }
    /**
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
     * @return int
     */
    public function getTraffic(): int
    {
        return $this->traffic;
    }
    /**
     * @param int $traffic
     *
     * @return self
     */
    public function setTraffic(int $traffic): self
    {
        $this->initialized['traffic'] = true;
        $this->traffic = $traffic;
        return $this;
    }
    /**
     * @return int
     */
    public function getUplink(): int
    {
        return $this->uplink;
    }
    /**
     * @param int $uplink
     *
     * @return self
     */
    public function setUplink(int $uplink): self
    {
        $this->initialized['uplink'] = true;
        $this->uplink = $uplink;
        return $this;
    }
    /**
     * @return int
     */
    public function getDownlink(): int
    {
        return $this->downlink;
    }
    /**
     * @param int $downlink
     *
     * @return self
     */
    public function setDownlink(int $downlink): self
    {
        $this->initialized['downlink'] = true;
        $this->downlink = $downlink;
        return $this;
    }
    /**
     * @return int
     */
    public function getTxRxBytes(): int
    {
        return $this->txRxBytes;
    }
    /**
     * @param int $txRxBytes
     *
     * @return self
     */
    public function setTxRxBytes(int $txRxBytes): self
    {
        $this->initialized['txRxBytes'] = true;
        $this->txRxBytes = $txRxBytes;
        return $this;
    }
    /**
     * @return int
     */
    public function getTxRetry(): int
    {
        return $this->txRetry;
    }
    /**
     * @param int $txRetry
     *
     * @return self
     */
    public function setTxRetry(int $txRetry): self
    {
        $this->initialized['txRetry'] = true;
        $this->txRetry = $txRetry;
        return $this;
    }
    /**
     * @return int
     */
    public function getTxFrames(): int
    {
        return $this->txFrames;
    }
    /**
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
     * @return string
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }
    /**
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
     * @return int
     */
    public function getVlan(): int
    {
        return $this->vlan;
    }
    /**
     * @param int $vlan
     *
     * @return self
     */
    public function setVlan(int $vlan): self
    {
        $this->initialized['vlan'] = true;
        $this->vlan = $vlan;
        return $this;
    }
    /**
     * @return int
     */
    public function getRxFrames(): int
    {
        return $this->rxFrames;
    }
    /**
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
     * @return string
     */
    public function getWlanType(): string
    {
        return $this->wlanType;
    }
    /**
     * @param string $wlanType
     *
     * @return self
     */
    public function setWlanType(string $wlanType): self
    {
        $this->initialized['wlanType'] = true;
        $this->wlanType = $wlanType;
        return $this;
    }
    /**
     * @return string
     */
    public function getOsType(): string
    {
        return $this->osType;
    }
    /**
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
     * @return string
     */
    public function getDeviceType(): string
    {
        return $this->deviceType;
    }
    /**
     * @param string $deviceType
     *
     * @return self
     */
    public function setDeviceType(string $deviceType): self
    {
        $this->initialized['deviceType'] = true;
        $this->deviceType = $deviceType;
        return $this;
    }
    /**
     * @return string
     */
    public function getOsVendorType(): string
    {
        return $this->osVendorType;
    }
    /**
     * @param string $osVendorType
     *
     * @return self
     */
    public function setOsVendorType(string $osVendorType): self
    {
        $this->initialized['osVendorType'] = true;
        $this->osVendorType = $osVendorType;
        return $this;
    }
    /**
     * @return string
     */
    public function getModelName(): string
    {
        return $this->modelName;
    }
    /**
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
     * @return int
     */
    public function getRxBytes(): int
    {
        return $this->rxBytes;
    }
    /**
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
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
    /**
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
     * @return int
     */
    public function getSessionStartTime(): int
    {
        return $this->sessionStartTime;
    }
    /**
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
     * @return string
     */
    public function getApMac(): string
    {
        return $this->apMac;
    }
    /**
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
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;
        return $this;
    }
    /**
     * @return string
     */
    public function getUserRoleId(): string
    {
        return $this->userRoleId;
    }
    /**
     * @param string $userRoleId
     *
     * @return self
     */
    public function setUserRoleId(string $userRoleId): self
    {
        $this->initialized['userRoleId'] = true;
        $this->userRoleId = $userRoleId;
        return $this;
    }
    /**
     * @return string
     */
    public function getUserRoleName(): string
    {
        return $this->userRoleName;
    }
    /**
     * @param string $userRoleName
     *
     * @return self
     */
    public function setUserRoleName(string $userRoleName): self
    {
        $this->initialized['userRoleName'] = true;
        $this->userRoleName = $userRoleName;
        return $this;
    }
    /**
     * @return int
     */
    public function getTxBytes(): int
    {
        return $this->txBytes;
    }
    /**
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
     * @return string
     */
    public function getAuthStatus(): string
    {
        return $this->authStatus;
    }
    /**
     * @param string $authStatus
     *
     * @return self
     */
    public function setAuthStatus(string $authStatus): self
    {
        $this->initialized['authStatus'] = true;
        $this->authStatus = $authStatus;
        return $this;
    }
    /**
     * @return int
     */
    public function getApEthID(): int
    {
        return $this->apEthID;
    }
    /**
     * @param int $apEthID
     *
     * @return self
     */
    public function setApEthID(int $apEthID): self
    {
        $this->initialized['apEthID'] = true;
        $this->apEthID = $apEthID;
        return $this;
    }
    /**
     * @return int
     */
    public function getVni(): int
    {
        return $this->vni;
    }
    /**
     * @param int $vni
     *
     * @return self
     */
    public function setVni(int $vni): self
    {
        $this->initialized['vni'] = true;
        $this->vni = $vni;
        return $this;
    }
}